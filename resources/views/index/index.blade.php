@extends('layouts.app.index')

@section('content')
    <div class="card-body">
        <h4 class="card-title">Basic form elements</h4>
        <p class="card-description"> Basic form elements </p>
{{--        <form class="forms-sample" action="{{ route('organisation-form') }}" method="post">--}}
{{--            @csrf--}}

{{--            <div class="form-group">--}}
{{--                <label for="exampleInputName1">INN</label>--}}
{{--                <input type="text" name="inn" class="form-control" id="exampleInputName1" placeholder="INN">--}}
{{--            </div>--}}
{{--            <div class="form-group">--}}
{{--                <label for="exampleInputEmail3">Country</label>--}}
{{--                <input type="text" name="country" class="form-control" id="exampleInputEmail3" placeholder="Country">--}}
{{--            </div>--}}
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
{{--            --}}{{--Download file--}}







{{--            --}}{{--            <div class="form-group">--}}
{{--                <label for="exampleInputCity1">City</label>--}}
{{--                <input type="text" class="form-control" id="exampleInputCity1" placeholder="Location">--}}
{{--            </div>--}}
{{--            <div class="form-group">--}}
{{--                <label for="exampleTextarea1">Textarea</label>--}}
{{--                <textarea class="form-control" id="exampleTextarea1" rows="4"></textarea>--}}
{{--            </div>--}}
{{--            <button type="submit" class="btn btn-primary mr-2">Submit</button>--}}
{{--            <button class="btn btn-light">Cancel</button>--}}
{{--        </form>--}}
        <form class="forms-sample" action="{{ route('organisation-form-file') }}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}

            <div class="from-group">
                <input type="file" name="image">
            </div>

            <buttton class="btn btn-default" type="submit">Загрузкfа</buttton>

        </form>

        @isset($path)
            <img class="img-fluid" src="{{ asset('/storage/' . $path) }}" >
        @endisset
    </div>

@endsection
