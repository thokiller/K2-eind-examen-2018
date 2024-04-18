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
            <form class="form" method="POST" action="{{ url('/login') }}">
                {{ csrf_field() }}
                <h1>Inloggen</h1>
                <hr>
                <br>
                <div class="bs-row formfield">
                    <div class="bs-col-2">
                        <label for="customer_username" class="formfield__label">Gebruikersnaam</label>
                    </div>
                    <div class="bs-col-4">
                        <input class="textInput textInput--fullWidth" id="customer_username" name="customer_username" type="text" value="{{old('customer_username')}}"/>
                        @if ($errors->has('customer_username'))
                        <div class="help-block" style="display: block;">
                            {{ $errors->first('customer_username') }}
                        </div>
                        @endif
                    </div>
                </div>

                <div class="bs-row formfield">
                    <div class="bs-col-2">
                        <label for="password" class="formfield__label">Wachtwoord</label>
                    </div>
                    <div class="bs-col-4">
                        <input class="textInput textInput--fullWidth" id="password" name="password" type="password" />
                        @if ($errors->has('password'))
                            <div class="help-block" style="display: block;">
                                {{ $errors->first('password') }}
                            </div>
                        @endif
                    </div>
                </div>

                <div class="bs-row formfield">
                    <div class="bs-col-2"></div>
                    <div class="bs-col-2">
                        <input class="checkbox__input" type="checkbox" id="checkbox1" name="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="checkbox__label" for="checkbox1" tabindex="-1">Onthoud login</label>
                    </div>
                    <div class="bs-col-2">
                        <input type="submit" class="button" value="Submit">
                        @captcha()
                    </div>
                </div>

                <div class="bs-row formfield">
                    <div class="bs-col-2"></div>
                    <div class="bs-col-4">
                        <a href="{{ route('password.request') }}">
                            Wachtwoord vergeten?
                        </a>
                    </div>
                </div>


            </form>
        </div>
    </div>


@endsection
