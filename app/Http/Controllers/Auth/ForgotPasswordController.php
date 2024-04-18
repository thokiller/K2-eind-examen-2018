<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\PasswordForget;
use App\User;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Password;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * @param Request $request
     *
     * @return \Illuminate\Http\JsonResponse|\Illuminate\Http\RedirectResponse
     */
    public function sendResetLinkEmail(Request $request)
    {
        try {
            $name = $request->get('username');
            $user = User::where('customer_username', $name)->first();

            if (null === $user) {
                return back()->withErrors(
                    ['username' => 'username not found']
                );
            }

            $newPasswordPlain = str_random(8);
            $newPassword = Hash::make($newPasswordPlain);

            Mail::to($user->customer_email)
                ->send(new PasswordForget($newPasswordPlain, $user->getFullName()));

            $user->customer_password = $newPassword;
            $user->save();
        } catch (\Throwable $throwable) {
            return back()->withErrors(
                ['unknown_error' => $throwable->getMessage()]
            );
        }

        flash('Nieuw wachtwoord verzonden naar uw Email');

        return redirect('/login');
    }

    public function success()
    {
        return view('auth.passwords.success');
    }
}
