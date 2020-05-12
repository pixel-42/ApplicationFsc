@extends('layouts.app.index')

@section('content')
    <div class="card-body">
        <h1 class="card-title">Добавление инспектора</h1>
        <br>

        <form class="forms-sample" action="{{route('add-inspecting')}}" method="post">
            @csrf
            <div style="display: flex;">
            <div class="col-sm-12 col-md-10 col-lg-8 col-xl-6">
                <div class="card">
                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">Имя</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">Пароль</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                    </div>
                    <div class="form-group row">
                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Повторите пароль</label>

                        <div class="col-md-6">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-10 col-lg-8 col-xl-6">
                <div class="card">
                    <div class="form-group row">
                        <label for="exampleInputEmail3" class=" col-md-4 col-form-label text-md-right">Название инспекции</label>
                        <input type="text" name="name_inspecting" class="form-control col-md-6"  placeholder="">
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputEmail3" class=" col-md-4 col-form-label text-md-right">Адрес</label>
                        <input type="text" name="address" class="form-control col-md-6"  placeholder="">
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputEmail3" class=" col-md-4 col-form-label text-md-right">Ответственный сотрудник</label>
                        <input type="text" name="responsible" class="form-control col-md-6"  placeholder="ФИО">
                    </div>
                    <div class="form-group row" >
                        <label for="exampleInputEmail3" class=" col-md-4 col-form-label text-md-right">Телефон</label>
                        <input type="text" name="phone" class="form-control col-md-6"  placeholder="">
                    </div>
                </div>
            </div>
            </div>
            <div class="form-row text-center " style="display: flex; justify-content: center;">
                <button type="submit" class="btn btn-primary col-md-4" >Зарегистрировать инспектора</button>
            </div>
        </form>

    </div>


@endsection