<!-- <div class="container-fluid"> -->
<nav class="navbar navbar-expand-lg navbar-light bg-light mb-3" id="navbar">
    <div class="container-fluid">
        @if(Route::currentRouteName() != 'page.index')
        <a class="navbar-brand" href="{{ route('page.index') }}">
            <img src="{{asset('assets/img/polliprottasha.jpg')}}" class="img-fluid" alt="">
        </a>
        @endif
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse text-uppercase" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link @if(\Request::route()->getName() == 'page.index') active @endif" href="{{ route('page.index') }}"><i class="fa fa-home" aria-hidden="true"></i></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle @if((\Request::route()->getName() == 'page.history') || (\Request::route()->getName() == 'page.mission') || (\Request::route()->getName() == 'page.vision')) active @endif" href="#" id="navbarAboutDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        about
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarAboutDropdown">
                        <li><a class="dropdown-item" href="{{ route('page.history') }}">history</a></li>
                        <li><a class="dropdown-item" href="{{ route('page.mission') }}">mission</a></li>
                        <li><a class="dropdown-item" href="{{ route('page.vision') }}">vision</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle @if(\Request::route()->getName() == 'page.organogram') active @endif" href="#" id="navbarManagementDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        management
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarManagementDropdown">
                        <li><a class="dropdown-item" href="{{ route('page.organogram') }}">Organugram</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if(\Request::route()->getName() == 'page.what-we-do') active @endif" href="{{ route('page.what-we-do') }}">what we do</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if(\Request::route()->getName() == 'page.legal-status') active @endif" href="{{ route('page.legal-status') }}">legal status</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if(\Request::route()->getName() == 'page.career') active @endif" href="{{ route('page.career') }}">career</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if(\Request::route()->getName() == 'page.gallery') active @endif" href="{{ route('page.gallery') }}">gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if(\Request::route()->getName() == 'page.contact-us') active @endif" href="{{ route('page.contact-us') }}">contact us</a>
                </li>
            </ul>

        </div>
    </div>
</nav>
<!-- </div> -->
