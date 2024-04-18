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
            <form class="form" method="POST" action="{{url("/qualification")}}">

                {{ csrf_field() }}
                <h1>Rijvaardigheid check plannen</h1>
                <p>Hier kunt u de rijvaardigheid check inplannen.</p>
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
                    <h3 class="headingM">Kies een datum en tijd</h3>
                    <p>Vul een datum en tijd in wanneer u wilt komen.</p>
                </div>

                <div class="bs-row formfield">
                    <div class="bs-col-4"
                         data-controller="generic/ui/DatePicker"
                         data-config='{"apiConfig":{"numberOfYearsInThePast" : "0"}}'>
                        <label for="date" class="formfield__label">
                            Datum *
                        </label>
                        <input type="text" class="textInput textInput--fullWidth datePicker__input is-pristine" id="date" name="date" placeholder="mm-dd-jjjj" value="{{old('date')}}">
                        <a href="#" class="datePicker__button icon icon--calendar--nsBlue picker__input" id="P927820657" type="text" aria-haspopup="true" aria-expanded="false" aria-readonly="false" aria-owns="P927820657_root">
                            <span class="alt">Kalender openen</span>
                        </a>
                        @if ($errors->has('date'))
                            <div class="help-block" style="display: block;">
                                {{ $errors->first('date') }}
                            </div>
                        @endif
                    </div>

                    <div class="bs-col-4">
                        <label for="time" class="formfield__label">
                            Tijd *
                        </label>
                        <select class="select" id="time" name="time">
                            <option @if(old('time') == "09:00 - 10:00") selected @endif>09:00 - 10:00</option>
                            <option @if(old('time') == "10:00 - 11:00") selected @endif>10:00 - 11:00</option>
                            <option @if(old('time') == "11:00 - 12:00") selected @endif>11:00 - 12:00</option>
                            <option @if(old('time') == "12:00 - 13:00") selected @endif>12:00 - 13:00</option>
                            <option @if(old('time') == "13:00 - 14:00") selected @endif>13:00 - 14:00</option>
                            <option @if(old('time') == "14:00 - 15:00") selected @endif>14:00 - 15:00</option>
                        </select>
                        @if ($errors->has('time'))
                            <div class="help-block" style="display: block;">
                                {{ $errors->first('time') }}
                            </div>
                        @endif
                    </div>
                </div>

                <button type="submit" class="button">Plannen</button>

            </form>
        </div>
    </div>

@endsection
