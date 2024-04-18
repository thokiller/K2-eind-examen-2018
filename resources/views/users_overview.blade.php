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
        .richText table tbody tr td,.richText table tbody tr th {
            background: #fff !important;
        }

    </style>

@endsection

@section('content')

    <br>
    <header class="heading-group">
        <h1>Gebruikers</h1>
    </header>
    <div class="tile">
        <div class="richText">
            <div class="tableContainer tableContainer--fade">
                <div class="tableContainer__content" data-table="">
                    <table border="0" cellpadding="1" cellspacing="1" id="idTable" summary="Samenvatting">
                        <thead>
                        <tr class="responsiveTable__headerRow">
                            <th scope="col"><strong>Achternaam</strong></th>
                            <th scope="col"><strong>Email</strong></th>
                            <th scope="col"><strong>Rijbewijsnummer</strong></th>
                            <th scope="col"><strong>Actief</strong></th>
                            <th scope="col"></th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($users as $user)

                            <tr>
                                <td style="display:none;" id="userID">{{$user->customer_id}}</td>
                                <td> {{$user->customer_lastname}} </td>
                                <td> {{$user->customer_email}} </td>
                                <td> {{$user->license_number}} </td>
                                @if ($user->customer_status == 1)
                                    <td>Ja</td>
                                @else
                                    <td>Nee</td>
                                @endif
                                <td>
                                    <div class="bs-btn-group" role="group" aria-label="Buttons">
                                        <button class="button deactivateUser">
                                            (de)activeren
                                        </button>
                                        <button class="button buttonSmall button--nsRed deleteUser">
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
