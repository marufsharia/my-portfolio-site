<!-- Sidebar Header-->
@include('backend.layouts.partials.profile')
<!-- Sidebar Navidation Menus-->
<span class="heading">Main</span>
<ul class="list-unstyled">
    <li class="{{ (request()->is('dashboard')) ? 'active' : '' }}">
        <a href="{{route('dashboard')}}">
            <i  class="icon-home"></i>Home
        </a>
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

    <li><a href="#pagesDropdown" aria-expanded="false" data-toggle="collapse"> <i
                    class="icon-interface-windows"></i>Pages </a>
        <ul id="pagesDropdown" class="collapse list-unstyled ">
            <li><a href="pages-contacts.html">Contacts</a></li>
            <li><a href="pages-invoice.html">Invoice</a></li>
            <li><a href="login.html">Login page</a></li>
            <li><a href="login-2.html">Login v.2 <span class="badge badge-info">New</span></a></li>
            <li><a href="pages-profile.html">Profile</a></li>
            <li><a href="pages-pricing.html">Pricing table</a></li>
        </ul>
    </li>
</ul>
<span class="heading">Extras</span>
<ul class="list-unstyled">
    <li><a href="{{route('my_site',auth()->user()->user_name)}}"> <i class="icon-flask"></i>My Site</a></li>
</ul>