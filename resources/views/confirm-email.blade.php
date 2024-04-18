@extends('layouts.template')

@section('head')

    <style>

        .container{
            text-align: center;
        }

    </style>

@endsection

@section('content')

    <br>

    <div class="tile">

        <img src="/email-icon.png" width="300">

        <h1>Bevestig eerst uw email.</h1>
        <h3>Kijk ook in uw spambox</h3>
        <a href="{{ url('/confirm-email/send/'.$email) }}">Klik hier om de email opnieuw te verzenden</a>

    </div>


@endsection
