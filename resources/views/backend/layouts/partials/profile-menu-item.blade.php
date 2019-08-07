<ul aria-labelledby="profile-menu" class="dropdown-menu">
    <li>
        <a rel="nofollow" href="#" class="dropdown-item">
            <i class="fa fa-user-circle-o"></i>
           Profile
        </a>
    </li>
    <li>
        <a rel="nofollow" href="#" class="dropdown-item">
            <i class="fa fa-cogs"></i>
          Setting
        </a>
    </li>
    <!-- Logout    -->
    <li>
        <a  href="{{ route('logout') }}" class="dropdown-item"
           onclick="event.preventDefault();
           document.getElementById('logout-form').submit();">
            <i class="fa fa-sign-out"></i>
            {{ __('Logout') }}
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
    </li>
</ul>