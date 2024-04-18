@extends('layouts.template')

@section('content')
    <div class="content">
        <div class="container">
            <header class="heading-group b-mt-3 bs-row">
                <div class="bs-col-12 bs-col-md-10" style="display: flex; align-items: flex-end;">
                    <h1>Bestel {{ $object->brand }} {{ $object->type }}</h1>
                </div>
                <div class="bs-col-12 bs-col-md-2" style="display: flex; align-items: flex-end;">
                    <a href="{{ url('objects', ['id' => $object->obj_id]) }}" class="button button--arrowLeft detail_link full-width">
                        Details
                    </a>
                </div>
            </header>
            <div class="tile">
                <form method="post" action="{{ route('order_object_send', ['object' => $object->obj_id]) }}">
                    <div class="bs-row">
                        <div class="bs-col-12 bs-col-md-4" data-controller="generic/ui/DatePicker">
                            <label for="from-date" class="formfield__label">
                                Van
                            </label>
                            <input type="text" name="from-date" class="textInput textInput--fullWidth datePicker__input" id="from-date" placeholder="dd-mm-jjjj" data-id="{{ $object->obj_id }}" value="{{ old('from-date', (new DateTime())->format('d-m-Y')) }}">
                            <a href="#" class="datePicker__button icon icon--calendar--nsBlue picker__input" type="text" aria-haspopup="true" aria-expanded="false" aria-readonly="false">
                                <span class="alt">Kalender openen</span>
                            </a>
                        </div>
                        <div class="bs-col-12 bs-col-md-4" data-controller="generic/ui/DatePicker">
                            <label for="till-date" class="formfield__label">
                                Tot
                            </label>
                            <input type="text" name="till-date" class="textInput textInput--fullWidth datePicker__input" id="till-date" placeholder="dd-mm-jjjj" data-id="{{ $object->obj_id }}" value="{{ old('till-date', (new DateTime())->format('d-m-Y')) }}">
                            <a href="#" class="datePicker__button icon icon--calendar--nsBlue picker__input" type="text" aria-haspopup="true" aria-expanded="false" aria-readonly="false">
                                <span class="alt">Kalender openen</span>
                            </a>
                        </div>
                        <div class="bs-col-12 bs-col-md-4" style="display: flex; align-items: flex-end;">
                            <button type="button" id="availableBtn" class="button button--arrowLeft detail_link full-width" data-url="{{ route('object_check', ['object' => $object->obj_id]) }}">
                                Check beschikbaarheid
                            </button>
                        </div>
                        <div class="bs-col-12 bs-col-md-4 bs-offset-0 bs-offset-md-9">
                            <div id="result">

                            </div>
                        </div>
                    </div>
                    <div class="bs-row bs-mt-3">
                        <div class="bs-col-12 bs-col-md-4">
                            <h3>Camper info</h3>
                            <div class="richText">
                                <div class="tableContainer tableContainer--fade">
                                    <div class="tableContainer__content" data-table="">
                                        <table border="0" cellpadding="1" cellspacing="1" id="idTable" summary="Samenvatting">
                                            <tbody>
                                            <tr>
                                                <th>soort:</th>
                                                <td>
                                                    {{ $object->obj_type }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>merk:</th>
                                                <td>
                                                    {{ $object->brand }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>type:</th>
                                                <td>
                                                    {{ $object->type }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Benodigd rijbewijs:</th>
                                                <td>
                                                    {{ $object->license_needed }}
                                                    @if(!$userHasLicense)
                                                        <br />
                                                        <span class="bs-text-danger">Niet in bezit</span>
                                                    @endif
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bs-col-12 bs-col-md-4">
                            <h3>Selecteer opties:</h3>
                            <table>
                                @foreach($options as $option)
                                    <tr>
                                        <td>
                                            <input {{ (is_array(old('options')) && in_array($option->option_id, old('options'))) ? 'checked' : '' }} type="checkbox" class="checkbox__input" id="checkbox{{ $loop->index }}" name="options[]" value="{{ $option->option_id }}" />
                                            <label class="checkbox__label" for="checkbox{{ $loop->index }}" tabindex="-1">{{ $option->option_description }}</label>
                                        </td>
                                        <td>
                                            <strong>€{{ $option->option_price }}</strong>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>

                        </div>
                        <div class="bs-col-12 bs-col-md-4">
                            <div class="pricedetails__priceContainer">
                                @if(isset($priceArray['previous_day']))
                                    <div class="pricedetails__from"><span class="alt">van </span>€ {{ $priceArray['previous_day'] }}</div>
                                @endif
                                <div class="pricedetails__price"><span class="alt">voor </span> €{{ $priceArray['current_day'] }}</div>
                                <div class="pricedetails__after">per dag</div>
                            </div>
                            <div class="pricedetails__priceContainer">
                                @if(isset($priceArray['previous_week']))
                                    <div class="pricedetails__from"><span class="alt">van </span>€ {{ $priceArray['previous_week'] }}</div>
                                @endif
                                <div class="pricedetails__price"><span class="alt">voor </span> €{{ $priceArray['current_week'] }}</div>
                                <div class="pricedetails__after">per week</div>
                            </div>
                            <br />
                            <input type="checkbox" class="checkbox__input" id="checkbox-week" name="week" />
                            <label class="checkbox__label" for="checkbox-week" tabindex="-1">Betaal per week</label>
                            <br />
                            @if($userHasLicense)
                                <button type="submit" class="button button--arrowLeft detail_link">
                                    bestel
                                </button>
                            @else
                                <button disabled class="button button--arrowLeft detail_link">
                                    bestel
                                </button>
                            @endif
                            @if ($errors->has(null))
                                <div class="help-block" style="display: block;">
                                    {{ $errors->first() }}
                                </div>
                            @endif
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('js/order.js') }}"></script>
@endsection