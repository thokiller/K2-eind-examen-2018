@extends('layouts.template')

@section('content')
<div class="content">
    <div class="container">
        <header class="heading-group b-mt-3 bs-row">
            <div class="bs-col-6" style="display: flex; align-items: flex-end;">
                <h1>{{ $object->license_plate }} Locatie</h1>
            </div>
            <div class="bs-col-4" data-controller="generic/ui/DatePicker">
                <label for="date" class="formfield__label">
                Datum
                </label>
                <input type="text" class="textInput textInput--fullWidth datePicker__input" id="date" placeholder="dd-mm-jjjj" data-id="{{ $object->obj_id }}" value="{{ (new DateTime())->format('d-m-Y') }}">
                <a href="#" class="datePicker__button icon icon--calendar--nsBlue picker__input" type="text" aria-haspopup="true" aria-expanded="false" aria-readonly="false">
                    <span class="alt">Kalender openen</span>
                </a>
            </div>
            <div class="bs-col-2" style="display: flex; align-items: flex-end;">
                <button id="dateBtn" class="button button--arrowLeft detail_link full-width">
                    Ga
                </button>
            </div>
        </header>
        <div id="result" class="tile">
            <i class="fa fa-circle-o-notch fa-spin bs-text-center full-width" style="font-size:24px"></i>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCxKcev1153EtqPSCmaJXip712iY3kwlbE"></script>
    <script src="{{ asset('js/location.js') }}"></script>
@endsection
