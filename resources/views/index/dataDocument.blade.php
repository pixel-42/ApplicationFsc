@extends('layouts.app.index')

@section('content')

    <h1>Все данные</h1>
        <div class="alert">
            <h3>{{$data->name_organisation }}</h3>
            <h3>{{Auth::user()->name}}</h3>
            <h3>{{Auth::user()->email}}</h3>
        </div>

    <div class="input-group col-xs-12">
        <a href="{{route('add-data-organisation')}}">
            <button type="submit" class="btn btn-primary mr-2">Добавить или изменить данные</button>
        </a>
    </div>
@endsection
