<!-- Sidebar Header-->
@include('backend.layouts.partials.profile')
<!-- Sidebar Navidation Menus-->
<ul class="list-unstyled">
    <li class="{{ (request()->is('dashboard')) ? 'active' : '' }}">
        <a href="{{route('dashboard')}}">
            <i class="icon-home"></i>Home
        </a>
    </li>
    <hr class="menu-hr-top">
    <span class="text-black-50 heading mt-0 mb-0">Blog</span>
    <hr class="menu-hr-bottom">
    <li>
        <a href="#blogDropdown" aria-expanded="{{ (request()->is('blog*')) ? 'true' : 'false' }}" data-toggle="collapse"
            class="{{ (request()->is('blogs*')) ? '' : 'collapsed' }}">
            <i class="icon-interface-windows"></i>blog
        </a>
        <ul id="blogDropdown" class="collapse list-unstyled {{ (request()->is('blog*')) ? 'show' : '' }}">
            <li class="{{ (request()->is('blog/create')) ? 'active' : '' }}">
                <a href="{{route('blog.create')}}"><i class="fa fa-plus-circle"></i>Add New</a>
            </li>
            <li class="{{ (request()->is('blog')) ? 'active' : '' }}">
                <a href="{{route('blog.index')}}"><i class="fa fa-list"></i>List</a>
            </li>
        </ul>
    </li>
    <hr class="menu-hr-top">
    <span class="text-black-50 heading">Portfolio Site</span>
    <hr class="menu-hr-bottom">
    <li>
        <a href="{{route('my_site',auth()->user()->user_name)}}">
            <i class="fa fa-eye"></i>
            View Site
        </a>
    </li>

    <li class="{{ (request()->is('site-setting*')) ? 'active' : '' }}">
        <a href="{{route('site-setting.update')}}">
            <i class="fa fa-cogs"></i>
            General Setting
        </a>
    </li>
    <li>
        <a href="#imageSlidersDropdown" aria-expanded="{{ (request()->is('image-sliders*')) ? 'true' : 'false' }}"
            data-toggle="collapse" class="{{ (request()->is('image-sliders*')) ? '' : 'collapsed' }}">
            <i class="icon-interface-windows"></i>Image Slider
        </a>
        <ul id="imageSlidersDropdown"
            class="collapse list-unstyled {{ (request()->is('image-sliders*')) ? 'show' : '' }}">
            <li class="{{ (request()->is('image-sliders/create')) ? 'active' : '' }}">
                <a href="{{route('image-sliders.create')}}"><i class="fa fa-plus-circle"></i>Add New</a>
            </li>
            <li class="{{ (request()->is('image-sliders')) ? 'active' : '' }}">
                <a href="{{route('image-sliders.index')}}"><i class="fa fa-list"></i>List</a>
            </li>
        </ul>
    </li>
    <li>
        <a href="#servicesDropdown" aria-expanded="{{ (request()->is('services*')) ? 'true' : 'false' }}"
            data-toggle="collapse" class="{{ (request()->is('services*')) ? '' : 'collapsed' }}">
            <i class="icon-interface-windows"></i>Services
        </a>
        <ul id="servicesDropdown" class="collapse list-unstyled {{ (request()->is('services*')) ? 'show' : '' }}">
            <li class="{{ (request()->is('services/create')) ? 'active' : '' }}">
                <a href="{{route('services.create')}}"><i class="fa fa-plus-circle"></i>Add New</a>
            </li>
            <li class="{{ (request()->is('services')) ? 'active' : '' }}">
                <a href="{{route('services.index')}}"><i class="fa fa-list"></i>List</a>
            </li>
        </ul>
    </li>
</ul>