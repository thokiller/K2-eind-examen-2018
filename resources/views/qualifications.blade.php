@extends('layouts.template')

@section('head')

    <style>

        table{
            table-layout: fixed;
            width:100%;
        }

        #card-container{
            margin: auto;
            width: 1050px;
        }

        #h1{
            text-align: center;
        }

        .hover:hover{
            cursor: pointer;
        }

        .buttonSmall{
            width: 3rem;
            min-width: 0;
        }

        .modalButton{
            margin: 1rem;
            float: left;
        }


    </style>

    <script src="https://use.fontawesome.com/104e182223.js"></script>

@endsection

@section('content')

    <div class="content">
        <div class="container">
            <br>
            <header class="heading-group">
                <h1>Alle Test momenten</h1>
            </header>
            <div class="tile">
                <br>
                <br>
                <div class="richText">
                    <div class="tableContainer tableContainer--fade">
                        <div class="tableContainer__content" data-table="">
                            <table border="0" cellpadding="1" cellspacing="1" id="idTable" summary="Samenvatting">
                                <thead>
                                <tr class="responsiveTable__headerRow">
                                    <th scope="col"><strong>#</strong></th>
                                    <th scope="col"><strong>Achternaam</strong></th>
                                    <th scope="col"><strong>Test moment</strong></th>
                                    <th scope="col"></th>
                                </tr>
                                </thead>
                                <tbody>
                                @php ($i = 1)

                                @foreach($users as $user)

                                    <tr>
                                        <th scope="row">{{$i++}}</th>
                                        <td> {{$user->customer_lastname}} </td>
                                        <td> {{$user->test_moment}} </td>
                                        <td style="">
                                            <form method="POST" action="{{url("/admin/qualify/". $user->customer_id)}}">
                                                {{ csrf_field() }}
                                                <button type="submit" class="button">
                                                    <i class="fa fa-check" aria-hidden="true"></i>
                                                </button>
                                            </form>
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
        </div>
    </div>

@endsection
