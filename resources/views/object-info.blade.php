@extends('layouts.template')

@section('head')

    <style>

        table{
            table-layout: fixed;
            width:100%;
        }

        .huren_link{
            margin: 2rem;
            position: absolute;
            bottom: 0;
            right: 0;
        }

        .priceContainer{
             float: right;
            margin-bottom: 4rem;
        }

        .imageContainer{
            min-height: 22.5rem;
        }

        img {
            max-width: 100%;
            max-height: 100%;
        }



    </style>

@endsection

@section('content')

    <div class="content">
        <div class="container">

            <br>
            <header class="heading-group">
                <h1>{{$object->brand}} {{$object->type}} - {{$object->year}}</h1>
            </header>

            <div class="bs-row">

                <div class="bs-col-7">
                    <div class="bs-row">
                        <div class="tile imageContainer">
                            <img src="{{$object->day_view_image_link}}" alt="placeholder"/>
                            <h3>Dag aanzicht</h3>
                        </div>
                    </div>

                    <br>

                    <div class="bs-row">
                        <div class="tile imageContainer">
                            <img src="{{$object->night_view_image_link}}" alt="placeholder"/>
                            <h3>Nacht aanzicht</h3>
                        </div>
                    </div>
                </div>

                <div class="bs-col-5">
                    <div class="tile">
                        <h3>Specificaties</h3>
                        <div class="richText">
                            <div class="tableContainer tableContainer--fade">
                                    <div class="tableContainer__content" data-table="">
                                        <table border="0" cellpadding="1" cellspacing="1" id="idTable" summary="Samenvatting">
                                            <tbody>
                                            <tr>
                                                <td>soort:</td>
                                                <td>{{$object->obj_type}}</td>
                                            </tr>
                                            <tr>
                                                <td>merk:</td>
                                                <td>{{$object->brand}}</td>
                                            </tr>
                                            <tr>
                                                <td>model:</td>
                                                <td>{{$object->type}}</td>
                                            </tr>
                                            <tr>
                                                <td>bouwjaar:</td>
                                                <td>{{$object->year}}</td>
                                            </tr>
                                            <tr>
                                                <td>lengte in cm:</td>
                                                <td>{{$object->length_construction}}</td>
                                            </tr>
                                            <tr>
                                                <td>totaal lengte in cm:</td>
                                                <td>{{$object->length_till}}</td>
                                            </tr>
                                            <tr>
                                                <td>hoogte in cm:</td>
                                                <td>{{$object->height}}</td>
                                            </tr>
                                            <tr>
                                                <td>gewicht in kg:</td>
                                                <td>{{$object->mass_inventory}}</td>
                                            </tr>
                                            <tr>
                                                <td>maximaal gewicht in kg:</td>
                                                <td>{{$object->mass_max}}</td>
                                            </tr>
                                            <tr>
                                                <td>Rijbewijs benodigt:</td>
                                                <td>{{$object->license_needed}}</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                <div class="tableContainer__fadeElement" style="height: 719px;"></div>
                            </div>
                        </div>
                        <div class="priceContainer">
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
                        </div>

                        <a class="button button--arrowLeft huren_link" href="{{url('/order/'.$object->obj_id)}}">
                            Huren
                        </a>

                    </div>
                </div>
            </div>

            <br>

        </div>
    </div>


@endsection
