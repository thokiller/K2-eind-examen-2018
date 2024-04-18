@extends('layouts.template')

<style>
    .form{
        padding-left: 6rem;
        padding-right: 6rem;
    }
</style>

@section('content')

    <div class="content">
        <div class="container container--section container--article container--clearHeader">
            <form class="form" method="POST" action="{{ route('password.email') }}">
                {{ csrf_field() }}
                <h1>Wachtwoord herstellen</h1>
                <hr>
                <br>
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <div class="bs-row formfield">
                    <div class="bs-col-2">
                        <label for="username" class="formfield__label">Gebruikersnaam</label>
                    </div>
                    <div class="bs-col-4">
                        <input class="textInput textInput--fullWidth" id="username" name="username" type="text"/>
                        @if ($errors->has('username'))
                            <div class="help-block" style="display: block;">
                                {{ $errors->first('username') }}
                            </div>
                        @endif
                    </div>
                </div>

                @if ($errors->has('unknown_error'))
                    <span class="help-block" style="display: block;">
                        @if (App::isLocal())
                            {{ $errors->first('unknown_error') }}
                        @else
                            Er is een onbekende fout opgetreden, probeer het later opnieuw
                        @endif
                    </span>
                @endif

                <div class="bs-row formfield">
                    <div class="bs-col-2"></div>
                    <div class="bs-col-2">
                        <input type="submit" class="button" value="Submit">
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
