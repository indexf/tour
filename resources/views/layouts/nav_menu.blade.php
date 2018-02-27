
        <div class="header--container">
            <nav class="navbar d-lg-flex flex-lg-row justify-content-lg-center align-items-lg-center align-items-start">

                <button class="hamburger hamburger--slider navbar-toggler navbar-toggler-right order-1 d-lg-none"
                        type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                </button>

                <div class="d-flex flex-column align-items-center">
                    <div class="collapse d-lg-block navbar-collapse navbar--style" id="navbarSupportedContent">
                        <ul class="d-lg-flex justify-content-lg-between flex-lg-row list-style">
                            <li class="nav-item d-md-flex align-items-md-center">
                                <a class="nav-link" href="{{ route('index') }}">Главная</a>
                            </li>
                            <li class="nav-item d-md-flex align-items-md-center">
                                <a class="nav-link" href="{{ route('index') }}#Crimea">Крым</a>
                            </li>
                            <li class="nav-item d-md-flex align-items-md-center item-logo">
                                <a class="navbar-brand m-0 hidden-md-down" href="{{ route('index') }}"><img
                                            src="{{ asset('img/logo.png') }}" width="140" height="115" alt="logo"></a>
                            </li>
                            <li class="nav-item d-md-flex align-items-md-center">
                                <a class="nav-link" href="{{ route('index') }}#Abkhazia">Абхазия</a>
                            </li>
                            <li class="nav-item d-md-flex align-items-md-center">
                                <a class="nav-link" href="{{ route('about') }}">О нас</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>



