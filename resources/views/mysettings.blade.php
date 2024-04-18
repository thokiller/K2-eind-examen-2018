@extends('layouts.template')

@section('head')

    <link rel="stylesheet" href="https://login.ns.nl/static/css/bootstrap-popover.min.css?v=3.22.0">
    <link rel="stylesheet" href="{{ asset('css/password_validation.css') }}">

    <style>

        .form{
            padding-left: 6rem;
            padding-right: 6rem;
        }

    </style>

@endsection

@section('content')

    <div class="content">

        <div class="container container--section container--article container--clearHeader">
            <form class="form" method="POST" action="{{ route('my-update') }}">
                {{ csrf_field() }}
                <h1>Profiel bijwerken</h1>
                <p>Hier kunt u een account gegevens aanpassen</p>
                <strong>Persoonlijke gegevens:</strong>
                @if(Session::has('error'))
                    <p class="inlineNotification inlineNotification--alert">
                                    <span class="icon icon--alert icon--nsRed icon--inline inlineNotification__icon">

                                    </span>
                        <span>Let op: {{Session::get('error')}}</span>
                        <span class="inlineNotification__text"></span>
                    </p>
                @endif

                <hr>
                @if (!$errors->isEmpty())
                    <p class="inlineNotification inlineNotification--alert">
                                    <span class="icon icon--alert icon--nsRed icon--inline inlineNotification__icon">
                                        <span class="alt">Let op:</span>
                                    </span>
                        <span class="inlineNotification__text">Er zijn één of meerdere velden niet juist ingevuld. Controleer uw gegevens en verstuur het formulier opnieuw.</span>
                    </p>
                @endif

                <div class="form__text">
                    <h3 class="headingM">Uw gegevens</h3>
                    <p>Vul uw gegevens in. * is verplicht.</p>
                </div>

                <div class="bs-row formfield">
                    <div class="bs-col-3">
                        <label for="initial" class="formfield__label">
                            Voorletters *
                        </label>
                        <input type="text" class="textInput textInput--fullWidth" id="initial" name="initial" value="{{$user->customer_initial or old('initial')}}"/>
                        @if ($errors->has('initial'))
                            <div class="help-block" style="display: block;">
                                {{ $errors->first('initial') }}
                            </div>
                        @endif
                    </div>
                    <div class="bs-col-2">
                        <label for="insertion" class="formfield__label">
                            Tussenvoegsel
                        </label>
                        <input type="text" class="textInput textInput--fullWidth" id="insertion" name="insertion" value="{{$user->customer_insertion or old('insertion')}}"/>
                        @if ($errors->has('insertion'))
                            <div class="help-block" style="display: block;">
                                {{ $errors->first('insertion') }}
                            </div>
                        @endif
                    </div>
                    <div class="bs-col-4">
                        <label for="lastname" class="formfield__label">
                            Achternaam *
                        </label>
                        <input type="text" class="textInput textInput--fullWidth" id="lastname" name="lastname" value="{{$user->customer_lastname or old('lastname')}}"/>
                        @if ($errors->has('lastname'))
                            <div class="help-block" style="display: block;">
                                {{ $errors->first('lastname') }}
                            </div>
                        @endif
                    </div>
                </div>

                <div class="bs-row formfield">
                    <div class="bs-col-6">
                        <label for="address" class="formfield__label">
                            Adres *
                        </label>
                        <input type="text" class="textInput textInput--fullWidth" id="address" name="address" value="{{$user->customer_address or old('address')}}"/>
                        @if ($errors->has('address'))
                            <div class="help-block" style="display: block;">
                                {{ $errors->first('address') }}
                            </div>
                        @endif
                    </div>
                </div>

                <div class="bs-row formfield">
                    <div class="bs-col-4">
                        <label for="town" class="formfield__label">
                            Stad *
                        </label>
                        <input type="text" class="textInput textInput--fullWidth" id="town" name="town" value="{{$user->customer_town or old('town')}}"/>
                        @if ($errors->has('town'))
                            <div class="help-block" style="display: block;">
                                {{ $errors->first('town') }}
                            </div>
                        @endif
                    </div>
                    <div class="bs-col-2">
                        <label for="postal_code" class="formfield__label">
                            Postcode *
                        </label>
                        <input type="text" class="textInput textInput--fullWidth" id="postal_code" name="postal_code" value="{{$user->customer_postal_code or old('postal_code')}}"/>
                        @if ($errors->has('postal_code'))
                            <div class="help-block" style="display: block;">
                                {{ $errors->first('postal_code') }}
                            </div>
                        @endif
                    </div>
                </div>

                <div class="bs-row formfield">
                    <div class="bs-col-4">
                        <label for="phone" class="formfield__label">
                            Telefoon nummer
                        </label>
                        <input type="text" class="textInput textInput--fullWidth" id="phone" name="phone" value="{{$user->customer_phone or old('phone')}}"/>
                        @if ($errors->has('phone'))
                            <div class="help-block" style="display: block;">
                                {{ $errors->first('phone') }}
                            </div>
                        @endif
                    </div>
                    <div class="bs-col-4">
                        <label for="mobile" class="formfield__label">
                            Mobiel nummer *
                        </label>
                        <input type="text" class="textInput textInput--fullWidth" id="mobile" name="mobile" value="{{$user->customer_mobile or old('mobile')}}"/>
                        @if ($errors->has('mobile'))
                            <div class="help-block" style="display: block;">
                                {{ $errors->first('mobile') }}
                            </div>
                        @endif
                    </div>
                </div>

                <div class="form__text">
                    <h3 class="headingM">Rijbewijs gegevens </h3>
                    <p>Vul uw gegevens in. * is verplicht.</p>
                </div>

                <div class="bs-row formfield">
                    <div class="bs-col-4">
                        <label for="license_number" class="formfield__label">
                            Rijbewijsnummer *
                        </label>
                        <input type="text" class="textInput inputSpacer__input textInput--fullWidth" id="license_number" name="license_number" value="{{old('license_number', $license->license_number ) }}"/>
                        @if ($errors->has('license_number'))
                            <div class="help-block" style="display: block;">
                                {{ $errors->first('license_number') }}
                            </div>
                        @endif
                    </div>
                </div>

                <div class="bs-row formfield">
                    <div class="bs-col-4" data-controller="generic/ui/DatePicker">
                        <label for="license_issued" class="formfield__label">
                            Rijbewijs afgegeven *
                        </label>
                        <input type="text" class="textInput textInput--fullWidth datePicker__input is-pristine" id="license_issued" name="license_issued" placeholder="mm-dd-jjjj" value="{{ $license->license_issued}}">
                        <a href="#" class="datePicker__button icon icon--calendar--nsBlue picker__input" id="P927820657" type="text" aria-haspopup="true" aria-expanded="false" aria-readonly="false" aria-owns="P927820657_root">
                            <span class="alt">Kalender openen</span>
                        </a>
                        @if ($errors->has('license_issued'))
                            <div class="help-block" style="display: block;">
                                {{ $errors->first('license_issued') }}
                            </div>
                        @endif
                    </div>
                    <div class="bs-col-4" data-controller="generic/ui/DatePicker">
                        <label for="license_valid_till" class="formfield__label">
                            Rijbewijs geldig tot *
                        </label>
                        <input type="text" class="textInput textInput--fullWidth datePicker__input is-pristine" id="license_valid_till" name="license_valid_till" placeholder="mm-dd-jjjj" value="{{$license->license_valid_till}}">
                        <a href="#" class="datePicker__button icon icon--calendar--nsBlue picker__input" id="P927820657" type="text" aria-haspopup="true" aria-expanded="false" aria-readonly="false" aria-owns="P927820657_root">
                            <span class="alt">Kalender openen</span>
                        </a>
                        @if ($errors->has('license_valid_till'))
                            <div class="help-block" style="display: block;">
                                {{ $errors->first('license_valid_till') }}
                            </div>
                        @endif
                    </div>
                </div>


                <div class="bs-row formfield">
                    <div class="bs-col-6">
                        <label for="customer_username" class="formfield__label">
                            Rijbewijs categorie(ën) *
                        </label>
                        <br>
                        <br>
                        <div class="bs-form-check bs-form-check-inline">
                            <input class="checkbox__input" type="checkbox" id="RijbewijsCheckbox1" value="B" name="license_category[]"
                                   @if(in_array('B',$type)) checked @endif>
                            <label class="checkbox__label" for="RijbewijsCheckbox1">B</label>
                        </div>
                        <div class="bs-form-check bs-form-check-inline">
                            <input class="checkbox__input" type="checkbox" id="RijbewijsCheckbox2" value="BE" name="license_category[]"
                                   @if(in_array('BE',$type)) checked @endif>
                            <label class="checkbox__label" for="RijbewijsCheckbox2">BE</label>
                        </div>
                        <div class="bs-form-check bs-form-check-inline">
                            <input class="checkbox__input" type="checkbox" id="RijbewijsCheckbox3" value="C" name="license_category[]"
                                   @if(in_array('C',$type)) checked @endif>
                            <label class="checkbox__label" for="RijbewijsCheckbox3">C</label>
                        </div>
                        <div class="bs-form-check bs-form-check-inline">
                            <input class="checkbox__input" type="checkbox" id="RijbewijsCheckbox4" value="CE" name="license_category[]"
                                   @if(in_array('CE',$type)) checked @endif>
                            <label class="checkbox__label" for="RijbewijsCheckbox4">CE</label>
                        </div>
                        <div class="bs-form-check bs-form-check-inline">
                            <input class="checkbox__input" type="checkbox" id="RijbewijsCheckbox5" value="D" name="license_category[]"
                                   @if(in_array('D',$type)) checked @endif>
                            <label class="checkbox__label" for="RijbewijsCheckbox5">D</label>
                        </div>
                        <div class="bs-form-check bs-form-check-inline">
                            <input class="checkbox__input" type="checkbox" id="RijbewijsCheckbox6" value="DE" name="license_category[]"
                                   @if(in_array('DE',$type)) checked @endif>
                            <label class="checkbox__label" for="RijbewijsCheckbox6">DE</label>
                        </div>
                        @if ($errors->has('license_category'))
                            <div class="help-block" style="display: block;">
                                {{ $errors->first('license_category') }}
                            </div>
                        @endif
                    </div>
                </div>

                <div class="form__text">
                    <h3 class="headingM">Account gegevens </h3>
                    <p>Vul uw gegevens in. * is verplicht.</p>
                </div>

                <div class="bs-row formfield">
                    <div class="bs-col-4">
                        <label for="customer_username" class="formfield__label">
                            Gebruikersnaam *
                        </label>
                        <input type="text" class="textInput textInput--fullWidth" id="customer_username" name="customer_username" disabled="disabled" value="{{$user->customer_username}}" style="background-color: lightgray"/>
                        @if ($errors->has('customer_username'))
                            <div class="help-block" style="display: block;">
                                {{ $errors->first('customer_username') }}
                            </div>
                        @endif
                    </div>
                </div>

                <div class="bs-row formfield">
                    <div class="bs-col-4">
                        <label for="customer_email" class="formfield__label">
                            Email *
                        </label>
                        <input type="email" class="textInput textInput--fullWidth" id="customer_email" name="customer_email" value="{{$user->customer_email or old('customer_email')}}"/>
                        @if ($errors->has('customer_email'))
                            <div class="help-block" style="display: block;">
                                {{ $errors->first('customer_email') }}
                            </div>
                        @endif
                    </div>
                </div>

                <div class="bs-row formfield">
                    <div class="bs-col-4">
                        <label for="customer_password" class="formfield__label">
                            Nieuw wachtwoord
                        </label>
                        <input type="password" name="customer_password" id="customer_password" autocomplete="off" class="textInput textInput--fullWidth popover-password popover-exclusive popover-initializable password-validation" data-popover-source="popover-password-source" data-popover-placement="bottom" data-popover-trigger="focus" maxlength="100">
                        <div id="popover-password-source" style="display: none;">
                            <div class="popover-text">
                                <h3>Het wachtwoord moet bevatten:</h3>
                                <ul class="password-criteria">
                                    <li data-password-criterium="lowerCaseCharRequired">minimaal één kleine letter</li>
                                    <li data-password-criterium="upperCaseCharRequired">minimaal één hoofdletter</li>
                                    <li data-password-criterium="specialCharRequired">minimaal één speciaal teken</li>
                                    <li data-password-criterium="digitRequired">minimaal één cijfer</li>
                                    <li data-password-criterium="minLength">minimaal 6 tekens</li>
                                </ul>

                            </div>
                        </div>
                        @if ($errors->has('customer_password'))
                            <div class="help-block" style="display: block;">
                                {{ $errors->first('customer_password') }}
                            </div>
                        @endif
                    </div>

                    <div class="bs-col-4">
                        <label for="passwordRepeat" class="formfield__label">
                            Herhaal Wachtwoord
                        </label>
                        <input type="password" class="textInput textInput--fullWidth" id="passwordRepeat" name="passwordRepeat"/>
                    </div>
                    @if ($errors->has('passwordRepeat'))
                        <div class="help-block" style="display: block;">
                            {{ $errors->first('passwordRepeat') }}
                        </div>
                    @endif
                </div>

                <br>
                <br>

                <button type="submit" class="button">Gegevens aanpassen</button>
                <button type="button" class="button button--nsRed" id="deleteAccount" data-id="{{$user->customer_id}}">Account deactiveren</button>
            </form>
        </div>
    </div>

@endsection


@section('scripts')

    <script>
        /*<![CDATA[*/
        var passwordPolicy = [];
        passwordPolicy['minLength'] = 6;
        passwordPolicy['maxLength'] = 100;
        passwordPolicy['digitRequired'] = true;
        passwordPolicy['specialCharRequired'] = true;
        passwordPolicy['lowerCaseCharRequired'] = true;
        passwordPolicy['upperCaseCharRequired'] = true;
        /*]]>*/
    </script>
    <script src="https://login.ns.nl/static/js/external/bootstrap-personal/bootstrap.min.js?v=3.22.0"></script>
    <script src="https://login.ns.nl/static/js/password-validation.js?v=3.22.0"></script>
    <script src="https://login.ns.nl/static/js/details-popover.js?v=3.22.0"></script>


@endsection
