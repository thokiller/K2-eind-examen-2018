@extends('layouts.template-home')

@section('content')

    <div class="content">

    <div class="hero hero--major hero--smallOverlap">
        <div class="heroCarousel" data-controller="generic/ui/HeroCarousel">
            <!-- BEGIN CAROUSEL LOADER // voor mobile only -->
            <div class="carousel-loader"></div>
            <!-- EIND CAROUSEL LOADER -->
            <ul class="heroCarousel__list">
                <li class="heroCarousel__item">
                    <!-- heroVisual-->
                    <div class="heroVisual">
                        <!--heroBanner start-->

                        <!--heroBanner end-->
                        <!--Carousel image Placeholder-->
                        <div class="picture-placeholder" data-srcset='{"pictureClass": "heroVisual__picture",
                                "imageClass": "img--contain",
                                "imageAlt": "slide 1",
                                "sources": [
                                    {"url": "img/slide1b.jpg"}
                                ]
                            }'>
                            </div>
                        </div>
                        <!-- / heroVisual-->
                    </li>
                    <li class="heroCarousel__item">
                        <!-- heroVisual-->
                        <div class="heroVisual">
                            <!--heroBanner start-->

                            <!--heroBanner end-->
                            <!--Carousel image Placeholder-->
                            <div class="picture-placeholder" data-srcset='{"pictureClass": "heroVisual__picture",
                                "imageClass": "img--contain",
                                "imageAlt": "slide 2",
                                "sources": [
                                    {"url": "img/slide2b.jpg"}
                                ]
                            }'>
                            </div>
                        </div>
                        <!-- / heroVisual-->
                    </li>
                    <li class="heroCarousel__item">
                        <!-- heroVisual-->
                        <div class="heroVisual">
                            <!--heroBanner start-->

                            <!--heroBanner end-->
                            <!--Carousel image Placeholder-->
                            <div class="picture-placeholder" data-srcset='{"pictureClass": "heroVisual__picture",
                                "imageClass": "img--contain",
                                "imageAlt": "slide 3",
                                "sources": [
                                    {"url": "img/slide3b.jpg"}
                                ]
                            }'>
                            </div>
                        </div>
                        <!-- / heroVisual-->
                    </li>
                </ul>
                <div class="heroCarousel__controlContainer heroCarousel__controlContainer--hidden">
                    <div class="container container--section heroCarousel__controls">
                        <div class="grid heroCarousel__control">
                            <div class="heroCarousel__controlItem grid__unit m-4-12 l-4-12">
                                <a href="javascript:void(0)" class="heroCarousel__controlLink">Afbeelding 1</a>
                            </div>
                            <div class="heroCarousel__controlItem grid__unit m-4-12 l-4-12">
                                <a href="javascript:void(0)" class="heroCarousel__controlLink">Afbeelding 2</a>
                            </div>
                            <div class="heroCarousel__controlItem grid__unit m-4-12 l-4-12">
                                <a href="javascript:void(0)" class="heroCarousel__controlLink">Afbeelding 3</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">

            <div class="tile tile--gradient">
                <h1>De Dissel camper en caravan verhuur</h1>
                <p>
                    Bij de Dissel kunt u voor een scherpe prijs een caravan of camper huren. <br>
                    Verder bieden wij ook de mogelijkheid aan om extra opties bij te huren zoals bijvoorbeeld een tv of een anulerings verzekering. <br>
                    Voor het huren van een caravan moet u wel eerst een proeve van bekwaamheid doen. Deze kunt u gewoon bij ons plannen. <br>
                    Één van onze professionele rijinstructeurs zal dan uw rijvaardigheid beoordelen. <br>
                    Voor het huren binnen het voor- en naseizoen hebben wij scherpe kortingen voor u klaar staan! <br>
                    Wilt u ook een van onze voertuigen huren voor uw trip? Registreert u zich dan <a href="{{url('/register')}}">hier</a>.
                </p>
            </div>

            <br>

        </div>

    </div>


@endsection
