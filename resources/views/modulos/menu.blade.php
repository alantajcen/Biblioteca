
    <!-- Sidebar -->
      <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('Inicio') }}" class="brand-link">
       
      <!--img src="dist/img/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"-->
      <span class="brand-text font-weight-light">Biblioteca</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      
      <!-- Buscador -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menú -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        
          <li class="nav-item">
            <a href="{{ url('Inicio') }}" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Inicio
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('Usuarios') }}" class="nav-link">
              <i class="nav-icon fas fa-user-friends"></i>
              <p>
                Usuarios
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('Alumnos') }}" class="nav-link">
              <i class="nav-icon fas fa-user-graduate"></i>
              <p>
                Alumnos
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-list-ul"></i>
              <p>
                Acerca de los libros
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right"></span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('Generos') }}" class="nav-link">
                  <i class="fas fa-layer-group nav-icon"></i>
                  <i class=""></i>
                  <p>Géneros</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('Autores') }}" class="nav-link">
                  <i class="fas fa-users nav-icon"></i>
                  <p>Autores</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('Libros') }}" class="nav-link">
                  <i class="fas fa-book nav-icon"></i>
                  <p> Libros</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book-reader"></i>
              <p>
                Préstamo de libros
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right"></span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('Crear-Prestamos') }}" class="nav-link">
                  <i class="nav-icon fas fa-user-cog"></i>
                  <p>Gestionar Préstamo</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('Ver-Prestamos') }}" class="nav-link">
                  <i class="nav-icon fas fa-user-times"></i>
                  <p>Préstamos Finalizados</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-share-alt"></i>
              <p>Ver Más</p>
             </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
   