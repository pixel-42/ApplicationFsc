@extends('layouts.app.index')

@section('content')
    <h1>Список заявок</h1>
    <div class="container" style="padding: 2rem 0rem;">
        <div class="row">
            <div class="col-12">
                <table class="table table-striped table-dark table-hover">
                    <thead>
                    <tr>
                        <th>Название организации</th>
                        <th>INN</th>
                        <th>Статус</th>
                    </tr>
                    </thead>
                    @foreach($allRequest as $OneRequest)
                        <tbody>
                            <tr>
                                <td>{{$OneRequest->name_organisation}}</td>
                                <td>{{$OneRequest->inn}}</td>
                                <td>{{$OneRequest->status}}</td>
                                <td>
                                    <a href="{{route('show-request', ['request_id'=> $OneRequest->id] )}}">
                                        <button type="button" class="btn" style="background-color: #1976d2;">
                                            <span class="material-icons">visibility</span>
                                        </button></a>
                                </td>
                            </tr>
                        </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>

{{--    @isset($path)--}}
{{--        <iframe src="{{asset('/storage/' . $path)}}" frameborder="0" width="100%" height="600px"></iframe>--}}
{{--    @endisset--}}
@endsection
