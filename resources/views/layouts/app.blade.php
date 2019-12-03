<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{('Mi bebé y yo') }}</title>
    <link rel="shortcut icon" href="{{asset('img/maternity.png')}}" type="image/x-icon">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body style="background: linear-gradient(-25deg, #E41445, #B2B2B2)no-repeat!important; height: 100vh; font-family: bahnschrift; font-size: 15px">
    <div id="app">
        <div class="container-fluid p-4 justify-content-center" style="width: 90%; max-width: 1300px">
        <div class="bg-light" style="border-radius: 10px;">
            <nav class="navbar navbar-expand-md navbar-light navbar-laravel" style="border-radius: 10px">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{asset('img/maternity.png')}}" height="70" alt="">{{('Mi bebé y yo') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto text-uppercase">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto text-uppercase">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item p-3">
                                <a class="nav-link text-dark font-weight-bold" href="{{ route('login') }}">{{ __('Iniciar sesión') }}</a>
                            </li>
                            <li class="nav-item p-3">
                                <a class="nav-link text-dark font-weight-bold" href="{{ route('register') }}">{{ __('Registro') }}</a>
                            </li>
                        @else

                            <li class="nav-item p-3">
                              <a class="nav-link text-dark font-weight-bold" href="{{route('pregnancy.index')}}">Inicio</a>
                            </li>
                            <li class="nav-item p-3 text-center">
                                <a href="{{route('pregnancy.create')}}" class="nav-link text-dark font-weight-bold">Mi historial</a>
                            </li>
                            <li class="nav-item p-3 dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle text-dark font-weight-bold" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item text-dark font-weight-bold" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar sesión') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        </div>
        </div>

        <main class="container-fluid">
            @yield('content')
        </main>
    </div>
</body>
</html>
