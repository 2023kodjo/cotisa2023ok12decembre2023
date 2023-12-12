
    <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>COTISA</title>
  <link rel="stylesheet" href="../dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../dist/css/monstyle.css">
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
  <link rel="stylesheet" type="text/css" href="../../node_modules/viewerjs/dist/viewer.css">
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
  
<!-- <base href="{{ asset('dist/css/bootstrap.min.css') }}"> -->


 <div class="container mt-5 SessionM">
        <div class="row">
            <div class="col text-center bg-success text-white shadow">
               <h2>FAIRE UNE MODIFICATION</h2>
            </div>
        </div>
        <div class="row py-3">
            <div class="col">
           
            <form class="col-md-6 form shadow m-auto text-white"  action="/modifier/traitement" method="POST" >
                @csrf
                    <input type="text"  style="display: none;" name="id" value="{{ $mesemployes->id }}"/>
                    <input type="text"  style="display: none;" name="id_entreprise" value="{{ $mesemployes->id_entreprise }}"/>
                    <br>
                    <div class="row col-md-8 m-auto">
                    <label for="entreprise">Entreprise :</label>
                    <input type="text" name="entreprise" value="{{ $mesemployes->entreprise }}"/>
                    </div>

                    <div class="row col-md-8 m-auto">
                    <label for="nom">Nom :</label>
                    <input type="text" name="nom" value="{{ $mesemployes->nom }}"/>
                    </div>

                    <div class="row col-md-8 m-auto">
                    <label for="prenom">Prénom :</label>
                    <input type="text" name="prenom"
                    value="{{ $mesemployes->prenom }}"/>
                    </div>

                    <div class="row col-md-8 m-auto">
                    <label for="date_de_naissance">Date de naissance :</label>
                    <input type="text" name="date_de_naissance"
                    value="{{ $mesemployes->date_de_naissance }}"/>
                    </div>



                    <div class="row col-md-8 m-auto">
                    <label for="genre">Genre :</label>
                    <input type="text" name="genre"
                    value="{{ $mesemployes->genre }}"/>
                        </div>

                        <div class="row col-md-8 m-auto">
                    <label for="profession">Profession :</label>
                    <input type="text" name="profession"
                    value="{{ $mesemployes->profession }}"/>
                        </div>

                        <div class="row col-md-8 m-auto">
                    <label for="validation">Validation :</label>
                    <input type="text" name="validation"
                    value="{{ $mesemployes->validation }}"/>
                        </div>
 
                        <div class="row col-md-4 m-auto py-3 ">
                           <input type="submit" value="Modifier" class="btn text-white"style=" border-radius:50px;box-shadow: 0px 5px 10px rgba(2, 2, 20, 0.6); cursor: pointer;background-color:#E98109; color: #fff;"
                             onmouseover="this.style.backgroundColor='#FFA500';" 
                             onmouseout="this.style.backgroundColor='#E98109';">
                        </div>
                </form>

                            <a href="{{route('liste_des_declares')}}"><button class="retour" style="position: absolute;
                    position: fixed; top: 90%; left: 90%; 
                    transform: translate(-50%, -50%); box-shadow: 0px 5px 10px rgba(2, 2, 20, 0.6);">
                    <span><i class="fas fa-arrow-left">Retour</i></span></button>
                    </a>

            </div>
        </div>

    </div>
    <footer class="main bg-dark text-center border-dark py-4">
    <div class="row">
    <div class="col-md-4 m-auto">
      <hr class="bg-white" style="opacity:.4;"></hr>
    </div>
    </div>
    <p>
        Copyright &copy; 2023 <a href="#" class="text-success"><b>Cotisa.BF</b></a>
    </p>
  </footer>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
<script src="../https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="../plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="../plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="../plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="../plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="../plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../plugins/moment/moment.min.js"></script>
<script src="../plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="../plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../dist/js/pages/dashboard.js"></script>
<!-- mon script -->
<script src="{{ url('dist/js/monscript.js') }}"></script>
<script src="{{ url('dist/js/bootstrap.min.js') }}"></script>
<script src="{{ url('dist/js/code.jquery.com_jquery-3.7.1.min.js') }}"></script>
<script src="{{ url('dist/js/popper.min.js') }}"></script>
<script src="../../node_modules/viewerjs/dist/viewer.js"></script>
<!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.4/semantic.js"></script> -->

<!-- --------sweetalert----- -->
<!-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> -->
<script src="{{ asset('node_modules/sweetalert2/dist/sweetalert2.all.min.js') }}"></script>


<!-- data table -->
<script>
    $(document).ready(function() {
        $('#tableau').DataTable();
    });
</script>

<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>

</body>
</html>
    