
  <div class="wrapper">
 <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__wobble" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <p class="nav-link">Bem-vindo, {{ Auth::user()->name }}!</p>
        <div class="navbar-search-block">
          
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>

       <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="fas fa-user"></i>
          
        </a>
        <div class="dropdown-menu dropdown-menu dropdown-menu-right">
         @guest 
          <div class="dropdown-divider"></div>
          <a href="/register" class="dropdown-item">
            <i class="nav-icon fas fa-id-card"></i> Register
           
          </a>
          <div class="dropdown-divider"></div>
          <a href="/login" class="dropdown-item">
            <i class="nav-icon fas fa-sign-in-alt"></i> Entrar
            
          </a>
          @endguest
          @auth
          <div class="dropdown-divider"></div>
          <form action="/logout" method="POST">
                  @csrf
                  <a href="/logout" 
                    class="nav-link" 
                    onclick="event.preventDefault();
                    this.closest('form').submit();">
                    Sair
                  </a>
                </form>
                @endauth
        </div>
      </li>


    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">CEPM</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="/" class="nav-link active">
             <i class="nav-icon fas fa-solar-panel"></i>
              <p>Painel
              </p>
            </a>
            
          </li>

          @if(Auth::user()->usertype == 'user')
          <li class="nav-item">
            <a href="{{ route('profile.show') }}" class="nav-link">
              <i class="nav-icon fas fa-school"></i>
              <p>Perfil
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="/notas" class="nav-link">
              <i class="nav-icon fas fa-school"></i>
              <p>Pauta Geral
              </p>
            </a>
          </li>
          @endif

          @if(Auth::user()->usertype == 'admin')
          <li class="nav-item">
            <a href="/gestao" class="nav-link">
              <i class="nav-icon fas fa-school"></i>
              <p>Gestão Escolar
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="/administracao" class="nav-link">
              <i class="nav-icon fas fa-toolbox"></i>
              <p>Gestão Administrativa
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="/utilizadores" class="nav-link">
              <i class="nav-icon fa fa-user-cog"></i>
              <p>Utilizadores
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ route('profile.show') }}" class="nav-link">
              <i class="nav-icon fas fa-school"></i>
              <p>Perfil
              </p>
            </a>
          </li>
          @endif
          <li class="nav-item">
            <a href="/suporte" class="nav-link">
              <i class="nav-icon fas fa-wrench"></i>
              <p>Suporte
              </p>
            </a>
          </li> 
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>