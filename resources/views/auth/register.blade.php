@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row">
        <div class="card">
            <div class="card-header-register">Регистрация</div>
            <div class="card-body">
                <form class="form" method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="row__input__wrapper">
                        <label for="name" class="col-md-4 col-form-label text-md-end">Имя</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row__input__wrapper">
                        <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email ') }}</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row__input__wrapper">
                        <label for="group_name" class="col-md-4 col-form-label text-md-end">{{ __('Группа') }}</label>

                        <div class="col-md-6">
                            <input id="group_name" type="text" class="form-control @error('group_name') is-invalid @enderror" name="group_name" value="{{ old('group_name') }}" required autocomplete="group_name">

                            @error('group_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row__input__wrapper">
                        <label for="password" class="col-md-4 col-form-label text-md-end">Пароль</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row__input__wrapper">
                        <label for="password-confirm" class="col-md-4 col-form-label text-md-end">Подтвердите пароль</label>

                        <div class="col-md-6">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                    </div>
                    <div class="row__input__wrapper">
                        <button type="submit" class="btn">
                            <span>
                                Регистрация
                            </span>
                            <div class="marquee" aria-hidden="true">
                                <div class="marquee__inner">
                                    <span>Регистрация</span>
                                    <span>Регистрация</span>
                                    <span>Регистрация</span>
                                    <span>Регистрация</span>
                                </div>
                            </div>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
