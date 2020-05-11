@extends('layouts.app.index')

@section('content')

    <h1>Все данные</h1>
    @foreach($datas as $element)
        <div class="alert">
            <h3>{{$element->inn }}</h3>
            <h3>{{$element->country }}</h3>
            <h3>{{$element->email }}</h3>
            <h3>{{$element->address }}</h3>

        </div>
    @endforeach
@endsection

