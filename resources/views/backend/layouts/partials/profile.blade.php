<div class="sidebar-header d-flex align-items-center">
    <div class="avatar">
            <img src="{{asset('img/avatar-1.jpg')}}"
                 alt="..." class="img-fluid rounded-circle">
    </div>
    <div class="title">
        <a id="profile-menu" rel="nofollow" data-target="#" href="#"
           data-toggle="dropdown" aria-haspopup="true"
           aria-expanded="false"
           class="nav-link profile-menu dropdown-toggle text-center">
            <h1 class="h4">
                {{auth()->user()->name}}
            </h1>
            <p>
                Web Designer
            </p>
        </a>
        @include('backend.layouts.partials.profile-menu-item')
    </div>
</div>

