@extends('layouts.main')



@section('meta')

<meta name="description" content="Оу, что-то пошло не так...">

@endsection

@section('content')

    <div class="news">
            <div class="not__found__error">
            <h1>Оу, что-то пошло не так...</h1>
            <img class="logo_error" src="{{asset('image/logo.svg')}}" alt="Логотип КГАПОУ Пермский Авиационный техникум им. А.Д. Швецова">
            <h2 class="not-found-error-title">Ошибка 404</h2>
            <a class="href__error" href="{{ route('main.index') }}">На главную...</a>
            </div>
    </div>



@endsection
