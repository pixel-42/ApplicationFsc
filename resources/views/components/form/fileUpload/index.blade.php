<form class="forms-sample" action="{{ $route }}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="form-group">
        <label>Выберите документы</label>
        <input type="file" name="document" multiple class="form-control file-upload-info"  placeholder="Upload Image">
    </div>
    <button type="submit" class="btn btn-primary mr-2">Загрузить</button>
    <button class="btn btn-light">Отменить</button>
</form>
