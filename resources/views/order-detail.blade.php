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
        }

    </style>

@endsection

@section('content')

    <div class="content">
        <div class="container">

            <br>
            <header class="heading-group">
                <h1>Bestelling {{$data->ordernumber}}</h1>
            </header>

            <div class="bs-row">

                <div class="bs-col-7">
                    <div class="bs-row">
                        <div class="tile">
                            <div class="richText">
                                <div class="tableContainer tableContainer--fade">
                                    <div class="tableContainer__content" data-table="">
                                        <table border="0" cellpadding="1" cellspacing="1" id="idTable" summary="Samenvatting">
                                            <tbody>
                                                <tr>
                                                    <th>Huurder:</th>
                                                    <td>{{$user->customer_initial}} {{$user->customer_insertion}} {{$user->customer_lastname}}</td>
                                                </tr>
                                                <tr>
                                                    <th>vehuurde camper/caravan</th>
                                                    <td><a href="{{route('object_info',['id'=>$object->obj_id])}}"> {{$object->brand}} {{$object->type}} {{$object->year}}</a></td>
                                                </tr>
                                                <tr>
                                                    <th>datum besteld</th>
                                                    <td>{{$data->date_ordered}}</td>
                                                </tr>
                                                <tr>
                                                    <th>datum uit</th>
                                                    <td>{{$data->obj_date_in}}</td>
                                                </tr>
                                                <tr>
                                                    <th>datum terug</th>
                                                    <td>{{$data->obj_date_out}}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tableContainer__fadeElement" style="height: 719px;"></div>
                                </div>
                            </div>
                            <a href="{{ route('invoice', ['order' => $data->ordernumber]) }}" class="button button--arrowLeft button--secondary">
                                factuur
                            </a>
                        </div>
                    </div>
                    <br>
                </div>

                <div class="bs-col-5">
                    <div class="tile">
                        <h3>Opties:</h3>
                        <div class="richText">
                            <div class="tableContainer tableContainer--fade">
                                    <div class="tableContainer__content" data-table="">
                                        <table border="0" cellpadding="1" cellspacing="1" id="idTable" summary="Samenvatting">
                                            <tbody>
                                            @foreach($options as $option)
                                                <tr>
                                                <td>{{$option}}</td>
                                            </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                <div class="tableContainer__fadeElement" style="height: 719px;"></div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>

            <br>

        </div>
    </div>


@endsection
