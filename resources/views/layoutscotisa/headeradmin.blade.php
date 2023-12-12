<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>COTISA</title>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../plugins/summernote/summernote-bs4.min.css">
  <!-- mon style -->
  <link rel="stylesheet" href="../dist/css/monstyle.css">
  <!-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.4/semantic.css"> -->
<!-- ------sweetalert----- -->
  <link rel="stylesheet" href="../node_modules/sweetalert2/dist/sweetalert2.min.css">

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center bg-success">
    <img class="animation__shake" src="../dist/imagecotisa/LOGO COTISA Blanc sur vert.png" alt="cotisaLogo" height="200" width="200">
  </div>
  <!-- Navbar -->
  <nav class="main navbar navbar-expand navbar-dark navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav bg-success elevation-3">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><img src="../dist/imagecotisa/LOGO COTISA Blanc sur vert.png" alt="cotisa Logo" class="brand-image elevation-3" style="width:50px;"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
      <a href="#" class="nav-link" onclick="history.back(); return false;">Accueil</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Voir politique COTISA</a>
      </li>
    </ul>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" href="https://www.google.com/" role="button" target="_blank">
          <i class="fas fa-search">Google</i>
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
        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
        <i class="fas fa-bars"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="{{route ('liste_utilisateurs')}}" class="dropdown-item">
            <!-- Message Start -->
            <div class="media"> 
              <div class="media-body">
                <h3 class="dropdown-item-title">
                Utilisateurs <i class="fas fa-users" style="color: dark;"></i>
                </h3>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="{{route('liste_des_declares')}}" class="dropdown-item">
            <!-- Message Start -->
            <div class="media"> 
              <div class="media-body">
                <h3 class="dropdown-item-title">
                Les déclarés
                </h3>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
            <img class="animation__shake" src="dist/imagecotisa/LOGO COTISA Blanc sur vert.png" alt="cotisaLogo" height="70" width="80">
              <div class="media-body ml-2">
                <h3 class="dropdown-item-title">
                  AMONTO Kodjo Justin
                  <span class="float-right text-sm text-warning"><i class="fas fa-user"></i></span>
                </h3>
                <p class="text-sm">Principal administrateur</p>
                <p class="text-sm text-muted"><i class="far fa-star mr-1"></i>Cotisa.com</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">Fermer</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>  
      <li class="nav-item dropdown">
                  <a class="nav-link bg-success" data-toggle="dropdown" href="#" role="button">  
          <i class="fas fa-user" style="color: dark;"></i>

                  </a>     
          <div class="dropdown-menu dropdown-menu-lm dropdown-menu-right bg-dark">
                    <a href="{{ route('profile.edit') }}" class="dropdown-item bg-success">
                       Profile 
                      @if (auth()->check())
                        {{ Auth::user()->name }}
                      @endif</a>
                    <div class="dropdown-divider"></div>
                    <a href="{{ route('logout') }}" class="dropdown-item bg-success" onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">Déconnexion</a>      
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf            
          </form>        
          </div>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

