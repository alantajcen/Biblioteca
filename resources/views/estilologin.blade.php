<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Biblioteca</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="http://localhost/biblioteca-bjg/public/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="http://localhost/biblioteca-bjg/public/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="http://localhost/biblioteca-bjg/public/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="http://localhost/biblioteca-bjg/public/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="http://localhost/biblioteca-bjg/public/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="http://localhost/biblioteca-bjg/public/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="http://localhost/biblioteca-bjg/public/plugins/daterangepicker/daterangepicker.css">

  <!-- summernote-->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition login-page" background="">
 
  <!-- Preloader login-page
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div-->

@if(Auth::user())


<div class="wrapper" >


  


</div>
@else


@yield('content')


@endif
<!-- ./wrapper -->

<!-- jQuery -->
<script src="http://localhost/biblioteca-bjg/public/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="http://localhost/biblioteca-bjg/public/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="http://localhost/biblioteca-bjg/public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="http://localhost/biblioteca-bjg/public/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="http://localhost/biblioteca-bjg/public/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="http://localhost/biblioteca-bjg/public/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="http://localhost/biblioteca-bjg/public/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="http://localhost/biblioteca-bjg/public/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="http://localhost/biblioteca-bjg/public/plugins/moment/moment.min.js"></script>
<script src="http://localhost/biblioteca-bjg/public/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="http://localhost/biblioteca-bjg/public/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="http://localhost/biblioteca-bjg/public/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="http://localhost/biblioteca-bjg/public/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="http://localhost/biblioteca-bjg/public/dist/js/adminlte.js"></script>