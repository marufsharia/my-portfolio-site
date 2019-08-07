<nav class="navbar">
    <!-- Search Box-->
    @include('backend.layouts.partials.search-bar')
    <div class="container-fluid">

        <div class="navbar-holder d-flex align-items-center justify-content-between">

            <!-- Navbar Header-->
            <div class="navbar-header">
                <!-- Navbar Brand -->
                <a href="{{route('dashboard')}}" class="navbar-brand d-none d-sm-inline-block">
                    <div class="brand-text d-none d-lg-inline-block">
                        <span>MS</span><strong>Dashboard</strong>
                    </div>
                    <div class="brand-text d-none d-sm-inline-block d-lg-none">
                        <strong>BD</strong>
                    </div>
                </a>
                <!-- Toggle Button-->
                <a id="toggle-btn" href="#"
                   class="menu-btn active">
                    <span></span><span></span><span></span>
                </a>
            </div>

            <!-- Navbar Menu -->
            <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                <!-- Search-->
                <li class="nav-item d-flex align-items-center">
                    <a id="search" href="#">
                        <i class="icon-search"></i>
                    </a>
                </li>
                <!-- Notifications-->
            @include('backend.layouts.partials.notification')
            <!-- Messages                        -->
            @include('backend.layouts.partials.message')
            <!-- Languages dropdown    -->
            @include('backend.layouts.partials.language')

            <!-- profile -->
                <li class="nav-item">
                    <a id="top-profile-menu" rel="nofollow" data-target="#" href="#"
                       data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false"
                       class="nav-link profile-menu dropdown-toggle">
                        <img src="{{asset('img/avatar-1.jpg')}}"
                             alt="..." class="rounded-circle top-profile-img"/>
                    </a>
                    @include('backend.layouts.partials.profile-menu-item')
                </li>
            </ul>
        </div>
    </div>
</nav>