<!DOCTYPE html>
{{--include met @extends('layouts.template')--}}
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <title>{{ config('app.name', 'De Dissel') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="https://www.ns.nl/static/generic/2.19.0/css/generic.min.css">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-prefix.css') }}">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    {{--<link href="{{ asset('css/base.css') }}" rel="stylesheet">--}}

    <style>

        .alert {
            position: fixed;
            top: -80px;
            left: calc(50% - 30rem);
            padding: 20px;
            background-color: #4CAF50;
            color: white;
            margin-bottom: 15px;
            width: 60rem;
            z-index: 1000;
        }

    </style>

    @yield('head')

</head>
<body>

@include('flash::message')

<header class="header" data-controller="generic/ui/Header" >
    <h2 class="alt">Hoofdnavigatie</h2>
    <div class="container header__content">
        <div class="nslogo nslogo--header header__logo">
            <a class="nslogo__link" href="/" title="">
                <img class="nslogo__image" src="https://image.flaticon.com/icons/svg/172/172901.svg" alt="Logo"/>
            </a>
        </div>
        <ul class="header__container header__container--left">

            @if(Auth::user())
                <li class="header__item headerItem">
                    <a href="/" class="headerLink">Home</a>
                </li>
                <li class="header__item headerItem">
                    <a href="/objecten" class="headerLink">Voertuigen</a>
                </li>
                <li class="header__item headerItem">
                    <a href="/my-orders" class="headerLink">Bestellingen</a>
                </li>
            @endif

        </ul>



        <ul class="header__container header__container--right">
            @if(Auth::user())
                @if(Auth::user()->is_admin)
                    <li class="header__item headerItem" data-header-module="admin">
                        <div class="headerItem__main">
                            <a href="javascript:void(0)" class="headerLink" data-header-toggle="admin">
                                <span class="headerLink__text">Admin</span>
                            </a>
                            <a href="javascript:void(0)" class="headerCloseLink headerItem__closeLink" data-header-close="">Sluiten</a>
                        </div>
                        <div class="headerItem__expander">
                            <ul class="submenuList">
                                <li class="submenuItem">
                                    <a href="{{url('/admin/objects')}}" class="arrowLink">Objecten</a>
                                </li>

                                <li class="submenuItem">
                                    <a href="{{url('/promos')}}" class="arrowLink">Acties</a>
                                </li>

                                <li class="submenuItem">
                                    <a href="{{url('/orders')}}" class="arrowLink">Bestellingen</a>
                                </li>

                                <li class="submenuItem">
                                    <a href="{{url('/admin/qualifications')}}" class="arrowLink">Test momenten</a>
                                </li>

                                <li class="submenuItem">
                                    <a href="{{url('/users')}}" class="arrowLink">Gebruikers</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                @endif
            @endif

            <li class="header__item headerItem" data-header-module="mijndissel">
                <div class="headerItem__main">
                    <a href="javascript:void(0)" class="headerLink headerLink--myns" data-header-toggle="mijndissel">
                        <span class="headerLink__text">Mijn Dissel</span>
                    </a>
                    <a href="javascript:void(0)" class="headerCloseLink headerItem__closeLink" data-header-close="">Sluiten</a>
                </div>
                <div class="headerItem__expander">
                    <ul class="submenuList">

                        @if(Auth::user())
                            <li class="submenuItem">
                                <a href="{{url('/my-settings')}}" class="arrowLink">Profiel</a>
                            </li>
                            <li class="submenuItem">
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();"
                                   class="arrowLink">Uitloggen</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        @else
                            <li class="submenuItem">
                                <a href="{{url('/login')}}" class="arrowLink">Inloggen</a>
                            </li>
                            <li class="submenuItem">
                                <a href="{{url('/register')}}" class="arrowLink">Registreren</a>
                            </li>
                        @endif
                    </ul>

                    @if(!Auth::user())
                        <p>
                            Met een mijn Dissel-account kunt u een camper of caravan huren, en makkelijk uw gegevens beheren.
                        </p>
                    @endif
                </div>
            </li>

        </ul>
    </div>
</header>
{{--content met @section('content')--}}
        @yield('content')

<footer class="footer" style="z-index: -100;">
    <div class="container">
        <div class="grid grid--footer" data-type="bottomfootermenu">
            <div class="grid__unit">
                <div class="footer__menuContainer separator--largeTop">
                    <ul class="footer__menu list list--horizontal" data-controller="generic/ui/EqualWidth">
                        <li class="list__item">
                            Tel: 06-00326465
                        </li>
                        <li class="list__item">
                            Adres: grn.2.031
                        </li>
                    </ul>
                    <div class="nslogo nslogo--footer">
                        <a class="nslogo__link" href="{{url('/')}}" title="Ga naar de homepagina">
                            <img class="nslogo__image" src="https://image.flaticon.com/icons/svg/172/172901.svg" height="40" width="40" alt="Logo">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://www.ns.nl/static/generic/2.19.0/js/vendor/modernizr.latest.js" ></script>
<script src="https://www.ns.nl/static/generic/2.19.0/js/ns.generic.min.js" ></script>

<!-- Scripts -->
<script
        src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
<script src="{{ asset('js/base.js') }}" charset="utf-8"></script>
<script charset="utf-8">
    checkDocumentHight();

    function checkDocumentHight() {
        if ($(document).height() <= $(window).height()) {
            $('.content').css('height','calc(100vh - 3.75rem - 93px)').css('min-height', '0');
        }
    }
</script>

<script>

    animateAlert();

    function animateAlert() {
        $(".alert").animate({
            top: 0
        }, 800).animate({
            top: 0
        }, 2000).animate({
            top: -80
        }, 800);

    }

</script>

@yield('scripts')

</body>
</html>
