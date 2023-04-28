<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <link rel="stylesheet" href="{{ asset('styles/authorization__style.css') }}">
</head>
<body>
    <div class="background__layer layer__background" >
        <nav class="navbar navbar-expand-md navbar-light shadow-sm">
            <div class="header-container spacer layer">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>


                <div class="navbar-wrapper" id="navbarSupportedContent">

                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('post.index') }}">На главную</a>
                            </li>

                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">Войти</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">Регистрация</a>
                                </li>
                            @endif
                        @else


                                <form action="{{ route('logout') }}" method="post">
                                    @csrf
                                    <input class="btn btn-outline-primary" type="submit" value="Выйти">
                                </form>

                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <div class=""></div>

        <main class="py-4">
            @yield('content')
        </main>

    </div>
</body>
</html>
