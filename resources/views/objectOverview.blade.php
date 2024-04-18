@extends('layouts.template')

@section('head')

    <style>

        .tile{
            margin-bottom: 20px;
        }

        .detail_link{
            position: absolute;
            bottom: 0;
            right: 0;
        }

    </style>

@endsection

@section('content')
<div class="content">
    <div class="container">

        <br>
        <header class="heading-group">
            <h1>Alle campers en caravans</h1>
            <p>Dit zijn alle campers en caravans die wij hebben.</p>
        </header>

    @if (isset($objects))
            @foreach ($objects as $object)
                <div class="tile" >
                    <div class="bs-row">
                        <div class="bs-col-4">
                            <img src="{{$object->image_link}}" alt="placeholder"/>
                        </div>
                        <div class="bs-col-4">
                            <h3>{{$object->brand}} {{$object->type}} - {{$object->year}}</h3>
                        </div>
                        <div class="bs-col-4">
                            <a class="button button--arrowLeft detail_link" href="/objects/{{$object->obj_id}}">
                                Details en huren
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
</div>
@endsection
