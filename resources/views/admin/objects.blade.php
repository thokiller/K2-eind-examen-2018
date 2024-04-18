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
            position: relative;
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
                <h1>Alle objecten</h1>
            </header>
            <div class="tile">
                <button class="button button--arrowLeft" onclick="location.href = '{{url('/admin/objects/create')}}'">Object aanmaken</button>
                <br>
                <br>
                <div class="richText">
                    <div class="tableContainer tableContainer--fade">
                            <div class="tableContainer__content" data-table="">
                                <table border="0" cellpadding="1" cellspacing="1" id="idTable" summary="Samenvatting">
                                    <thead>
                                    <tr class="responsiveTable__headerRow">
                                        <th scope="col"><strong>#</strong></th>
                                        <th scope="col"><strong>Type</strong></th>
                                        <th scope="col"><strong>Merk</strong></th>
                                        <th scope="col"><strong>Kenteken</strong></th>
                                        <th scope="col"></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @php ($i = 1)

                                    @foreach($objects as $object)

                                        <tr>
                                            <th scope="row">{{$i++}}</th>
                                            <td> <a href="{{url('/objects/'.$object->obj_id)}}">{{$object->type}}</a> </td>
                                            <td> {{$object->brand}} </td>
                                            <td> {{$object->license_plate}} </td>
                                            <td style="">
                                                <div class="bs-btn-group" role="group" aria-label="Buttons">
                                                    <button type="button" class="button buttonSmall button--nsYellow" style="color: white"
                                                            onclick="location.href = '{{url('/location/'.$object->obj_id)}}'">
                                                        <i class="fa fa-map-marker" aria-hidden="true"></i></button>
                                                    <button type="button" class="button buttonSmall"
                                                            onclick="location.href = '{{url('/admin/objects/edit/'.$object->obj_id)}}'">
                                                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                                    <button class="button button--nsRed buttonSmall"
                                                            data-controller="generic/ui/ContentOpener"
                                                            data-config='{"type": "Overlay", "contentId": "overlay-content"}'
                                                            title="Overlay example"
                                                            onclick="link({{$object->obj_id}})">
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
        </div>
    </div>

    <!-- Modal -->

    <article class="richText richText--overlay is-hidden" data-controller="generic/ui/RichText" id="overlay-content">
        <h3>Weet u zeker dat u dit object wilt verwijderen?</h3>
        <button type="button" class="button modalButton overlay__close" data-dismiss="overlay-content">Nee</button>
        {!! Form::open(['id'=> 'delete', 'method' => 'POST', 'action' => ['ObjectsController@remove', '#' ]]) !!}
        {!! Form::hidden('_method', 'DELETE') !!}
        {!! Form::submit('ja', ['class' => 'button button--nsRed modalButton']) !!}
        {!! Form::close() !!}
    </article>
    <!-- Actual Overlay HTML  -->
    <!--
    <div class="overlay is-in-dom is-visible" aria-live="polite" role="dialog">
        <div class="overlay__scrollContainer" tabindex="">
            <div class="overlay__contentPositioner">
                <div class="overlay__content">
                    <div class="container">
                        <div class="grid">
                            <div class="grid__unit s-4-4 m-10-12 m-push-left-1-12 xl-8-12 xl-push-left-1-12">
                                <div class="overlay__body" data-contentcontainer="">
                                    <article class="richText richText--overlay" data-controller="generic/ui/RichText" id="overlay-content">
                                        Overlay content
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="javascript:void(0)" class="closeButton overlay__close">
                        <span class="icon">
                            <span class="alt">Sluiten</span>
                        </span>
                </a>
            </div>
        </div>
        <div class="darkener"></div>
    </div>
    -->

    <script>

        function link(id) {

            $("#delete").attr("action", "{{url('/admin/remove')}}/"+id);

        }

    </script>

@endsection
