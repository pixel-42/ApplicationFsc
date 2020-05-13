@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mx-4">
                    <div class="card-body p-4">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <h1>{{ __('Регистрация') }}</h1>
                            <p class="text-muted">
                                Создайте аккаунт</p>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="icon-user"></i>
                        </span>
                                </div>
                                <input class="form-control" type="text" placeholder="{{ __('Имя') }}" name="name" value="{{ old('name') }}" required autofocus>
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"></i></span>
                                </div>
                                <input class="form-control" type="text" placeholder="{{ __('E-Mail') }}" name="email" value="{{ old('email') }}" required>
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fa fa-share"></i>
                        </span>
                                </div>
                                <input class="form-control" type="password" placeholder="{{ __('Пароль') }}" name="password" required>
                            </div>
                            <div class="input-group mb-4">
                                <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fa fa-share"></i>
                        </span>
                                </div>
                                <input class="form-control" type="password" placeholder="{{ __('Повторите пароль') }}" name="password_confirmation" required>
                            </div>
                            <button class="btn btn-block btn-success" type="submit">{{ __('Регистрация') }}</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
