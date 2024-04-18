<?php

namespace App\Http\Controllers\Auth;

use App\License;
use App\User;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/confirm-email';

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    private $user;

    public function __construct()
    {
        $this->middleware('guest');
        $this->user = new User();
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'initial' => 'required|string|max:255',
            'insertion' => 'max:255',
            'lastname' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'town' => 'required|string|max:255',
            'postal_code' => 'required|string|max:255',
            'phone' => 'max:255',
            'mobile' => 'required',
            'license_number' => 'required|max:11|unique:license',
            'license_issued' => 'required|date|max:255',
            'license_valid_till' => 'required|date|max:255|after:license_issued',
            'license_category' => 'required',
            'customer_username' => 'required|string|max:36|unique:users',
            'customer_email' => 'required|string|email|max:255|unique:users',
            'customer_password' => [
                'required',
                'string',
                'min:6',
                'max:255',
                'same:passwordRepeat',
                'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*(_|[^\w])).+$/'
            ]
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $uuid = $this->gen_uuid();

        License::create([
            'license_number' => $data['license_number'],
            'license_issued' => date("Y-m-d", strtotime($data['license_issued'])),
            'license_valid_till' => date("Y-m-d", strtotime($data['license_valid_till'])),
        ])->user()->create([
            'customer_initial' => $data['initial'],
            'customer_insertion' => $data['insertion'],
            'customer_lastname' => $data['lastname'],
            'customer_address' => $data['address'],
            'customer_town' => $data['town'],
            'customer_postal_code' => $data['postal_code'],
            'customer_phone' => $data['phone'],
            'customer_mobile' => $data['mobile'],
            'license_number' => $data['license_number'],
            'customer_email' => $data['customer_email'],
            'customer_username' => $data['customer_username'],
            'customer_password' => bcrypt($data['customer_password']),
            'customer_status' => '1',
            'email_confirmed' => $uuid,
            'is_admin' => false,
            'qualified' => false
        ]);

        foreach ($data['license_category'] as $license_category) {
            License::get()->where('license_number', $data['license_number'])->first()
                ->licenseType()->create([
                'license_type' => $license_category
            ]);
        }

        $email = new EmailController();
        $email->send($data['customer_email'], $uuid);

        return User::get()->where('license_number', $data['license_number'])->first();
    }
}
