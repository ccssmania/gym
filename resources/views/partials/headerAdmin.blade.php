<header class="app-header"><a class="app-header__logo" href="{{url('/')}}">{{env('APP_NAME')}}</a>
  <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
  <!-- Navbar Right Menu-->
  <nav class="app-nav">
      <ul class="" style="list-style: none;">
        <li class="">
          <p class="app-header__logo2"> {{env('DOMAIN_NAME')}} </p>
        </li>
      </ul>
  </nav>
  <ul class="app-nav" >
    <!-- User Menu-->
    <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
      <ul class="dropdown-menu settings-menu dropdown-menu-right">
        <li><a class="dropdown-item" href=" {{url('/profile')}} "><i class="fa fa-user fa-lg"></i> Profile</a></li>
        <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="fa fa-sign-out fa-lg"></i> Logout</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form></li>
      </ul>
    </li>
  </ul>
</header>