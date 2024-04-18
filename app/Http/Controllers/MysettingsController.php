<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\License;
use App\LicenseType;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Symfony\Component\HttpFoundation\Session\Flash;
class MysettingsController extends Controller
{
    public function index(){
        $user = Auth::user();
        $license = $user->license()->first();
        $type = $license->licenseType()->get()->map(function ($licenseType) {
            return $licenseType['license_type'];
        })->toArray();

        $license['license_issued'] = date("d-m-Y", strtotime($license['license_issued']));
        $license['license_valid_till'] = date("d-m-Y", strtotime($license['license_valid_till']));

        return view('mysettings', compact('user','license','type'));
    }
    protected function check($request)
    {
        return  $request->validate([
            'initial' => 'required|string|max:255',
            'insertion' => 'max:255',
            'lastname' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'town' => 'required|string|max:255',
            'postal_code' => 'required|string|max:255',
            'phone' => 'max:255',
            'mobile' => 'required|max:255',
            'license_number' => 'required|max:11|unique:license',
            'license_issued' => 'required|date|max:255',
            'license_valid_till' => 'required|date|max:255',
            'license_category' => 'required',
            'customer_email' => 'required|string|email|max:255',
            'customer_password' => [
                'nullable',
                'string',
                'min:6',
                'max:255',
                'same:passwordRepeat',
                'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*(_|[^\w])).+$/'
            ],
        ]);
    }
    protected function Datasave(Request $request)
    {
        $license = Auth::user();

        $trget =$license->license_number;
        LicenseType::where('license_number', $trget)->delete();
        License::where('license_number', $trget)->delete();

        $user = Auth::user();
        $user->customer_initial = $request->initial;
        $user->customer_insertion = $request->insertion;
        $user->customer_lastname = $request->lastname;
        $user->customer_address = $request->address;
        $user->customer_town = $request->town;
        $user->customer_postal_code = $request->postal_code;
        $user->customer_phone = $request->phone;
        $user->customer_mobile = $request->mobile;
        $user->license_number = $request->license_number;
        $user->customer_email = $request->customer_email;
        if (!$request->customer_password == '') {
            $user->customer_password = bcrypt($request->customer_password);
        }
        $user->save();

        License::create([
            'license_number' => $request->license_number,
            'license_issued' => date("Y-m-d", strtotime($request->license_issued)),
            'license_valid_till' => date("Y-m-d", strtotime($request->license_valid_till)),
        ]);
        foreach ($request->license_category as $license_category) {
            License::get()->where('license_number', $request->license_number)->first()
                ->licenseType()->create([
                    'license_type' => $license_category
                ]);
        }
    }
    public function update(request $request){
        $this->check($request);
        $email = $request->customer_email;
        $temp = User::where([
            ['customer_id', '!=', Auth::user()->customer_id],
            ['customer_email', $email]
        ])->first();

        if(null !== $temp) {
            $request->session()->flash('error', ' Email bestaat al bij een andere gebruiker en kan daarom niet naar worden veranderd');
            return Redirect::to('/my-settings');
        }
        else
        {
            $this->Datasave($request);
            flash('gegevens successvol opgeslagen!');

            return Redirect::to('/home');
        }
    }

}
