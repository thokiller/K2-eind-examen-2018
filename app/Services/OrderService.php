<?php
namespace App\Services;


use App\Mail\Invoice;
use App\OrderOptions;
use App\Orders;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class OrderService
{
    public function sendInvoice($user, $order, $object, $paidWeekly, $invoiceName, $price)
    {
        $pdf = PDF::loadView('pdf.invoice', [
            'user'     => $user,
            'order'    => $order,
            'object'   => $object,
            'objPrice' => $price,
            'weekly'   => $paidWeekly
        ]);

        Mail::to($user->customer_email)
            ->send(new Invoice($pdf->stream(), $user->getFullName()));

        Storage::disk('local')->put($invoiceName, $pdf->stream());
    }

    public function create($from, $till, $object, $invoiceName, $options = [])
    {
        /** @var Orders $order */
        $order = Orders::create([
            'obj_date_in'  => $from,
            'obj_date_out' => $till,
            'date_ordered' => new \DateTime(),
            'customer_id'  => Auth::id(),
            'obj_id'       => $object->obj_id,
            'invoice'      => $invoiceName
        ]);

        foreach ($options as $option) {
            OrderOptions::create([
                'ordernumber'     => $order->ordernumber,
                'option_id'       => $option,
                'option_date_in'  => $from,
                'option_date_out' => $till
            ]);
        }

        return $order;
    }

    public function validate($object, $from, $till, $orderId = null)
    {
        if ('caravan' === $object->obj_type && Auth::user()->qualified != 1) {
            return 'U moet nog een rijvaardigheid plannen';
        }

        if ( ! $object->isAvailable($from, $till, $orderId)) {
            return 'Object is niet beschikbaar!';
        }

        $licenceTypeCheck = Auth::user()
            ->license()
            ->first()
            ->licenseType()
            ->where('license_type', $object->license_needed)
            ->first();

        if (null === $licenceTypeCheck) {
            return 'Gebruiker beschikt niet over het juiste rijbewijs type';
        }

        return null;
    }

    public function getObjectPrice($object, $from, $till, $paidWeekly)
    {
        $priceArray = $object->getPriceArray();
        $type = $paidWeekly ? 'week' : 'day';
        $price = $priceArray['current_' . $type];
        $price *= $paidWeekly ? ceil(((int)$till->diff($from)->format('%a') + 1) / 7) : ((int)$till->diff($from)->format('%a') + 1);

        return $price;
    }
}