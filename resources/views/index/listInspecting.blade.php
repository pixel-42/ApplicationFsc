@extends('layouts.app.index')

@section('content')

    <h1>Список инспекций</h1>

    <div class="container" style="padding: 2rem 0rem;">
        <div class="row">

            <div class="col-12">
                @if(Auth::user()->isAdmin())
                    <a href="{{ route('show-form-add-inspecting') }}">
                        <button type="button" class="btn btn-primary" style="margin-bottom: 10px; text-align: right;"><i class="fa fa-user-plus"></i></button>
                    </a>
                @endif
                <table class="table table-striped table-dark table-hover">
                    <thead>
                    <tr>
                        <th>Название организации</th>
                        <th>Ответственный сотрудник</th>
                        <th>Почтовый адрес</th>
                        <th>Tелефон</th>
                        <th></th>
                    </tr>
                    </thead>

                    @foreach($allInspecting as $OneInspecting)
                        <tbody>
                        <tr>
                            <td>{{$OneInspecting->inspecting_name}}</td>
                            <td>{{$OneInspecting->responsible}}</td>
                            <td>{{$OneInspecting->address}}</td>
                            <td>{{$OneInspecting->phone}}</td>

                            <td>
                                @if(Auth::user()->isClient())
                                    <a href="{{ route('name-inspection', ['dev'=>$OneInspecting->inspecting_id]) }}">
                                        <button type="button" class="btn btn-primary"><i class="fa fa-share"></i></button>
                                    </a>
                                @endif

                                @if(Auth::user()->isAdmin())
{{--                                    <button type="button" class="btn btn-success"><i class="fa fa-edit"></i></button>--}}
                                    <a href="{{ route('delete-inspecting', ['inspecting_id'=>$OneInspecting->id]) }}">
                                        <button type="button" class="btn btn-danger"><i class="fa fa-trash-o"></i></button>
                                    </a>
                                @endif
                            </td>
                        </tr>
                        </tbody>
                    @endforeach
                </table>

            </div>
        </div>
    </div>
@endsection

