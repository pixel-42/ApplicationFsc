<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <a href="#" class="nav-link">
                <div class="text-wrapper">
                    <p class="designation"></p>
                </div>
            </a>
        </li>
            @if(Auth::user()->isClient())
                <a class="nav-link" href="{{ route('home-page') }}">
                    <span class="menu-title">Главная</span>
                    <i class="icon-globe menu-icon"></i>
                </a>

                <a class="nav-link" href="{{ route('list-inspection') }}">
                    <span class="menu-title">Отправить заявку</span>
                    <i class="icon-globe menu-icon"></i>
                </a>

                <a class="nav-link" href="{{ route('list-application') }}">
                    <span class="menu-title">Мои Заявки</span>
                    <i class="icon-globe menu-icon"></i>
                </a>
            @endif
            @if(Auth::user()->isInspecting())
                    <a class="nav-link" href="{{ route('home-page') }}">
                        <span class="menu-title">Главная</span>
                        <i class="icon-globe menu-icon"></i>
                    </a>
                <a class="nav-link" href="{{ route('list-application') }}">
                    <span class="menu-title">Входящие Заявки</span>
                    <i class="icon-globe menu-icon"></i>
                </a>
            @endif
            @if(Auth::user()->isAdmin())
            <li class="nav-item">
                <a class="nav-link" href="{{ route('home-page') }}">
                    <span class="menu-title">Главная</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('list-application-admin') }}">
                    <span class="menu-title">Список всех заявок</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('showInspecting') }}">
                    <span class="menu-title">Список инспекторов</span>
                </a>
            </li>
            @endif

    </ul>
</nav>

