@extends('layouts.app.index')

@section('content')


    <h3>Заявка
        @if(Auth::user()->isInspecting())
            от  {{ $dataRequest->name_organisation}}
        @endif
    </h3>
    @if(Auth::user()->isInspecting())
        <div style=" display: flex; justify-content: flex-end;">
            <form action="{{route('change-status-add', ['id' => $dataRequest->id ])}}" method="POST">
                @csrf
                <button type="submit" class="btn" style="border-color: black;" >Принято к рассмотрению</button>
            </form>

            <form action="{{route('change-status-ok', ['id' => $dataRequest->id ])}}" method="POST">
                @csrf
                <button type="submit" class="btn btn-success " >Одобрено</button>
            </form>

            <form action="{{route('change-status-no', ['id' => $dataRequest->id ])}}" method="POST">
                @csrf
                <button type="submit" class="btn btn-danger " >Возврат</button>
            </form>
        </div>
    @endif
<div style="display: flex;">

    <div class="col-sm-12 col-md-10 col-lg-8 col-xl-6">
        <div class="card">

            <div class="card-body">
                <br>
                <h4><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Название организации:</font></font></h4>
                <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$dataRequest->name_organisation}} </font></font></p>
                <h4><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ИНН:</font></font></h4>
                <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$dataRequest->inn}}</font></font></p>
                <h4><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Адрес:</font></font></h4>
                <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$dataRequest->address}}</font><font style="vertical-align: inherit;"></font><font style="vertical-align: inherit;"></font><font style="vertical-align: inherit;"></font></font></p>
                <h4><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Контактное лицо:</font></font></h4>
                <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$dataRequest->contact_person}}</font></font></p>
                <h4><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Контактные данные:</font></font></h4>
                <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"></font></font></p>
                <h4><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Статус: </font></font></h4>
                <p>
                            <span class="badge badge-pill badge-warning"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                              {{$dataRequest->status}}
                            </font></font></span>
                </p>
                <h4><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Регион:</font></font></h4>
                <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$dataRequest->region}}</font></font></p>
            </div>
        </div>
    </div>
    <div class="col-sm-12 col-md-10 col-lg-8 col-xl-6">
        <div class="card">
            <div class="card-body">
                <br>
                <h4><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Лестничество:</font></font></h4>
                <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$dataRequest->forestry}}</font></font></p>
                <h4><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Участковое лестничество:</font></font></h4>
                <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$dataRequest->forest_district}}</font></font></p>
                <h4><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Урочище:</font></font></h4>
                <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$dataRequest->tract}}</font></font></p>
                <h4><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Перечень кварталов:</font></font></h4>
                <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$dataRequest->list_blocks}}</font></font></p>
                <h4><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Документы: </font></font></h4>
                <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                            @foreach ($dataRequestDocument as $document)
                                <a href="{{ route('show-document', ['id' => $document->id ])}}">{{$document->filename}}</a>
                            @endforeach
                        </font></font></p>
                <h4><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Комментарии:</font></font></h4>
                <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$dataRequest->comment}}</font></font></p>
            </div>
        </div>
    </div>
</div>
    @if(Auth::user()->isInspecting())
        <form class="forms-sample" action="{{route('add-comment', ['id' => $dataRequest->id ])}}" method="post" >
            {{ csrf_field() }}
            <h4><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Поле для комментария:</font></font></h4>
                <div class="col-md-5">
                    <textarea class="form-control" id="textarea-input" name="add-comment" rows="9" placeholder="Content.."></textarea>
                </div>
            <button type="submit" class="btn btn-primary " style="margin-top: 10px;" >Добавить комментарий</button>
        </form>
    @endif

{{--    @isset($path)--}}
{{--        <iframe src="{{asset('/storage/' . $path)}}" frameborder="0" width="100%" height="600px"></iframe>--}}
{{--    @endisset--}}


@endsection
