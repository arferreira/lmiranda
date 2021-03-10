<div class="navbar @if(($configData['isNavbarFixed'])=== true){{'navbar-fixed'}} @endif">
  <nav
    class="{{$configData['navbarMainClass']}} @if($configData['isNavbarDark']=== true) {{'navbar-dark'}} @elseif($configData['isNavbarDark']=== false) {{'navbar-light'}} @elseif(!empty($configData['navbarBgColor'])) {{$configData['navbarBgColor']}} @else {{$configData['navbarMainColor']}} @endif">
    <div class="nav-wrapper">
      
      <ul class="navbar-list right">
        <li>
          <a class="waves-effect waves-block waves-light notification-button" href="javascript:void(0);"
            data-target="notifications-dropdown">
            <i class="material-icons">notifications_none<small class="notification-badge">3</small></i>
          </a>
        </li>
        <li>
          <a class="waves-effect waves-block waves-light profile-button" href="javascript:void(0);"
            data-target="profile-dropdown">
            <span class="avatar-status avatar-online">
              <img src="/images/avatar/avatar-7.png" alt="avatar"><i></i>
            </span>
          </a>
        </li>
      </ul>
      
      <!-- notifications-dropdown-->
      <ul class="dropdown-content" id="notifications-dropdown">
        <li>
          <h6>Notificações</h6>
        </li>
        <li class="divider"></li>
        <li>
          <a class="black-text" href="javascript:void(0)">
            <span class="material-icons icon-bg-circle cyan small">add_shopping_cart</span>
            Novo recebimento em dinheiro!
          </a>
          <time class="media-meta grey-text darken-2" datetime="2015-06-12T20:50:48+08:00">2 horas atrás</time>
        </li>
        <li>
          <a class="black-text" href="javascript:void(0)">
            <span class="material-icons icon-bg-circle deep-orange small">today</span>
            Nova consulta agendada!
          </a>
          <time class="media-meta grey-text darken-2" datetime="2015-06-12T20:50:48+08:00">1 hora atrás</time>
        </li>
        <li>
          <a class="black-text" href="javascript:void(0)">
            <span class="material-icons icon-bg-circle deep-orange small">today</span>
            Nova consulta agendada!
          </a>
          <time class="media-meta grey-text darken-2" datetime="2015-06-12T20:50:48+08:00">30 min atrás</time>
        </li>
      </ul>
      <!-- profile-dropdown-->
      <ul class="dropdown-content" id="profile-dropdown">
        <li>
          <a class="grey-text text-darken-1" href="{{asset('user-profile-page')}}">
            <i class="material-icons">person_outline</i>
            Perfil
          </a>
        </li> 
        <li class="divider"></li>
        <li>
        <form action="/logout" method="POST">
          @csrf
          <a class="grey-text text-darken-1" href="/logout" onclick="event.preventDefault(); this.closest('form').submit();">
            <i class="material-icons">keyboard_tab</i>
            Sair
          </a>
          </form>
        </li>
      </ul>
    </div>
    
  </nav>
</div>
