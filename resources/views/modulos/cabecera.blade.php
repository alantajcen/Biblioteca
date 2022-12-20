
 <!-- Navbar -->
   <header class="main-header navbar navbar-expand navbar-white navbar-light">

    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Perfil</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ url('Inicio') }}" class="nav-link">Ajustes</a>
      </li>
    </ul>


    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

       <li class="nav-item dropdown user-menu">
        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
          @if(auth()->user()->foto == "")

          <img src="{{ url('storage/defecto.png') }}" class="user-image img-circle elevation-2" alt="User Image">
          
          @else

          <img src="{{ url('storage/'.auth()->user()->foto) }}" class="user-image img-circle elevation-2" alt="User Image">
          @endif

          <span class="d-none d-md-inline">{{auth()->user()->name}}</span>
        </a>
        <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <!-- User image -->
          <li class="user-header bg-success" style="height: 100px;">
            <!--img src="../../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image"-->
            <p>
              {{auth()->user()->name}} - <br> {{auth()->user()->rol}}
            </p>
          </li>

          <li class="user-footer">
            <a href="{{ url('Mis-Datos') }}" class="btn btn-primary btn-flat" style="border-radius: 5px;"> Mi Perfil</a>
            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="btn btn-danger btn-flat float-right" style="border-radius: 5px;">Salir</a>
          </li>

          <form method="post" id="logout-form" action="{{ route('logout') }}">
            @csrf
          </form>

        </ul>
      </li>


      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>
    </ul>


  </header>


 