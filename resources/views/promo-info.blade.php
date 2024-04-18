@extends('layouts.template')

@section('head')

    <style>
        form{
            width: 700px;
            margin: auto;
        }
    </style>

@endsection

@section('content')
    <div class="content">

        <div class="container container--section container--article container--clearHeader">
            <form class="form" method="POST" action="{{url("/promos/save")}}">
                <input type="hidden" name="object" value="{{$promo->id}}">

                {{ csrf_field() }}
                <h1>Actie bewerken</h1>
                <p>Hier kunt u een actie bewerken.</p>
                <hr>
                @if (!$errors->isEmpty())
                    <p class="inlineNotification inlineNotification--alert">
                                    <span class="icon icon--alert icon--nsRed icon--inline inlineNotification__icon">
                                        <span class="alt">Let op:</span>
                                    </span>
                        <span class="inlineNotification__text">Er zijn één of meerdere velden niet juist ingevuld. Controleer de gegevens en verstuur het formulier opnieuw.</span>
                    </p>
                @endif

                <div class="bs-row formfield">
                    <div class="bs-col-4">
                        <label for="object" class="formfield__label">
                            Object *
                        </label>
                        <select class="select" id="object" name="object" disabled>
                            @foreach($objects as $object)
                                <option @if($promo->object or old('object') == $object->license_plate) selected @endif
                                value="{{$object->obj_id}}">{{$object->license_plate}}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('object'))
                            <div class="help-block" style="display: block;">
                                {{ $errors->first('object') }}
                            </div>
                        @endif
                    </div>

                    <div class="bs-col-4">
                        <label for="percentage" class="formfield__label">
                            Percentage *
                        </label>
                        <input type="number" class="textInput textInput--fullWidth" id="percentage" name="percentage" value="{{$promo->percentage or old('percentage')}}">
                        @if ($errors->has('percentage'))
                            <div class="help-block" style="display: block;">
                                {{ $errors->first('percentage') }}
                            </div>
                        @endif
                    </div>
                </div>

                <div class="bs-row formfield">
                    <div class="bs-col-4">
                        <div class="bs-form-check bs-form-check-inline">

                            <input class="checkbox__input" type="checkbox" id="active" name="active"
                                   @if($promo->active or old('active')) checked @endif>
                            <label for="active" class="checkbox__label">
                                Actief *
                            </label>
                        </div>

                        @if ($errors->has('active'))
                            <div class="help-block" style="display: block;">
                                {{ $errors->first('active') }}
                            </div>
                        @endif
                    </div>

                </div>

                <button type="submit" class="button">Submit</button>

            </form>
        </div>
    </div>
@endsection
