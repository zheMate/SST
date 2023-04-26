<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    @yield('meta')
    <meta name="viewport" content="width = device-width initial-scale=1">
    <link rel="stylesheet" href="{{ asset('styles/style.css') }}">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">


</head>

<body>
    <header>
        <a href="{{ route('post.index') }}"><img src="{{ asset('image/logo.svg') }}" alt="Логотип КГАПОУ Пермский Авиационный техникум им. А.Д. Швецова"></a>
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
                        <svg class="img-menu img-menu-active" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path class="icons__path" d="M552 64H88c-13.255 0-24 10.745-24 24v8H24c-13.255 0-24 10.745-24 24v272c0 30.928 25.072 56 56 56h472c26.51 0 48-21.49 48-48V88c0-13.255-10.745-24-24-24zM56 400a8 8 0 0 1-8-8V144h16v248a8 8 0 0 1-8 8zm236-16H140c-6.627 0-12-5.373-12-12v-8c0-6.627 5.373-12 12-12h152c6.627 0 12 5.373 12 12v8c0 6.627-5.373 12-12 12zm208 0H348c-6.627 0-12-5.373-12-12v-8c0-6.627 5.373-12 12-12h152c6.627 0 12 5.373 12 12v8c0 6.627-5.373 12-12 12zm-208-96H140c-6.627 0-12-5.373-12-12v-8c0-6.627 5.373-12 12-12h152c6.627 0 12 5.373 12 12v8c0 6.627-5.373 12-12 12zm208 0H348c-6.627 0-12-5.373-12-12v-8c0-6.627 5.373-12 12-12h152c6.627 0 12 5.373 12 12v8c0 6.627-5.373 12-12 12zm0-96H140c-6.627 0-12-5.373-12-12v-40c0-6.627 5.373-12 12-12h360c6.627 0 12 5.373 12 12v40c0 6.627-5.373 12-12 12z" />
                        </svg>
                        <div class="name">Новости</div>
                    </a>
                </li>
                <li class="puncts puncts">
                    <a href="{{ route('category.index') }}">
                        <svg class="img-menu" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path class="icons__path" d="M80 368H16a16 16 0 0 0-16 16v64a16 16 0 0 0 16 16h64a16 16 0 0 0 16-16v-64a16 16 0 0 0-16-16zm0-320H16A16 16 0 0 0 0 64v64a16 16 0 0 0 16 16h64a16 16 0 0 0 16-16V64a16 16 0 0 0-16-16zm0 160H16a16 16 0 0 0-16 16v64a16 16 0 0 0 16 16h64a16 16 0 0 0 16-16v-64a16 16 0 0 0-16-16zm416 176H176a16 16 0 0 0-16 16v32a16 16 0 0 0 16 16h320a16 16 0 0 0 16-16v-32a16 16 0 0 0-16-16zm0-320H176a16 16 0 0 0-16 16v32a16 16 0 0 0 16 16h320a16 16 0 0 0 16-16V80a16 16 0 0 0-16-16zm0 160H176a16 16 0 0 0-16 16v32a16 16 0 0 0 16 16h320a16 16 0 0 0 16-16v-32a16 16 0 0 0-16-16z" />
                        </svg>
                        <div class="name">Категории</div>
                    </a>
                </li>
                <li class="puncts puncts">
                    <a href="{{ route('post.show', ['post' => 6]) }}">
                        <svg class="img-menu" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path class="icons__path" d="M0 96l576 0c0-35.3-28.7-64-64-64H64C28.7 32 0 60.7 0 96zm0 32V416c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V128H0zM64 405.3c0-29.5 23.9-53.3 53.3-53.3H234.7c29.5 0 53.3 23.9 53.3 53.3c0 5.9-4.8 10.7-10.7 10.7H74.7c-5.9 0-10.7-4.8-10.7-10.7zM176 192a64 64 0 1 1 0 128 64 64 0 1 1 0-128zm176 16c0-8.8 7.2-16 16-16H496c8.8 0 16 7.2 16 16s-7.2 16-16 16H368c-8.8 0-16-7.2-16-16zm0 64c0-8.8 7.2-16 16-16H496c8.8 0 16 7.2 16 16s-7.2 16-16 16H368c-8.8 0-16-7.2-16-16zm0 64c0-8.8 7.2-16 16-16H496c8.8 0 16 7.2 16 16s-7.2 16-16 16H368c-8.8 0-16-7.2-16-16z" />
                        </svg>
                        <div class="name">Наши контакты</div>
                    </a>
                </li>

                @can('view', auth()->user())
                <li class="puncts">
                    <a href="{{ route('admin.main.index') }}">
                        <svg class="img-menu" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                            <path class="icons__path" d="M381 114.9L186.1 41.8c-16.7-6.2-35.2-5.3-51.1 2.7L89.1 67.4C78 73 77.2 88.5 87.6 95.2l146.9 94.5L136 240 77.8 214.1c-8.7-3.9-18.8-3.7-27.3 .6L18.3 230.8c-9.3 4.7-11.8 16.8-5 24.7l73.1 85.3c6.1 7.1 15 11.2 24.3 11.2H248.4c5 0 9.9-1.2 14.3-3.4L535.6 212.2c46.5-23.3 82.5-63.3 100.8-112C645.9 75 627.2 48 600.2 48H542.8c-20.2 0-40.2 4.8-58.2 14L381 114.9zM0 480c0 17.7 14.3 32 32 32H608c17.7 0 32-14.3 32-32s-14.3-32-32-32H32c-17.7 0-32 14.3-32 32z" />
                        </svg>
                        <div class="name">Панель админа</div>
                    </a>
                </li>
                @endcan
                <li class="puncts">
                    @auth()
                    <a href="{{ route('personal.main.index') }}">
                        <svg class="img-menu" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path class="icons__path" d="M224 256A128 128 0 1 1 224 0a128 128 0 1 1 0 256zM209.1 359.2l-18.6-31c-6.4-10.7 1.3-24.2 13.7-24.2H224h19.7c12.4 0 20.1 13.6 13.7 24.2l-18.6 31 33.4 123.9 36-146.9c2-8.1 9.8-13.4 17.9-11.3c70.1 17.6 121.9 81 121.9 156.4c0 17-13.8 30.7-30.7 30.7H285.5c-2.1 0-4-.4-5.8-1.1l.3 1.1H168l.3-1.1c-1.8 .7-3.8 1.1-5.8 1.1H30.7C13.8 512 0 498.2 0 481.3c0-75.5 51.9-138.9 121.9-156.4c8.1-2 15.9 3.3 17.9 11.3l36 146.9 33.4-123.9z" />
                        </svg>
                        <div class="name">Личный кабинет</div>
                    </a>
                    @endauth

                    @guest()
                    <a href="{{ route('login') }}">
                        <svg class="img-menu" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path class="icons__path" d="M217.9 105.9L340.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L217.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1L32 320c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM352 416l64 0c17.7 0 32-14.3 32-32l0-256c0-17.7-14.3-32-32-32l-64 0c-17.7 0-32-14.3-32-32s14.3-32 32-32l64 0c53 0 96 43 96 96l0 256c0 53-43 96-96 96l-64 0c-17.7 0-32-14.3-32-32s14.3-32 32-32z" />
                        </svg>
                        <div class="name">Войти</div>
                    </a>
                    @endguest
                </li>

                @auth()
                <li class="puncts">
                    <form action="{{ route('logout') }}" method="post">
                        <svg class="img-menu" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path class="icons__path" d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z" />
                        </svg>
                        @csrf
                        <input class="name enter__operations" type="submit" value="Выйти">
                    </form>
                </li>
                @endauth
            </ul>
        </div>


    </div>


    @yield('content')

    <div class="loader"></div>

</body>

<footer>


    <div class="footer__block">
        <div class="footer__company">
            <a href="{{ route('post.index') }}"><img src="{{ asset('image/logo.svg') }}" alt="Логотип КГАПОУ Пермский Авиационный техникум им. А.Д. Швецова"></a>
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
                    <p class="credentials">
                        <svg class="socials__svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                            <path class="socials__path" d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z" />
                        </svg>
                        г. Пермь, ул. Луначарского, 24
                    </p>

                    <p class="credentials">
                        <svg class="socials__svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path class="socials__path" d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z" />
                        </svg>
                        +7 (800) 555-35-35
                    </p>

                </div>
            </div>
            <div class="footer__column">


                <h3 class="footer__column-header">Свяжитесь с нами </h3>
                <div class="footer-socials">
                    <a class="feedback__links" href="{{ route('post.show', ['post' => 6]) }}" target="_blank">
                        <svg class="socials__svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path class="socials__path" d="M512 80c8.8 0 16 7.2 16 16V416c0 8.8-7.2 16-16 16H64c-8.8 0-16-7.2-16-16V96c0-8.8 7.2-16 16-16H512zM64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zM208 256a64 64 0 1 0 0-128 64 64 0 1 0 0 128zm-32 32c-44.2 0-80 35.8-80 80c0 8.8 7.2 16 16 16H304c8.8 0 16-7.2 16-16c0-44.2-35.8-80-80-80H176zM376 144c-13.3 0-24 10.7-24 24s10.7 24 24 24h80c13.3 0 24-10.7 24-24s-10.7-24-24-24H376zm0 96c-13.3 0-24 10.7-24 24s10.7 24 24 24h80c13.3 0 24-10.7 24-24s-10.7-24-24-24H376z" />
                        </svg>

                        Заполните форму !
                    </a>
                </div>
            </div>
            <div class="footer__column">

                <h3 class="footer__column-header">Наши группы в ВК: </h3>
                <div class="footer-socials">
                    <a class="feedback__links" href="https://vk.com/avia_styd" target="_blank">
                        <svg class="socials__svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path class="socials__path" d="M545 117.7c3.7-12.5 0-21.7-17.8-21.7h-58.9c-15 0-21.9 7.9-25.6 16.7 0 0-30 73.1-72.4 120.5-13.7 13.7-20 18.1-27.5 18.1-3.7 0-9.4-4.4-9.4-16.9V117.7c0-15-4.2-21.7-16.6-21.7h-92.6c-9.4 0-15 7-15 13.5 0 14.2 21.2 17.5 23.4 57.5v86.8c0 19-3.4 22.5-10.9 22.5-20 0-68.6-73.4-97.4-157.4-5.8-16.3-11.5-22.9-26.6-22.9H38.8c-16.8 0-20.2 7.9-20.2 16.7 0 15.6 20 93.1 93.1 195.5C160.4 378.1 229 416 291.4 416c37.5 0 42.1-8.4 42.1-22.9 0-66.8-3.4-73.1 15.4-73.1 8.7 0 23.7 4.4 58.7 38.1 40 40 46.6 57.9 69 57.9h58.9c16.8 0 25.3-8.4 20.4-25-11.2-34.9-86.9-106.7-90.3-111.5-8.7-11.2-6.2-16.2 0-26.2.1-.1 72-101.3 79.4-135.6z" />
                        </svg>
                        ССТ
                    </a>
                    <a class="feedback__links" href="https://vk.com/tk_avia_styd" target="_blank">
                        <svg class="socials__svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path class="socials__path" d="M545 117.7c3.7-12.5 0-21.7-17.8-21.7h-58.9c-15 0-21.9 7.9-25.6 16.7 0 0-30 73.1-72.4 120.5-13.7 13.7-20 18.1-27.5 18.1-3.7 0-9.4-4.4-9.4-16.9V117.7c0-15-4.2-21.7-16.6-21.7h-92.6c-9.4 0-15 7-15 13.5 0 14.2 21.2 17.5 23.4 57.5v86.8c0 19-3.4 22.5-10.9 22.5-20 0-68.6-73.4-97.4-157.4-5.8-16.3-11.5-22.9-26.6-22.9H38.8c-16.8 0-20.2 7.9-20.2 16.7 0 15.6 20 93.1 93.1 195.5C160.4 378.1 229 416 291.4 416c37.5 0 42.1-8.4 42.1-22.9 0-66.8-3.4-73.1 15.4-73.1 8.7 0 23.7 4.4 58.7 38.1 40 40 46.6 57.9 69 57.9h58.9c16.8 0 25.3-8.4 20.4-25-11.2-34.9-86.9-106.7-90.3-111.5-8.7-11.2-6.2-16.2 0-26.2.1-.1 72-101.3 79.4-135.6z" />
                        </svg>
                        Тьюторский Корпус ПАТ
                    </a>


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
