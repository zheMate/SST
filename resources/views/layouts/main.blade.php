<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    @yield('meta')
    <meta name="viewport" content="width = device-width initial-scale=1">
    <link rel="stylesheet" href="{{ asset('styles/style.css') }}">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">

</head>

<body>
<header>
    <a href="{{ route('post.index') }}"><img src="{{ asset('image/logo.svg') }}"
                                             alt="Логотип КГАПОУ Пермский Авиационный техникум им. А.Д. Швецова"></a>
    <div class="name">
        <a href="{{ route('post.index') }}">
            <div class="subname">Студенческий совет</div>
            Пермский авиационный техникум им. А. Д. Швецова
        </a>
    </div>
</header>

<div id="menu">
    <div class="hamburger">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
    </div>
    <div class="menu-inner">

        <ul class="left-menu">
            <li class="puncts punct">
                <a href="{{ route('post.index') }}">
                    <i class="img-menu img-menu-active fas fa-newspaper"></i>
                    <div class="name">Новости</div>
                </a>
            </li>
            <li class="puncts puncts">
                <a href="{{ route('category.index') }}">
                    <i class="img-menu fas fa-th-list"></i>
                    <div class="name">Категории</div>
                </a>
            </li>
            <li class="puncts puncts">
                <a href="{{ route('post.show', ['post' => 6]) }}">
                    <i class="img-menu fas fa-id-card"></i>
                    <div class="name">Наши контакты</div>
                </a>
            </li>
            {{--            <li class="puncts">--}}
            {{--                <a href="#">--}}
            {{--                    <i class="img-menu fas fa-file"></i>--}}
            {{--                    <div class="name">Создать протокол</div>--}}
            {{--                </a>--}}
            {{--            </li>--}}
            {{--            <li class="puncts">--}}
            {{--                <a href="#">--}}
            {{--                    <i class="img-menu fas fa-users"></i>--}}
            {{--                    <div class="name">Пользователи</div>--}}
            {{--                </a>--}}
            {{--            </li>--}}
            @can('view', auth()->user())
                <li class="puncts">
                    <a href="{{ route('admin.main.index') }}">
                        <i class="img-menu fas fa-plane"></i>
                        <div class="name">Панель админа</div>
                    </a>
                </li>
            @endcan
            <li class="puncts">
                @auth()
                    <a href="{{ route('personal.main.index') }}">
                        <i class="img-menu fas fa-sign-in-alt"></i>
                        <div class="name">Личный кабинет</div>
                    </a>
                @endauth

                @guest()
                    <a href="{{ route('login') }}">
                        <i class="img-menu fas fa-sign-in-alt"></i>
                        <div class="name">Войти</div>
                    </a>
                @endguest
            </li>

            @auth()
                <li class="puncts">
                    <form action="{{ route('logout') }}" method="post">
                        <i class="img-menu fas fa-sign-out-alt"></i>
                        @csrf
                        <input class="name" type="submit" value="Выйти">
                    </form>


                </li>
            @endauth
        </ul>
    </div>


</div>


@yield('content')

</body>

<footer>


    <div class="footer__block">
        <div class="footer__company">
            <a href="{{ route('post.index') }}"><img src="{{ asset('image/logo.svg') }}"
                                                     alt="Логотип КГАПОУ Пермский Авиационный техникум им. А.Д. Швецова"></a>
            <div class="name">
                <a href="{{ route('post.index') }}">
                    <div class="subname">Студенческий совет</div>
                    Пермский авиационный техникум им. А. Д. Швецова
                </a>
            </div>
        </div>
        <div class="footer__items">
            <div class="footer__column">
                <h3 class="footer__column-header">Наши контакты: </h3>
                <div class="footer-socials">
                  <p>г. Пермь, ул. Луначарского, 24</p>

                    <p>+7 (800) 555-35-35</p>

                </div>
            </div>
            <div class="footer__column">


                <h3 class="footer__column-header">Свяжитесь с нами </h3>
                <div class="footer-socials">
                    <a class="vk__links" href="{{ route('post.show', ['post' => 6]) }}" target="_blank">Заполните форму !</a>

                </div>
            </div>
            <div class="footer__column">

                    <h3 class="footer__column-header">Наши группы в ВК: </h3>
                <div class="footer-socials">
                    <a class="vk__links" href="https://vk.com/avia_styd" target="_blank"><i class="fab fa-vk"></i>ССТ</a>
                    <a class="vk__links" href="https://vk.com/tk_avia_styd" target="_blank"><i class="fab fa-vk"></i>Тьюторский Корпус ПАТ</a>


                </div>
            </div>

        </div>
    </div>
    <div class="footer__rights">
        <p class="rights__text">Права защищены КГАПОУ "Авиатехникум" ©</p>
    </div>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js" defer></script>
<script src="{{ asset('scripts/main.js') }}" defer></script>
<script src="{{ asset('scripts/script.js') }}" defer></script>