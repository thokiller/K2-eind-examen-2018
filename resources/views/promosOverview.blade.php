@extends('layouts.template')

@section('head')

    <style>
        table{
            table-layout: fixed;
            width:100%;
        }

        .buttonSmall{
            width: 3rem;
            min-width: 0;
        }
    </style>

    @endsection

@section('content')

    <br>
    <header class="heading-group">
        <h1>Acties</h1>
    </header>
    <div class="tile">
        <button class="button button--arrowLeft" onclick="location.href = '/promos/newpromo';">Nieuwe actie</button>
        <br>
        <br>
        <div class="richText">
            <div class="tableContainer tableContainer--fade">
                <div class="tableContainer__content" data-table="">
                    <table border="0" cellpadding="1" cellspacing="1" id="idTable" summary="Samenvatting">
                        <thead>
                        <tr class="responsiveTable__headerRow">
                            <th scope="col"><strong>#</strong></th>
                            <th scope="col"><strong>Naam</strong></th>
                            <th scope="col"><strong>Percentage</strong></th>
                            <th scope="col"><strong>actief</strong></th>
                            <th scope="col"></th>
                        </tr>
                        </thead>
                        <tbody>
                        @php ($i = 1)

                        @foreach($promos as $promo)

                            <tr>
                                <th scope="row">{{$i++}}</th>
                                <td id="promoID" style="display: none">{{$promo->id}}</td>
                                <td>
                                    {{$objects->where('obj_id', $promo->object_id)->first()->license_plate}}
                                </td>
                                <td> {{$promo->percentage}} </td>
                                @if ($promo->active === 1)
                                    <td>Ja</td>
                                @else
                                    <td>Nee</td>
                                @endif
                                <td>
                                    <div class="bs-btn-group" role="group" aria-label="Buttons">
                                        <button class="button buttonSmall editPromo">
                                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                        </button>
                                        <button class="button buttonSmall button--nsRed deletePromo">
                                            <i class="fa fa-trash" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>

                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="tableContainer__fadeElement" style="height: 719px;"></div>
            </div>
        </div>
    </div>
    <br>

@endsection
