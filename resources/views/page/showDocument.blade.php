
    @isset($path)
        <iframe src="{{asset('/storage/' . $path)}}" frameborder="0" width="100%" height="100%" style="margin: -8px"></iframe>
    @endisset
