@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="card">
            <div class="card-header">Форма входа</div>

            <div class="card-body">
                <form class="form" method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="row__input__wrapper">
                        <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email') }}</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row__input__wrapper">
                        <label for="password" class="col-md-4 col-form-label text-md-end">Пароль</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row__input__wrapper">
                        <div class="col-md-6 offset-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label" for="remember">
                                    Запомнить меня
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-0">
                        <div class="btn__actions">
                            <button type="submit" class="btn">
                                <span>Войти</span>
                                <div class="marquee" aria-hidden="true">
                                    <div class="marquee__inner">
                                        <span>Войти</span>
                                        <span>Войти</span>
                                        <span>Войти</span>
                                        <span>Войти</span>
                                    </div>
                                </div>

                            </button>

                            @if (Route::has('password.request'))
                            <a class="link" href="{{ route('password.request') }}">
                                Забыли пароль ?
                            </a>
                            @endif
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>
@endsection
