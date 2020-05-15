@extends('layouts.app.index')

@section('content')
    <div class="card-body">
        <h4 class="card-title">Basic form elements</h4>
        <p class="card-description"> Basic form elements </p>
        <form class="forms-sample" action="{{ route('organisation-form') }}" method="post">
            @csrf

            <div class="form-group">
                <label for="exampleInputName1">INN</label>
                <input type="text" name="inn" class="form-control" id="exampleInputName1" placeholder="INN">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail3">Name Organisation</label>

                <input type="text" name="name" class="form-control" id="exampleInputEmail3" placeholder="Country">
            </div>
{{--            <div class="form-group">--}}
{{--                <label for="exampleInputEmail3">Email address</label>--}}
{{--                <input type="email" name="email" class="form-control" id="exampleInputEmail3" placeholder="Email">--}}
{{--            </div>--}}
{{--            <div class="form-group">--}}
{{--                <label for="exampleInputEmail3">Address</label>--}}
{{--                <input type="text" name="address" class="form-control" id="exampleInputEmail3" placeholder="Address">--}}
{{--            </div>--}}
{{--            <div class="form-group">--}}
{{--                <label for="exampleSelectGender">Gender</label>--}}
{{--                <select class="form-control" id="exampleSelectGender">--}}
{{--                    <option>Male</option>--}}
{{--                    <option>Female</option>--}}
{{--                </select>--}}
{{--            </div>--}}

{{--            <div class="form-group">--}}
{{--                <label>File upload</label>--}}
{{--                <input type="file" name="img[]" class="file-upload-default">--}}
{{--                <div class="input-group col-xs-12">--}}
{{--                    <input type="text" class="form-control file-upload-info" disabled="" placeholder="Upload Image">--}}
{{--                    <span class="input-group-append">--}}
{{--                            <button class="file-upload-browse btn btn-primary" type="button">Upload</button>--}}
{{--                          </span>--}}
{{--                </div>--}}
{{--                <div class="input-group col-xs-12">--}}
{{--                    <input type="file" name="data" class="custom-file-input form-control file-upload-info" id="customFile">--}}
{{--                    <label class="custom-file-label" for="customFile">Выберите файл</label>--}}
{{--                </div>--}}

{{--            </div>--}}