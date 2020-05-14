@extends('layouts.app.index')

@section('content')

    <h1>Оформление заявки:</h1> <br>

        <div class="container">
            <form class="forms-sample" action="{{ route('departure-application' , ['id' => $dataInspecting->inspecting_id]) }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
            <div class=" row">
                <div class="col-sm-12 col-md-10 col-lg-8 col-xl-6">
                    <div class="form-group">
                        <label for="exampleInputEmail3">Название организации</label>
                        <input type="text" name="name_organisation" class="form-control" id="exampleInputEmail3" placeholder="Name organisation">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName1">ИНН</label>
                        <input type="text" name="inn" class="form-control" id="exampleInputName1" placeholder="INN">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName1">Адрес</label>
                        <input type="text" name="address" class="form-control" id="exampleInputName1" placeholder="INN">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName1">Контактное лицо</label>
                        <input type="text" name="contact_person" class="form-control" id="exampleInputName1" placeholder="INN">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName1">Регион</label>
                        <input type="text" name="region" class="form-control" id="exampleInputName1" placeholder="INN">
                    </div>

                </div>
                <div class="col-sm-12 col-md-10 col-lg-8 col-xl-6">
                    <div class="form-group">
                        <label for="exampleInputEmail3">Лестничество</label>
                        <input type="text" name="forestry" class="form-control" id="exampleInputEmail3" placeholder="Name organisation">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName1">Участковое лестничество</label>
                        <input type="text" name="forest_district" class="form-control" id="exampleInputName1" placeholder="INN">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName1">Урочище</label>
                        <input type="text" name="tract" class="form-control" id="exampleInputName1" placeholder="INN">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName1">Перечень кварталов</label>
                        <input type="text" name="list_blocks" class="form-control" id="exampleInputName1" placeholder="INN">
                    </div>
                    
                    <div class="form-group">
                        <input name="_token" type="hidden" value="{{ csrf_token() }}" >
                        <label for="exampleInputEmail3">Документы</label>
                        <input type="file" name="application_document" class="form-control" id="exampleInputEmail3" required multiple>
                    </div>
                </div>
            </div>
                <div style="text-align: center">
                    <button type="submit" class="btn btn-primary mr-2" >Отправить заявку</button>
                </div>

    </form>
        </div>



{{--        <div class="form-group">--}}
{{--            <label for="exampleInputEmail3">Документ</label>--}}
{{--            <input type="file" name="application_document" class="form-control" id="exampleInputEmail3" placeholder="Name organisation">--}}
{{--        </div>--}}





{{--    <form class="forms-sample" action="{{ route('departure-document')}}" method="post" enctype="multipart/form-data">--}}
{{--        {{ csrf_field() }}--}}

{{--        <div class="form-group">--}}
{{--            <label for="exampleInputEmail3">Документ</label>--}}
{{--            <input type="file" name="application_document" class="form-control" id="exampleInputEmail3" placeholder="Name organisation">--}}
{{--        </div>--}}
{{--        <button type="submit" class="btn btn-primary mr-2" >Отправить документты</button>--}}
{{--    </form>--}}







@endsection
