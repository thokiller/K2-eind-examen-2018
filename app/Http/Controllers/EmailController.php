<?php

namespace App\Http\Controllers;

use App\Mail\ConfirmEmail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use App\User;

class EmailController extends Controller
{
    public function index()
    {
        $email = Auth::user()->customer_email;
        return view('confirm-email', compact('email'));
    }

    public function send($email, $uuid = null)
    {
        if($uuid == null){
            $uuid = User::get()->where('customer_email' , $email)->first()->email_confirmed;
            Mail::to($email)->send(new ConfirmEmail($uuid));
            return redirect('/confirm-email');
        }

        return Mail::to($email)->send(new ConfirmEmail($uuid));
    }

    public function confirm($uuid)
    {
        User::get()->where('email_confirmed', $uuid)->first()->update([
            'email_confirmed' => 'confirmed'
        ]);

        return redirect('/home');
    }
}