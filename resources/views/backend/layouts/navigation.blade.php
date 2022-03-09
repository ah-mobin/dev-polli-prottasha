<ul class="sidebar-nav" data-coreui="navigation" data-simplebar>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('home') }}">
            <svg class="nav-icon">
                <use xlink:href="{{ asset('icons/coreui.svg#cil-speedometer') }}"></use>
            </svg>
            {{ __('Dashboard') }}
        </a>
    </li>

    <li class="nav-group" aria-expanded="false">
        <a class="nav-link nav-group-toggle" href="#">
            <svg class="nav-icon">
                <use xlink:href="{{ asset('icons/coreui.svg#cil-star') }}"></use>
            </svg>
            Pages
        </a>
        <ul class="nav-group-items" style="height: 0px;">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.pages.home') }}" target="_top">
                    Home
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.pages.about.histories') }}" target="_top">
                    About - History
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.pages.about.missions') }}" target="_top">
                    About - Mission
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.pages.about.visions') }}" target="_top">
                    About - Vision
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.pages.management.organogram') }}" target="_top">
                    Organogram
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.pages.what-we-do.index') }}" target="_top">
                    What We Do
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.pages.legal-status.index') }}" target="_top">
                    Legal Status
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.pages.careers.index') }}" target="_top">
                    Career
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.contacts.index') }}" target="_top">
                    Contact Us
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.galleries.index') }}" target="_top">
                    Gallery
                </a>
            </li>
        </ul>
    </li>

    {{-- <li class="nav-item">
        <a class="nav-link" href="{{ route('users.index') }}">
            <svg class="nav-icon">
                <use xlink:href="{{ asset('icons/coreui.svg#cil-user') }}"></use>
            </svg>
            {{ __('Users') }}
        </a>
    </li> --}}

    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.welcome-note') }}">
            <svg class="nav-icon">
                <use xlink:href="{{ asset('icons/coreui.svg#cil-notes') }}"></use>
            </svg>
            {{ __('Welcome Note') }}
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.chairman-speech') }}">
            <svg class="nav-icon">
                <use xlink:href="{{ asset('icons/coreui.svg#cil-layers') }}"></use>
            </svg>
            {{ __('Chairman Speech') }}
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.executive.director') }}">
            <svg class="nav-icon">
                <use xlink:href="{{ asset('icons/coreui.svg#cil-layers') }}"></use>
            </svg>
            {{ __('Executive Director') }}
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.events') }}">
            <svg class="nav-icon">
                <use xlink:href="{{ asset('icons/coreui.svg#cil-newspaper') }}"></use>
            </svg>
            {{ __('Events/News') }}
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.notice') }}">
            <svg class="nav-icon">
                <use xlink:href="{{ asset('icons/coreui.svg#cil-note-add') }}"></use>
            </svg>
            {{ __('Notice') }}
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.promotional-banner') }}">
            <svg class="nav-icon">
                <use xlink:href="{{ asset('icons/coreui.svg#cil-note-add') }}"></use>
            </svg>
            {{ __('Promotional Banner') }}
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.settings') }}">
            <svg class="nav-icon">
                <use xlink:href="{{ asset('icons/coreui.svg#cil-applications-settings') }}"></use>
            </svg>
            {{ __('Settings') }}
        </a>
    </li>
</ul>
