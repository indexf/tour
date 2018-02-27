@extends('layouts.app')

@section('content')
    {{--body--}}
    <body>
    <div id="top" class="container-fluid">
        <div class="row flex-column img-style header img-mask" style="background: url('{{ asset('img/about-header.png') }}') no-repeat">

            @include('layouts.nav_menu')


        <div class="container d-flex flex-column align-items-center justify-content-center h-100 header--title">
            <div class="text-center"><h2 class="">О нас</h2></div>
        </div>
        <div class="header--anchor">
            <a href="#start" class="scroll"><img src="{{ asset('img/next_icon.svg') }}" alt="svg"></a>
        </div>
    </div>

    {{--main--}}
    <main id="start" class="main">

        <section class="about_info--section">
            <div class="container">
                <div class="d-flex justify-content-center about_info--top"><img src="{{ asset('img/crab-with-two-claws.svg') }}" alt="svg"></div>
                <div class="text-center about_info--title">
                    <h2>Что такое «КрабТур»?</h2>
                </div>
            </div>
            <div class="container">
                <div class="row flex-md-row flex-column about_info--container">
                    <div class="col-xl-3 col-12 col-lg-4 about_info--block">
                        <div class="d-flex justify-content-center"><img src="{{ asset('img/content/pic-1.png') }}" alt="img"></div>
                        <div class="about_info--name"><p>Леонард</p></div>
                    </div>
                    <div class="col-xl-6 col-12 col-lg-4 about_info--text">
                        <p>{{ $main['about_text'] }}</p>
                    </div>
                    <div class="col-xl-3 col-12 col-lg-4 about_info--block">
                        <div class="d-flex justify-content-center"><img src="{{ asset('img/content/pic-2.png') }}" alt="img"></div>
                        <div class="about_info--name"><p>Ксения</p></div>
                    </div>
                </div>
            </div>
        </section>
        @if( $main['video'] !="" )
        <section class="row mt-0 main_movie">
            <div class="container">
                <div class="row flex-column align-items-center main_movie--head">
                    <div class="main_movie--head--img"><img src="{{ asset('img/movie-symbol-of-video-camera.svg') }}" alt="svg"></div>
                    <div class="">
                        <p class="main_movie--head--text">{{ $main['video_title'] }}</p>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <iframe width="860" height="480" src="//www.youtube.com/embed/{{ $main['video'] }}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                </div>
            </div>
        </section>
        @endif
        <section class="about_command--section">
            <div class="container d-flex flex-column align-items-center">

                <div class="row flex-column">
                    <div class="d-flex justify-content-center about_command--section--top"><img src="{{ asset('img/like (1).svg') }}" alt="svg"></div>
                    <div class="text-center about_command--section--title">
                        <h2>Наша команда</h2>
                    </div>
                </div>

                <div class="about_command--slick">


                    @if($guides)
                        @foreach($guides as $guide)
                            <div class="about_command--slick--block">
                                <div class="d-flex justify-content-center align-items-center about_command--slick--img"><img src="{{ asset('img/content/guide/'.$guide['avatar']) }}" alt="pic"></div>
                                <div class="text-center about_command--slick--name">
                                    <p>{{$guide['name']}}</p>
                                </div>
                                <div class="about_command--slick--text">
                                    <p>{{ $guide['description']  }}</p>
                                </div>
                                <div class="d-flex justify-content-center about_command--slick--social">
                                    <a href="{{ $guide['link_inst'] }}"><img src="{{ asset('img/icon_instagram2.svg') }}" alt=""></a>
                                    <a href="{{ $guide['link_vk'] }}"><img src="{{ asset('img/icon_vk.svg') }}" alt=""></a>
                                    <a href="{{ $guide['link_fb'] }}"><img src="{{ asset('img/icon_facebook.svg') }}" alt=""></a>
                                </div>
                            </div>
                        @endforeach
                    @endif

                </div>

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

        <section class="row flex-column align-items-center about_comment">
            <div class="d-flex flex-column align-items-center">
                <div class="d-flex flex-column">
                    <div class="d-flex justify-content-center"><img src="{{ asset('img/icon_rewiev.svg') }}" alt="svg"></div>
                    <div class="d-flex justify-content-center about_comment--title">
                        <h2>Отзывы</h2>
                    </div>
                </div>
                <div class="about_comment--slick">


                    @if($reviews)
                        @foreach($reviews as $review)
                                <div class="about_comment--slick--block">
                                    <div class="d-flex justify-content-center align-items-center about_comment--slick--img"><img src="{{ asset('img/content/review/'.$review['avatar']) }}" alt="pic"></div>
                                    <div class="text-center about_comment--slick--name">
                                        <p>{{ $review['name'] }}</p>
                                    </div>
                                    <div class="about_comment--slick--text">
                                        <p>{{ $review['text']}}</p>
                                    </div>
                                    <div class="d-flex flex-row justify-content-end align-items-end about_comment--slick--social"><a href="">
                                         @if($review['social_icon'] == 'vk')
                                            <img src="{{ asset('img/vk.svg') }}" alt="svg">
                                         @endif
                                         @if($review['social_icon'] == 'fb')
                                             <img src="{{ asset('img/inst.svg') }}" alt="svg">
                                         @endif
                                         @if($review['social_icon'] == 'inst')
                                             <img src="{{ asset('img/face.svg') }}" alt="svg">
                                         @endif
                                        </a></div>
                                </div>
                        @endforeach
                    @endif


                </div>
            </div>
        </section>

        <section class="row flex-column justify-content-end img-style main_prev--section" style="background:url('{{ asset('img/about-footer.png') }}') no-repeat;">
            <div class="w-100 text-center main_prev--btn"><a href="#top" class="scroll"><img src="{{ asset('img/next_icon.svg') }}" alt="svg"></a></div>
        </section>

    </main>

    {{--footer--}}

@endsection()