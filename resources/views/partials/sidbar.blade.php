<aside class="app-sidebar">
  <div class="app-sidebar__user"><img class="app-sidebar__user-avatar responsive-avatar" src="{{url('/images/user_'.Auth::user()->id.'.jpg')}}" onerror="this.src='{{url("/images/small/perfil.png")}}'" alt="User Image">
    <div>
      <p class="app-sidebar__user-name">{{Auth::user()->name}}</p>
      <p class="app-sidebar__user-designation"></p>
    </div>
  </div>
  <ul class="app-menu">
    <li>
      <a class="app-menu__item {{get_class(Route::getCurrentRoute()->getController()) == "App\Http\Controllers\AdminController" ? 'active' : ''}}" href="{{url('/dashboard')}}"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a>
    </li> 
    <li>
      <a class="app-menu__item {{get_class(Route::getCurrentRoute()->getController()) == "App\Http\Controllers\ProductController" ? 'active' : ''}}" href="{{url('/products')}}"><i class="app-menu__icon fa fa-th-list"></i><span class="app-menu__label">Productos</span></a>
    </li>
    <li>
      <a class="app-menu__item {{get_class(Route::getCurrentRoute()->getController()) == "App\Http\Controllers\ProductController" ? 'active' : ''}}" href="{{url('/products')}}"><i class="app-menu__icon fa fa-user"></i><span class="app-menu__label">Perfil</span></a>
    </li>
    <li>
      <a class="app-menu__item {{get_class(Route::getCurrentRoute()->getController()) == "App\Http\Controllers\InsuranceCompanyController" ? 'active' : ''}}" href="{{url('/companies')}}">
        <i class="app-menu__icon fa fa-building"></i><span class="app-menu__label">Músculos</span></a></li>
    <li>
      <a class="app-menu__item {{get_class(Route::getCurrentRoute()->getController()) == "App\Http\Controllers\NotificationController" ? 'active' : ''}}" href="{{url('/notifications')}}"><i class="app-menu__icon fa fa-bell "></i><span class="app-menu__label">Notificaciones</span></a>
    </li>
  </ul>
</aside>