@extends('layouts.template')

@section('head')

    <link rel="stylesheet" href="https://login.ns.nl/static/css/bootstrap-popover.min.css?v=3.22.0">
    <link rel="stylesheet" href="{{ asset('css/password_validation.css') }}">

    <style>

        .form {
            padding-left: 6rem;
            padding-right: 6rem;
        }
        .tableContainer--fade .tableContainer__content{
            padding-right: 0px;
        }

    </style>

@endsection

@section('content')
    <div class="content">

        <div class="container">

            <br>
            <header class="heading-group">
                <h1>{{$title}}</h1>
            </header>
            <div class="tile">
                <div class="richText">
                    <div class="tableContainer tableContainer--fade" style="padding-right: 2rem">
                            <div class="tableContainer__content" data-table="">
                                <table border="0" cellpadding="1" cellspacing="1" id="idTable" summary="Samenvatting" style="width: 100%;   table-layout:  fixed;">
                                    <thead>
                                    <tr class="responsiveTable__headerRow">
                                        <th scope="col" style="min-width: 100px;"><strong>order nummer</strong></th>
                                        <th scope="col" style="min-width: 150px;"><strong>datum bestelling</strong></th>
                                        <th scope="col" style="min-width: 400px;"><strong>bestelde camper of caravan</strong></th>
                                        <th scope="col" style="min-width: 400px;"><strong>Verander bestelling</strong></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($data as $row)
                                    <tr onclick='window.location="{{route('order-detail',['id' =>$row->ordernumber])}}"'>
                                        <?php $key = $row->obj_id;?>
                                        <td>{{$row->ordernumber}}</td>
                                        <td>{{$row->date_ordered}}</td>
                                        <td>{{$row->object()->first()->brand}} {{$row->object()->first()->type}} {{$row->object()->first()->year}}</td>
                                        <td>
                                            <a type="button" href="{{ route('order_object_edit', ['order' => $row->ordernumber ]) }}">
                                                Verander bestelling
                                            </a>
                                        </td>
                                    </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tableContainer__fadeElement" style="height: 719px;"></div>
                    </div>
                </div>
            </div>
        <br>
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
