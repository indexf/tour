@extends('layouts.app')

@section('content')


    <body>
    <div id="top" class="container-fluid">
        <div class="row flex-column img-style  img-mask  header" style="background: url('{{ asset('img/content/atour/'.$tour['main_img']) }}') no-repeat">

            @include('layouts.nav_menu')


        <div class="container d-flex flex-column align-items-center justify-content-center h-100 header--title">
            <div class="text-center"><h2 class="">{{ $tour['page_title'] }}</h2></div>
        </div>
        <div class="header--anchor">
            <a href="#start" class="scroll"><img src="{{ asset('img/next_icon.svg') }}" alt="svg"></a>
        </div>
    </div>
    <main id="start" class="main">
        <section class="row img-style tour_features--section" style="background:url('{{ asset('img/background@2x.jpg') }}') no-repeat;">
            {{--section-1--}}
            <div class="container">
                <div class="row">
                    <div class="w-100 d-flex justify-content-center"><img src="{{ asset('img/crab-with-two-claws.svg') }}" alt="svg"></div>
                    <div class="col-12 tour_features--text">
                        <p>{{ $tour['description'] }}</p>
                    </div>
                </div>
            </div>
            {{--section-2--}}
            <div class="container tour_features--tour">
                <div class="row">
                    <div class="col-md-7 col-sm-12">
                        <div class="tour_features--title"><h3>В стоимость включено</h3></div>
                        <ul class="tour_features--list list-style--check">
                            @if($price_included)
                                @foreach($price_included as $item)
                                    <li>{{ $item }}</li>
                                @endforeach
                            @endif
                            {{--<li>4-5 дворцов</li>--}}
                        </ul>
                    </div>
                    <div class="col-md-5 col-sm-12">
                        <div class="tour_features--map"><img src="{{ asset('img/map-location.svg') }}" alt="svg"></div>
                        <ul class="tour_features--list list-style--line">
                            @if($route)
                                @foreach($route as $item)
                                    <li>{{ $item }}</li>
                                @endforeach
                            @endif
                            {{--<li>Ливадийский </li>--}}
                        </ul>
                    </div>
                </div>
            </div>
            {{--section-3--}}
            <div class="container">
                <div class="row flex-column align-items-start col-12">
                    
                  	
                  	<div class="tour_features--title_bottom"><h3>Тур "{{ $tour['page_title'] }}" это:</h3></div>
                    <ul class="tour_features--list list-style--check">
                        @if($tour_this)
                            @foreach($tour_this as $item)
                                <li>{{ $item }}</li>
                            @endforeach
                        @endif
                        {{--<li>Трансфер</li>--}}
                    </ul>
                  	
                  	<div class="tour_features--title_bottom"><h3>Доп информация:</h3></div>
                    <ul class="tour_features--list list-style--check">
                        @if($tour_included)
                            @foreach($tour_included as $item)
                                <li>{{ $item }}</li>
                            @endforeach
                        @endif
                        {{--<li>Трансфер</li>--}}
                    </ul>
                    <div class="d-flex justify-content-center align-items-center tour_features--btn"><img src="{{ asset('img/price.svg') }}" alt="svg"><span>{{ number_format($tour['price'],0,'',' ') }}</span></div>
                </div>
            </div>
        </section>
        <section class="row flex-column tour_slick--section">
            <div class="row flex-column">
                <div class="w-100 d-flex justify-content-center"><img src="{{ asset('img/photo-camera.svg') }}" alt="svg"></div>
                <div class="w-100 d-flex justify-content-center tour_slick--title">
                    <h2>Фотографии тура</h2>
                </div>
                <div class="slick-slider--container">
                    <div class="slick-slider--show">
                        @if($photos)
                            @foreach($photos as $photo)
                                @if($photo['tour_id'] == $id)
                                    <div class="slick-slider--show-img"><img src="{{ asset('img/content/photo/'.$photo['path']) }}" alt="img"></div>
                                @endif
                            @endforeach
                        @endif
                        {{--<div class="slick-slider--show-img"><img src="{{ asset('img/prev_section_img.png') }}" alt="img"></div>--}}
                    </div>
                    <div class="slick-slider--prev">
                        @if($photos)
                            @foreach($photos as $photo)
                                @if($photo['tour_id'] == $id)
                                    <div class="slick-slider--prev-img"><img src="{{ asset('img/content/photo/'.$photo['path']) }}" alt="img"></div>
                                @endif
                            @endforeach
                        @endif
                        {{--<div class="slick-slider--prev-img"><img src="{{ asset('img/prev_section_img.png') }}" alt="img"></div>--}}
                    </div>
                </div>
            </div>
        </section>
        @if($tour['video'] !='')
        <section class="row mt-0 main_movie">

            <div class="container">
                <div class="row flex-column align-items-center main_movie--head">
                    <div class="main_movie--head--img"><img src="{{ asset('img/movie-symbol-of-video-camera.svg') }}" alt="svg"></div>
                    <div class="">
                        <p class="main_movie--head--text">{{ $tour['video_title'] }}</p>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <iframe width="860" height="480" src="https://www.youtube.com/embed/{{ $tour['video'] }}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                </div>
            </div>
        </section>
        @endif
        <section class="row flex-column img-style main_feedback--section" style="background:url('{{ asset('img/feedback-img.png') }}') no-repeat;">
            <div class="container main_feedback--container">
                <div class="row">
                    <div class="w-100 main_feedback--title">
                        <h2 class="w-100 text-center">оставить заявку</h2>
                    </div>
                </div>
            </div>
            <div class="container main_feedback--container">
                {!! Form::open(['url' => 'lead/create', 'id'=>'feedback' ,'class' => 'd-flex flex-column align-items-end main_feedback--form']) !!}
                <input type="hidden" value="{{ csrf_token() }}" name="_token">
                <div class="d-flex flex-md-row flex-column w-100 main_feedback--block">
                    <div class="w-100">
                        <input class="main_feedback--inp" type="text" name="name" placeholder="Имя" id="">
                    </div>
                    <div class="w-100">
                        <input class="main_feedback--inp" type="text" name="phone" placeholder="Телефон" id="">
                    </div>
                </div>
                <div class="w-100 main_feedback--block">
                    <textarea class="w-100 main_feedback--textarea" name="massege" placeholder="Написать" id=""></textarea>
                </div>
                <button type="submit" class="btn main_feedback--btn">Отправить</button>
                {!! Form::close() !!}
            </div>
        </section>
    </main>
    {{--footer--}}

@endsection()