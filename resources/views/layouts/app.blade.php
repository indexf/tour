<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>#КрабТур</title>
    <link rel="stylesheet" href="{{ asset('css/style.min.css') }}">
    <link rel="shortcut icon" href="{{ asset('img/favicon2.png') }}" type="image/png">
    <script defer type="text/javascript" src="{{ asset('js/libs.min.js') }}"></script>
    <script defer type="text/javascript" charset="utf-8" src="{{ asset('js/hyphenation.js') }}"></script>
</head>

        @yield('content')


        <footer class="row footer">
            <div class="container d-flex flex-column">

                <div class="d-flex flex-md-row flex-column justify-content-md-between footer--row">
                    <div class="col-md-5 col-sm-12">
                        <ul class="d-flex justify-content-between footer--nav">
                            <li class="footer--item"><a class="footer--link" href="">Главная</a></li>
                            <li class="footer--item"><a class="footer--link" href="">Туры</a></li>
                            <li class="footer--item"><a class="footer--link" href="">Галлерея</a></li>
                            <li class="footer--item"><a class="footer--link" href="">Контакты</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-sm-12 d-flex align-items-md-center align-items-start">
                        <ul class="d-flex justify-content-md-start justify-content-between footer--nav">
                            <li class="footer--item_soc"><a href="https:/{{ $main['link_inst'] }}"><img src="{{ asset('img/icon_instagram2.svg') }}" alt="svq"></a></li>
                            <li class="footer--item_soc"><a href="https:/{{$main['link_vk'] }}"><img src="{{ asset('img/icon_vk.svg') }}" alt="svq"></a></li>
                            <li class="footer--item_soc"><a href="https:/{{ $main['link_fb'] }}"><img src="{{ asset('img/icon_facebook.svg') }}" alt="svq"></a></li>
                        </ul>
                    </div>
                </div>

                <div class="d-flex flex-md-row flex-column justify-content-md-between footer--row">
                    <div class="col-md-7 col-sm-12 footer--text">
                        <p>{{ $main['about_text'] }}</p>
                    </div>
                    <div class="col-md-3 col-sm-12 d-md-flex flex-md-column d-block justify-content-md-center">
                        <p class="footer--contact">тел: <a href="mailto:{{ $main['company_phone'] }}">{{ $main['company_phone'] }}</a></p>
                        <p class="footer--contact">e-mail: <a href="mailto:{{ $main['company_email'] }}">{{ $main['company_email'] }}</a></p>
                    </div>
                </div>

                <div class="d-flex flex-md-row flex-column justify-content-md-between align-items-md-end footer--row">
                    <div class="col-md-3 col-sm-12 d-flex align-items-end footer--cop"><p>© crab-tour 2018</p></div>
                    <div class="col-md-3 col-sm-12 d-md-block d-none"><a href="/"><img width="95" height="75" src="{{ asset('img/logo.png') }}" alt="img"></a></div>
                </div>
            </div>
        </footer>

    </div>
    <script defer type="text/javascript" src="{{ asset('js/script.min.js') }}"></script>
</body>
</html>
