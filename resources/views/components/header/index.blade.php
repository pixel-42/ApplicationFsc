{{--<nav class="navbar navbar-expand-lg navbar-light bg-light">--}}
{{--    <h1>FSC Window</h1>--}}
{{--    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">--}}
{{--        <span class="navbar-toggler-icon"></span>--}}
{{--    </button>--}}

{{--    <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-left: 100px; ">--}}
{{--        <ul class="navbar-nav mr-auto" style="font-size: 20px;">--}}

{{--                @if(Auth::user()->isClient())--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="{{ route('home-page') }}">--}}
{{--                            <span class="menu-title">Главная  |</span>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="{{ route('list-inspection') }}">--}}
{{--                            <span class="menu-title">Отправить заявку</span>--}}

{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="{{ route('list-application') }}">--}}
{{--                            <span class="menu-title">|   Мои заявки</span>--}}

{{--                        </a>--}}
{{--                    </li>--}}
{{--                @endif--}}
{{--                    @if(Auth::user()->isInspecting())--}}
{{--                        <li class="nav-item">--}}
{{--                        <a class="nav-link" href="{{ route('home-page') }}">--}}
{{--                            <span class="menu-title">Главная</span>--}}
{{--                        </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                        <a class="nav-link" href="{{ route('list-application-inspecting') }}">--}}
{{--                            <span class="menu-title">|   Мои Заявки</span>--}}
{{--                        </a>--}}
{{--                        </li>--}}
{{--                    @endif--}}
{{--                    @if(Auth::user()->isAdmin())--}}
{{--                        <li class="nav-item">--}}
{{--                        <a class="nav-link" href="{{ route('home-page') }}">--}}
{{--                            <span class="menu-title">Главная  |</span>--}}
{{--                        </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                        <a class="nav-link" href="{{ route('list-application-admin') }}">--}}
{{--                            <span class="menu-title">Список всех заявок</span>--}}
{{--                        </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                        <a class="nav-link" href="{{ route('showInspecting') }}">--}}
{{--                            <span class="menu-title">|   Список инспекторов</span>--}}
{{--                        </a>--}}
{{--                        </li>--}}
{{--                    @endif--}}
{{--        </ul>--}}
{{--        <ul class="navbar-nav my-2 my-lg-0">--}}
{{--            <li class="nav-item">--}}
{{--                <a class="dropdown-item" href="{{asset('/logout')}}"><img src="{{asset('images/logoyt.png')}}" alt="" style="margin-right: 5px;">Выйти</a>--}}

{{--            </li>--}}
{{--        </ul>--}}

{{--    </div>--}}
{{--</nav>--}}


<nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="navbar-menu-wrapper d-flex align-items-center flex-grow-1">
        <h2 class="mb-0 font-weight-medium d-none d-lg-flex">FSC Window</h2>
        <ul class="navbar-nav navbar-nav-right ml-auto">
            {{--            <li class="nav-item"><a href="#" class="nav-link"><i class="icon-basket-loaded"></i></a></li>--}}
            {{--            <li class="nav-item"><a href="#" class="nav-link"><i class="icon-chart"></i></a></li>--}}
            <li class="nav-item dropdown">
                <a class="nav-link count-indicator message-dropdown" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                    <i class="icon-speech"></i>
                    <span class="count"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="messageDropdown">
                    <a class="dropdown-item py-3">
                        <p class="mb-0 font-weight-medium float-left">You have  unread mails </p>
                        <span class="badge badge-pill badge-primary float-right">View all</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item preview-item">

                    </a>
                    <a class="dropdown-item preview-item">

                    </a>
                    <a class="dropdown-item preview-item">

                    </a>
                </div>
            </li>

        </ul>
                <ul class="navbar-nav my-2 my-lg-0">
                    <li class="nav-item">
                        <a class="dropdown-item" href="{{asset('/logout')}}"><img src="{{asset('images/logoyt.png')}}" alt="" style="margin-right: 5px;">Выйти</a>

                    </li>
                </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="icon-menu"></span>
        </button>
    </div>
</nav>

