@extends('layouts.template')

@section('head')

    <style>

        form{
            width: 700px;
            margin: auto;
        }

        .hover:hover{
            cursor: pointer;
        }

    </style>

    <script src="https://use.fontawesome.com/104e182223.js"></script>

@endsection

@section('content')

    <div class="content">

        <div class="container container--section container--article container--clearHeader">
            <form class="form" method="POST" action="{{url("/admin/objects/create")}}">
                {{ csrf_field() }}
                <h1>Object maken</h1>
                <hr>
                @if (!$errors->isEmpty())
                    <p class="inlineNotification inlineNotification--alert">
                                    <span class="icon icon--alert icon--nsRed icon--inline inlineNotification__icon">
                                        <span class="alt">Let op:</span>
                                    </span>
                        <span class="inlineNotification__text">Er zijn één of meerdere velden niet juist ingevuld. Controleer de gegevens en verstuur het formulier opnieuw.</span>
                    </p>
                @endif

                <div class="form__text">
                    <h3 class="headingM">Algemeen</h3>
                    <p>Vul de gegevens in. * is verplicht.</p>
                </div>

                <div class="bs-row formfield">
                    <div class="bs-col-4">
                        <label for="license_plate" class="formfield__label">
                            Kenteken *
                        </label>
                        <input type="text" class="textInput textInput--fullWidth" id="license_plate" name="license_plate" value="{{old('license_plate')}}"/>
                        @if ($errors->has('license_plate'))
                            <div class="help-block" style="display: block;">
                                {{ $errors->first('license_plate') }}
                            </div>
                        @endif
                    </div>
                    <div class="bs-col-6">
                        <label for="chassis_number" class="formfield__label">
                            Chassisnummer *
                        </label>
                        <input type="text" class="textInput textInput--fullWidth" id="chassis_number" name="chassis_number" value="{{old('chassis_number')}}"/>
                        @if ($errors->has('chassis_number'))
                            <div class="help-block" style="display: block;">
                                {{ $errors->first('chassis_number') }}
                            </div>
                        @endif
                    </div>
                </div>

                <div class="bs-row formfield">
                    <div class="bs-col-6">
                        <label for="brand" class="formfield__label">
                            Merk *
                        </label>
                        <input type="text" class="textInput textInput--fullWidth" id="brand" name="brand" value="{{old('brand')}}"/>
                        @if ($errors->has('brand'))
                            <div class="help-block" style="display: block;">
                                {{ $errors->first('brand') }}
                            </div>
                        @endif
                    </div>
                    <div class="bs-col-4">
                        <label for="type" class="formfield__label">
                            Type *
                        </label>
                        <input type="text" class="textInput textInput--fullWidth" id="type" name="type" value="{{old('type')}}"/>
                        @if ($errors->has('type'))
                            <div class="help-block" style="display: block;">
                                {{ $errors->first('type') }}
                            </div>
                        @endif
                    </div>
                    <div class="bs-col-2">
                        <label for="year" class="formfield__label">
                            Jaar *
                        </label>
                        <input type="text" class="textInput textInput--fullWidth" id="year" name="year" value="{{old('year')}}"/>
                        @if ($errors->has('year'))
                            <div class="help-block" style="display: block;">
                                {{ $errors->first('year') }}
                            </div>
                        @endif
                    </div>
                </div>

                <div class="bs-row formfield">
                    <div class="bs-col-6">
                        <label class="formfield__label">
                            Rijbewijs benodigd *
                        </label>
                        <br>
                        <br>
                            <div class="bs-form-check">
                                <input class="radioButton__input" type="radio" name="obj_type" id="input_obj_type_caravan" value="caravan"
                                       @if(is_array(old('obj_type')) && in_array('caravan', old('obj_type'))) checked @endif>
                                <label class="radioButton__label" for="input_obj_type_caravan">Caravan</label>
                            </div>
                            <div class="bs-form-check">
                                <input class="radioButton__input" type="radio" name="obj_type" id="input_obj_type_camper" value="camper"
                                       @if(is_array(old('obj_type')) && in_array('camper', old('obj_type'))) checked @endif>
                                <label class="radioButton__label" for="input_obj_type_camper">Camper</label>
                            </div>
                            @if ($errors->has('obj_type'))
                                <div class="help-block" style="display: block;">
                                    {{ $errors->first('obj_type') }}
                                </div>
                            @endif
                    </div>
                </div>

                <div class="bs-row formfield">
                    <div class="bs-col-8">
                        <label class="formfield__label">
                            Rijbewijs benodigd *
                        </label>
                        <br>
                        <br>
                        <div class="bs-form-check bs-form-check-inline">
                            <input class="radioButton__input" type="radio" id="RijbewijsRadioButton1" value="B" name="license_needed"
                                   @if(is_array(old('license_needed')) && in_array('B', old('license_needed'))) checked @endif>
                            <label class="radioButton__label" for="RijbewijsRadioButton1">B</label>
                        </div>
                        <div class="bs-form-check bs-form-check-inline">
                            <input class="radioButton__input" type="radio" id="RijbewijsRadioButton2" value="BE" name="license_needed"
                                   @if(is_array(old('license_needed')) && in_array('BE', old('license_needed'))) checked @endif>
                            <label class="radioButton__label" for="RijbewijsRadioButton2">BE</label>
                        </div>
                        <div class="bs-form-check bs-form-check-inline">
                            <input class="radioButton__input" type="radio" id="RijbewijsRadioButton3" value="C" name="license_needed"
                                   @if(is_array(old('license_needed')) && in_array('C', old('license_needed'))) checked @endif>
                            <label class="radioButton__label" for="RijbewijsRadioButton3">C</label>
                        </div>
                        <div class="bs-form-check bs-form-check-inline">
                            <input class="radioButton__input" type="radio" id="RijbewijsRadioButton4" value="CE" name="license_needed"
                                   @if(is_array(old('license_needed')) && in_array('CE', old('license_needed'))) checked @endif>
                            <label class="radioButton__label" for="RijbewijsRadioButton4">CE</label>
                        </div>
                        <div class="bs-form-check bs-form-check-inline">
                            <input class="radioButton__input" type="radio" id="RijbewijsRadioButton5" value="D" name="license_needed"
                                   @if(is_array(old('license_needed')) && in_array('D', old('license_needed'))) checked @endif>
                            <label class="radioButton__label" for="RijbewijsRadioButton5">D</label>
                        </div>
                        <div class="bs-form-check bs-form-check-inline">
                            <input class="radioButton__input" type="radio" id="RijbewijsRadioButton6" value="DE" name="license_needed"
                                   @if(is_array(old('license_needed')) && in_array('DE', old('license_needed'))) checked @endif>
                            <label class="radioButton__label" for="RijbewijsRadioButton6">DE</label>
                        </div>
                        @if ($errors->has('license_needed'))
                            <div class="help-block" style="display: block;">
                                {{ $errors->first('license_needed') }}
                            </div>
                        @endif
                    </div>
                </div>

                <div class="form__text">
                    <h3 class="headingM">Maten</h3>
                    <p>Vul de gegevens in. * is verplicht.</p>
                </div>

                <div class="bs-row formfield">
                    <div class="bs-col-4">
                        <label for="mass_inventory" class="formfield__label">
                            Massa inventaris *
                        </label>
                        <input type="text" class="textInput textInput--fullWidth" id="mass_inventory" name="mass_inventory" value="{{old('mass_inventory')}}"/>
                        @if ($errors->has('mass_inventory'))
                            <div class="help-block" style="display: block;">
                                {{ $errors->first('mass_inventory') }}
                            </div>
                        @endif
                    </div>
                    <div class="bs-col-4">
                        <label for="mass_max" class="formfield__label">
                            Massa max *
                        </label>
                        <input type="text" class="textInput textInput--fullWidth" id="mass_max" name="mass_max" value="{{old('mass_max')}}"/>
                        @if ($errors->has('mass_max'))
                            <div class="help-block" style="display: block;">
                                {{ $errors->first('mass_max') }}
                            </div>
                        @endif
                    </div>
                </div>

                <div class="bs-row formfield">
                    <div class="bs-col-4">
                        <label for="length_till" class="formfield__label">
                            Lengte tot *
                        </label>
                        <input type="text" class="textInput textInput--fullWidth" id="length_till" name="length_till" value="{{old('length_till')}}"/>
                        @if ($errors->has('length_till'))
                            <div class="help-block" style="display: block;">
                                {{ $errors->first('length_till') }}
                            </div>
                        @endif
                    </div>
                    <div class="bs-col-4">
                        <label for="length_construction" class="formfield__label">
                            Lengte opbouw *
                        </label>
                        <input type="text" class="textInput textInput--fullWidth" id="length_construction" name="length_construction" value="{{old('length_construction')}}"/>
                        @if ($errors->has('length_construction'))
                            <div class="help-block" style="display: block;">
                                {{ $errors->first('length_construction') }}
                            </div>
                        @endif
                    </div>
                    <div class="bs-col-4">
                        <label for="height" class="formfield__label">
                            Hoogte *
                        </label>
                        <input type="text" class="textInput textInput--fullWidth" id="height" name="height" value="{{old('height')}}"/>
                        @if ($errors->has('height'))
                            <div class="help-block" style="display: block;">
                                {{ $errors->first('height') }}
                            </div>
                        @endif
                    </div>
                </div>

                <div class="form__text">
                    <h3 class="headingM">Afbeeldingen</h3>
                    <p>Vul de afbeelding urls in van de Hobby website</p>
                </div>

                <div class="bs-row formfield">
                    <div class="bs-col-12">
                        <label for="image_link" class="formfield__label">
                             Buitenkant *
                        </label>
                        <input type="text" class="textInput textInput--fullWidth" id="image_link" name="image_link" value="{{old('image_link')}}"/>
                        @if ($errors->has('image_link'))
                            <div class="help-block" style="display: block;">
                                {{ $errors->first('image_link') }}
                            </div>
                        @endif
                    </div>
                </div>

                <div class="bs-row formfield">
                    <div class="bs-col-12">
                        <label for="day_view_image_link" class="formfield__label">
                            Dag aanzicht *
                        </label>
                        <input type="text" class="textInput textInput--fullWidth" id="day_view_image_link" name="day_view_image_link" value="{{old('day_view_image_link')}}"/>
                        @if ($errors->has('day_view_image_link'))
                            <div class="help-block" style="display: block;">
                                {{ $errors->first('day_view_image_link') }}
                            </div>
                        @endif
                    </div>
                </div>

                <div class="bs-row formfield">
                    <div class="bs-col-12">
                        <label for="night_view_image_link" class="formfield__label">
                            Nacht aanzicht tot *
                        </label>
                        <input type="text" class="textInput textInput--fullWidth" id="night_view_image_link" name="night_view_image_link" value="{{old('night_view_image_link')}}"/>
                        @if ($errors->has('night_view_image_link'))
                            <div class="help-block" style="display: block;">
                                {{ $errors->first('night_view_image_link') }}
                            </div>
                        @endif
                    </div>
                </div>

                <div class="form__text">
                    <h3 class="headingM">Prijzen</h3>
                    <p>Vul de gegevens in. * is verplicht.</p>
                </div>

                <div class="bs-row formfield">
                    <div class="bs-col-4">
                        <label for="price_day" class="formfield__label">
                            Prijs per dag *
                        </label>
                        <input type="text" class="textInput textInput--fullWidth" id="price_day" name="price_day" value="{{old('price_day')}}"/>
                        @if ($errors->has('price_day'))
                            <div class="help-block" style="display: block;">
                                {{ $errors->first('price_day') }}
                            </div>
                        @endif
                    </div>
                    <div class="bs-col-4">
                        <label for="price_week" class="formfield__label">
                            Prijs per week *
                        </label>
                        <input type="text" class="textInput textInput--fullWidth" id="price_week" name="price_week" value="{{old('price_week')}}"/>
                        @if ($errors->has('price_week'))
                            <div class="help-block" style="display: block;">
                                {{ $errors->first('price_week') }}
                            </div>
                        @endif
                    </div>
                </div>

                <button type="submit" class="button">Object aanmaken</button>

            </form>
        </div>
    </div>

@endsection
