@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Подтвердите вашу электронную почту !') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                    <div class="alert alert-success" role="alert">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z" />
                        </svg>
                        {{ __('Ссылка с подтверждением учётной записи была выслана на указанный вами электронный адрес.') }}
                    </div>
                    @endif

                    <form class="form" method="POST" action="{{ route('verification.resend') }}">
                        {{ __('Перед тем как продолжить, пожалуйста проверьте вашу электронную почту на наличие письма с подтверждением.') }}<br>
                        {{ __('Если вы не получили письмо ') }},
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('нажмите сюда для повторной попытки.') }}</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
