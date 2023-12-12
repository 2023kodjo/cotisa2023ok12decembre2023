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
  <link rel="stylesheet" type="../text/css" href="/node_modules/viewerjs/dist/viewer.css">
  <!-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.4/semantic.css"> -->

  <!-- ------sweetalert----- -->
  <link rel="stylesheet" href="{{ asset('node_modules/sweetalert2/dist/sweetalert2.min.css') }}">
  
</head>
<body class="hold-transition sidebar-mini layout-fixed">
  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center bg-success">
    <img class="animation__shake" src="../dist/imagecotisa/LOGO COTISA Blanc sur vert.png" alt="cotisaLogo" height="200" width="200">
  </div>
  <!-- Navbar -->
  <nav class="main navbar navbar-expand navbar-dark navbar-light fixed">
    <!-- Left navbar links -->
    <ul class="navbar-nav bg-success elevation-3">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><img src="../dist/imagecotisa/LOGO COTISA Blanc sur vert.png" alt="cotisa Logo" class="brand-image elevation-3" style="width:50px;"></i></a>
      </li>
      @auth
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link" onclick="history.back(); return false;">Accueil</a>
      </li>
      @else
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{url('/')}}" class="nav-link">Accueil</a>
      </li>
      @endauth
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{route('politiquecotisa')}}" class="nav-link">Voir politique COTISA</a>
      </li>
    </ul>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto"> 
      <li class="nav-item bg-success">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <!-- <li class="nav-item bg-success">
        <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
        <i class="fas fa-user"></i>
        </a>
      </li> -->
      @if (auth()->check())
                <li class="nav-item dropdown ">
                  <a class="nav-link bg-success" data-toggle="dropdown" href="#" role="button">  
          <i class="fas fa-user" style="color: dark;"></i>

                  </a>     
          <div class="dropdown-menu dropdown-menu-lm dropdown-menu-right bg-dark">
                    <a href="{{ route('profile.edit') }}" class="dropdown-item bg-success">
                      Profile 
                      
                        {{ Auth::user()->name }}
                      
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="{{ route('logout') }}" class="dropdown-item bg-success" onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">Déconnexion</a>      
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                    
          </form>        
          </div>
          </li>
          @endif
    </ul>
  </nav>
  </div>
  <!-- /.navbar -->
  
