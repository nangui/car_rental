<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('fontawesome/css/all.css') }}" rel="stylesheet">
</head>
<body>
<div id="app" style="overflow: hidden;">
    <div class="row">
        <div class="col-md-3 col-12 bg-white">
            <div class="p-5">
                <h3>{{ __('Formulaire de connexion') }}</h3>
                <p>Vieullez vous connecter pour pouvoir continuer</p>
                <form method="post" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group has-icon">
                        <label for="email">{{ __('Adresse E-Mail') }}</label>
                        <div class="position-relative">
                            <i class="far fa-envelope"></i>
                            <input id="email" type="email"
                                   class="form-control form-control-lg @error('email') is-invalid @enderror"
                                   name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group has-icon">
                        <label for="password">{{ __('Mot de passe') }}</label>

                        <div class="position-relative">
                            <i class="fas fa-key"></i>
                            <input id="password" type="password"
                                   class="form-control form-control-lg @error('password') is-invalid @enderror"
                                   name="password" required autocomplete="current-password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                    <div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>
                    <input type="submit" class="btn btn-primary btn-lg btn-block mt-2" value="{{ __('Se connecter') }}">
                    @if (Route::has('register'))
                        <a class="btn btn-link" href="{{ route('register') }}">
                            {{ __('Creer un compte') }}
                        </a>
                    @endif
                    @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Mot de passe oublie?') }}
                        </a>
                    @endif
                </form>
            </div>
        </div>
        <div class="col-md-9 col-12 full-height align-self-center blue accent-3"
             data-bg-position="center" data-bg-repeat="false" data-bg-image="true" data-bg-size="cover"></div>
    </div>
</div>
</body>
</html>
