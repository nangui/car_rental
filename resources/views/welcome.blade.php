<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Car Rental</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('animate.css/animate.css') }}" rel="stylesheet">
        <link href="{{ asset('fontawesome/css/all.css') }}" rel="stylesheet">
        <style>
            .navbar-brand {
                font-family: 'Lobster', cursive;
                font-size: 24px;
            }
        </style>
    </head>
    <body>
        <div class='top-header-wrapper float-left w-100'>
            <div class="container">
                <div class="x_top_header_left_side_wrapper">
                    <p>Appelez-nous : (+221) 77 672 1546</p>
                </div>
                <div class="x_top_header_right_side_wrapper">
                    <div class="div x_top_header_social_icon_wrapper ml-3">
                        <ul>
                            <li>
                                <a href="#">
                                    <i class="fab fa-facebook-square"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-twitter-square"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-linkedin-square"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="x_top_header_all_select_box_wrapper">
                        <ul>
                            <li>
                                <a href=" {{ route('login') }} ">
                                    <i class="fas fa-power-off"></i>
                                    &nbsp;&nbsp;Login
                                </a>
                            </li>
                            <li>
                                <a href=" {{ route('register') }} ">
                                    <i class="fas fa-plus-circle"></i>
                                    &nbsp;&nbsp;Register
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-navigation-header-wrapper" style="margin-top: 3.2rem;">
            <div class="container">
                <row>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                        <div class="logo-wrapper d-none d-sm-none d-xs-none d-md-block">
                            <a class="navbar-brand" href="{{ url('/') }}">
                                <span style="color: #4f5dec;">SAMA</span> AUTO
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-12">
                        <div class="navi-cart-wrapper d-none d-sm-none d-xs-none d-md-block d-lg-block d-xl-block">
                            <div class="dropdown-wrapper menu-button menu-button-end">
                                <a href="#" class="menu-button">
                                    <span style="position: relative; opacity: 0;">&nbsp;</span>
                                </a>
                            </div>
                        </div>
                        <nav class="main-menu d-none d-sm-none d-xs-none d-md-block">
                            <ul>
                                <li>
                                    <a href="" class="menu-button single-menu">Accueil</a>
                                </li>
                                <li>
                                    <a href="" class="menu-button single-menu">Consulter Annonces</a>
                                </li>
                                <li>
                                    <a href="" class="menu-button single-menu">Pourquoi nous?</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </row>
            </div>
        </div>
        
        <div class="w-100" style="height: 75vh; background: url({{ asset('images/toyota-camry.png') }})"
             data-bg-repeat='false' data-bg-cover="true" data-bg-position="center-left" data-animation="background-animation">
            <div class="w-100 h-100 d-flex flex-column justify-content-center align-items-center align-items-sm-start" data-opacity="huit">
               <div class="col-12 col-md-4 pl-5 d-flex flex-column justify-content-center">
                   <h1 data-animation='text-ease-in'>Bienvenue sur votre platforme</h1>
                   <p data-animation='text-ease-in'>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                       ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                       laboris nisi ut aliquip ex ea commodo consequat.</p>
               </div>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10">
                    <div class="shadow bg-white p-5 mt-n5 mb-4">
                        <form action="" method="post">
                            @csrf
                            <div class="grid-3">
                                <div class="form-group">
                                    <label for="marque">Marque</label>
                                    <select class="custom-select form-control" name="marque_id">
                                        <option value="">Audi</option>
                                        <option value=""></option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="modele">Modele</label>
                                    <select class="custom-select form-control" name="modele_id">
                                        <option value="">Audi A1</option>
                                        <option value="">Audi Q7</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="invisible">Search button</label>
                                    <button class="btn btn-primary btn-block">Rechercher <span class="sr-only">une voiture a louer</span></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="container my-3">
            <div class="row">
                <div class="col-12 col-md-12">
                    <h2 class="text-uppercase font-weight-bolder text-center" id="about">A propos de nous</h2>
                    <p class="font-weight-light text-dark text-justify">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                        ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet,
                        consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet,
                        consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                </div>
            </div>
        </div>
        <div class="container my-3">
            <div class="row">
                <div class="col-12 col-md-12">
                    <h2 class="text-uppercase font-weight-bolder text-center" id="services">Nos services</h2>
                    <div class="grid-3">
                        <div class="p-2">
                            <div class="position-relative border-primary shadow p-3 text-center">
                                <i class="fas fa-atlas fa-3x"></i>
                                <h6 class="font-weight-bold my-3">Service 1</h6>
                                <p class="text-dark">Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                        </div>
                        <div class="p-2">
                            <div class="position-relative border-primary shadow p-3 text-center">
                                <i class="fas fa-at fa-3x"></i>
                                <h6 class="font-weight-bold my-3">Service 2</h6>
                                <p class="text-dark">Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                        </div>
                        <div class="p-2">
                            <div class="position-relative border-primary shadow p-3 text-center">
                                <i class="fas fa-bicycle fa-3x"></i>
                                <h6 class="font-weight-bold my-3">Service 3</h6>
                                <p class="text-dark">Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container my-3">
            <div class="row">
                <div class="col-12 col-md-12">
                    <h2 class="text-uppercase font-weight-bolder text-center" id="offers">Offres du moment</h2>
                    <p class="font-weight-light text-dark text-center">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                        ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                </div>
            </div>
        </div>
        <div class="container my-3">
            <div class="row">
                <div class="col-12 col-md-12">
                    <h2 class="text-uppercase font-weight-bolder text-center" id="partners">Notre equipe</h2>
                    <p class="font-weight-light text-dark text-center">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                        ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                </div>
            </div>
        </div>
        <div class="container my-3">
            <div class="row">
                <div class="col-12 col-md-12">
                    <h2 class="text-uppercase font-weight-bolder text-center" id="partners">Ils nous font confiance</h2>
                    <p class="font-weight-light text-dark text-center">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                        ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                </div>
            </div>
        </div>
        <div class="container my-3">
            <div class="row">
                <div class="col-12 col-md-12">
                    <h2 class="text-uppercase font-weight-bolder text-center" id="contacts">Nous contacter</h2>
                    <p class="font-weight-light text-dark text-center">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                        ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                </div>
            </div>
        </div>
        <div class="d-none flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>
