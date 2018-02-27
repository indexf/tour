@extends('layouts.app')

@section('content')
        {{--body--}}
        <body>
        <div id="top" class="container-fluid">
            <div class="row flex-column img-style header" style="background: url('{{ asset('img/img-1.png') }}') no-repeat">

                @include('layouts.nav_menu')

        <div class="container d-flex flex-column align-items-center justify-content-center h-100 header--title">
            <div class="text-center"><h2 class="">Приглашаем Вас в путешествие по<br/> Крыму и Абхазии</h2></div>
            <div class="header--btn"><a href="{{ route('about') }}">Подробнее</a></div>
        </div>
        <div class="header--anchor">
            <a href="#start" class="scroll"><img src="{{ asset('img/next_icon.svg') }}" alt="svg"></a>
        </div>
        <div class="header--table" style="display: none">
            <ul class="list-style header--table--container">
                <li class="w-100 text-center header--table--row row--font-style">Крым</li>
                <li class="header--table--section">
                    <ul class="p-0 list-style d-flex flex-row h-100">
                        <li class="w-50 text-center header--table--col col--font-style">-7&#8451;</li>
                        <li class="w-50 text-center header--table--col"><img src="{{ asset('img/shining-sun.svg') }}"
                                                                             alt="svg"></li>
                    </ul>
                </li>
                <li class="w-100 text-center header--table--row row--font-style">Абхазия</li>
                <li class="header--table--section">
                    <ul class="list-style d-flex flex-row h-100">
                        <li class="w-50 text-center header--table--col col--font-style">+19&#8451;</li>
                        <li class="w-50 text-center header--table--col"><img src="{{ asset('img/cloud.svg') }}"
                                                                             alt="svg"></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>

    <main class="main">
        <section id="start" class="row img-style main_tour--section" style="background:url('{{ asset('img/background@2x.jpg') }}') no-repeat;">
            <div class="container" id="Crimea">
                <div class="row flex-column align-items-center main_tour--section--title-container">
                    <div class="main_tour--section--img"><img src="{{ asset('img/crab-with-two-claws.svg') }}" alt="svg"></div>
                    <div class="">
                        <h2 class="main_tour--section--title">Крым</h2>
                        <p class="main_tour--section--text">{{ $main['description_criemea'] }} </p>
                    </div>
                </div>

                <div class="row main_tour--wrapper">
                    {{--section-1--}}

                    @if($tours)
                        @foreach($tours as $tour)
                            @if($tour['group'] == 'Crimea')
                                <a class="col-md-4 col-sm-12 main_tour--block" href="tour?id={{ $tour['id']}}">
                                    <div class="h-100 img-style" style="background:url('{{ asset('img/content/atour/'.$tour['avatar']) }}') no-repeat;">
                                        <div class="main_tour--overflow d-flex align-items-center justify-content-center InDown">
                                            <h2 class="main_tour--title">{{$tour['name']}}</h2>
                                        </div>
                                    </div>
                                </a>
                            @endif
                        @endforeach
                    @endif

                </div>
            </div>
        </section>
        <section class="row img-style main_tour--section" style="background:url('{{ asset('img/background@2x.jpg') }}') no-repeat;">
            <div class="container" id="Abkhazia">
                <div class="row flex-column align-items-center main_tour--section--title-container">
                    <div class="main_tour--section--img"><img src="{{ asset('img/forest-view.svg') }}" alt="svg"></div>
                    <div class="">
                        <h2 class="main_tour--section--title">Абхазия</h2>
                        <p class="main_tour--section--text">{{ $main['description_abkhazia'] }} </p>
                    </div>
                </div>
                <div class="row main_tour--wrapper">

                    @if($tours)
                        @foreach($tours as $tour)
                            @if($tour['group'] == 'Abkhazia')
                                <a class="col-md-4 col-sm-12 main_tour--block" href="tour?id={{ $tour['id']}}">
                                    <div class="h-100 img-style" style="background:url('{{ asset('img/content/atour/'.$tour['avatar']) }}') no-repeat;">
                                        <div class="main_tour--overflow d-flex align-items-center justify-content-center InDown">
                                            <h2 class="main_tour--title">{{$tour['name']}}</h2>
                                        </div>
                                    </div>
                                </a>
                            @endif
                        @endforeach
                    @endif


                </div>
            </div>
        </section>
        @if( $main['video'] !="" )
        <section class="row main_movie">
            <div class="container">
                <div class="row flex-column align-items-center main_movie--head">
                    <div class="main_movie--head--img"><img src="{{ asset('img/movie-symbol-of-video-camera.svg') }}" alt="svg"></div>
                    <div class="">
                        <p class="main_movie--head--text">{{ $main['video_title'] }}</p>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <iframe width="860" height="480" src="https://www.youtube.com/embed/{{ $main['video'] }}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                </div>
            </div>
        </section>
        @endif
        <section class="row main_social--section">
            <div class="container">
                <div class="row flex-column">
                    <div class="d-flex justify-content-center main_social--icon"><img src="{{ asset('img/instagram-icon.svg') }}" alt="svg"></div>
                    <div class="main_social--text">
                        <h2 class="text-center">#crabtour</h2>
                    </div>
                </div>
            </div>
            <div class="d-flex flex-wrap w-100">
                @if($instagrams)
                    @foreach($instagrams as $instagram)
                        <div class="col-md-2 col-sm-12 main_social--img"><a href="{{ $instagram['link']}}"><img src="{{ asset('img/content/instagram/'.$instagram['path']) }}" alt="img"></a></div>
                    @endforeach
                @endif
            </div>
        </section>
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
        <section class="row flex-column justify-content-end img-style main_prev--section" style="background:url('{{ asset('img/prev_section_img.png') }}') no-repeat;">
            <div class="w-100 text-center main_prev--btn"><a href="#top" class="scroll"><img src="{{ asset('img/next_icon.svg') }}" alt="svg"></a></div>
        </section>
    </main>

    {{--footer--}}

@endsection()