@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="card">
            <div class="card-header">{{ __('Восстановление пароля') }}</div>
            <div class="card-body">
                <form class="small__form" method="POST" action="{{ route('password.update') }}">
                    @csrf

                    <input type="hidden" name="token" value="{{ $token }}">

                    <div class="row__input__wrapper">
                        <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Ваш Email') }}</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row__input__wrapper">
                        <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Новый пароль') }}</label>

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
                        <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Подтвердите пароль') }}</label>

                        <div class="col-md-6">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                    </div>

                    <div class="row mb-0">

                        <button type="submit" class="btn btn-primary">
                            <span>
                                Восстановить пароль
                            </span>
                            <div class="marquee" aria-hidden="true">
                                <div class="marquee__inner">
                                    <span>Восстановить пароль</span>
                                    <span>Восстановить пароль</span>
                                    <span>Восстановить пароль</span>
                                    <span>Восстановить пароль</span>
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
