<?php

namespace App\Http\Controllers;

use App\Mail\Invoice;
use App\Objects;
use App\Options;
use App\OrderOptions;
use App\Orders;
use App\Services\OrderService;
use App\User;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;

class OrderController extends Controller
{
    public function all()
    {
        $data = Orders::all();
        $object = Objects::all();
        $title= "Alle bestellingen";
        return view('orders', compact('data','object','title'));
    }
    
    public function myorders()
    {

        $data = orders::where('customer_id',Auth::id())->get();
        $object = objects::all();
        $title= "Mijn bestellingen";
        return view('orders', compact('data','object','title'));
    }
    
    public function order(Objects $object)
    {
        return view('order', [
            'object' => $object,
            'options' => Options::all(),
            'priceArray' => $object->getPriceArray(),
            'userHasLicense' => null !== Auth::user()
                    ->license()
                    ->first()
                    ->licenseType()
                    ->where('license_type', $object->license_needed)
                    ->first()
        ]);
    }

    public function orderSend(Request $request, Objects $object, OrderService $orderService)
    {
        $request->validate([
            'from-date' => 'required|date',
            'till-date' => 'required|date|after:from-date'
        ]);

        $options = $request->get('options', []);
        $paidWeekly = $request->has('week');

        $from = \DateTime::createFromFormat('d-m-Y', $request->get('from-date'));
        $till = \DateTime::createFromFormat('d-m-Y', $request->get('till-date'));

        $error = $orderService->validate($object, $from, $till);

        if (is_string($error)) {
            return Redirect::back()->withErrors([$error])->withInput();
        }

        $invoiceName = (new \DateTime())->format('Y-m-d_H-i-s') . '-' . str_random(3) . '-factuur.pdf';

        $order = $orderService->create($from, $till, $object, $invoiceName, $options);
        $price = $orderService->getObjectPrice($object, $from, $till, $paidWeekly);

        $orderService->sendInvoice(Auth::user(), $order, $object, $paidWeekly, $invoiceName, $price);

        return redirect('thank-you');
    }

    public function getInvoice(Orders $order)
    {
        if ( ! Auth::user()->is_admin && $order->customer_id !== Auth::id()) {
            abort(404);
        }

        return Response::make(Storage::get($order->invoice), 200, ['Content-Type' => 'application/pdf']);
    }

    public function detail($id)
    {
        $data = Orders::find($id);
        $user = User::find($data->customer_id);
        if ( ! Auth::user()->is_admin && $data->customer_id !== Auth::id()) {
            abort(404);
        }
        $object = objects::find($data->obj_id);
        $oropt = OrderOptions::where('ordernumber', $id)->get();
        $options = $oropt->map(function ($orderOption) {
            return $orderOption->option()->first()->option_description;
        })->toArray();

        return view('order-detail', compact('data', 'object', 'options', 'user'));
    }

    public function editOrder(Orders $order)
    {
        if(! Auth::user()->is_admin && Auth::id() !== $order->customer()->first()->customer_id) {
            abort(404);
        }

        return view('order-edit', [
            'order' => $order,
            'object' => $order->object()->first(),
            'from' => (new \DateTime($order->obj_date_in))->format('d-m-Y'),
            'till' => (new \DateTime($order->obj_date_out))->format('d-m-Y'),
            'options' => Options::all(),
            'optionArray' => $order->options()->map(function($option) {
                return $option->option_id;
            })->toArray(),
            'priceArray' => $order->object()->first()->getPriceArray()
        ]);
    }

    public function editOrderSend(Request $request, Orders $order, OrderService $orderService)
    {
        if(Auth::id() !== $order->customer()->first()->customer_id) {
            abort(404);
        }

        $request->validate([
            'from-date' => 'required|date',
            'till-date' => 'required|date|after:from-date'
        ]);

        $object = $order->object()->first();
        $options = $request->get('options', []);
        $paidWeekly = $request->has('week');

        $from = \DateTime::createFromFormat('d-m-Y', $request->get('from-date'));
        $till = \DateTime::createFromFormat('d-m-Y', $request->get('till-date'));

        $error = $orderService->validate($object, $from, $till, $order->ordernumber);

        if (is_string($error)) {
            return Redirect::back()->withErrors([$error])->withInput();
        }

        $invoiceName = (new \DateTime())->format('Y-m-d_H-i-s') . '-' . str_random(3) . '-factuur.pdf';

        foreach ($order->orderOptions()->get() as $orderOption) {
            $orderOption->delete();
        }

        $order->delete();

        $order = $orderService->create($from, $till, $object, $invoiceName, $options);
        $price = $orderService->getObjectPrice($object, $from, $till, $paidWeekly);

        $orderService->sendInvoice(Auth::user(), $order, $object, $paidWeekly, $invoiceName, $price);

        return redirect('thank-you');
    }

    public function deleteOrder(Orders $order)
    {
        if(Auth::id() !== $order->customer()->first()->customer_id) {
            abort(404);
        }

        foreach ($order->orderOptions()->get() as $orderOption) {
            $orderOption->delete();
        }

        $order->delete();

        return redirect()->route('my-order');
    }
}
