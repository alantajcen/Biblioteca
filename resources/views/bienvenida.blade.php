<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Biblioteca</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ URL::asset('plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css') }}">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{ URL::asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ URL::asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ URL::asset('plugins/jqvmap/jqvmap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ URL::asset('dist/css/adminlte.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ URL::asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ URL::asset('plugins/daterangepicker/daterangepicker.css') }}">

  <link rel="stylesheet" href="{{ URL::asset('plugins/select2/css/select2.css') }}">



  <link rel="stylesheet" href="{{ URL::asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">


  <link rel="stylesheet" href="{{ URL::asset('plugins/datatables-bs4/css/dataTables.bootstrap4.css') }}">









  <!-- summernote-->
  <link rel="stylesheet" href="{{ URL::Asset('plugins/summernote/summernote-bs4.min.css') }}">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
 
  <!-- Preloader login-page
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div-->

@if(Auth::user())


<div class="wrapper">

  @include('modulos.cabecera')

    @if(auth()->user()->rol == "Maestro")

    @include('modulos.menuM')

  @else


  @include('modulos.menu')

@endif

  @yield('contenido')
  


</div>
@else


@yield('content')


@endif
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ URL::asset('plugins/jquery/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ URL::asset('plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ URL::asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{ URL::asset('plugins/chart.js/Chart.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ URL::asset('plugins/sparklines/sparkline.js') }}"></script>
<!-- JQVMap -->
<script src="{{ URL::asset('plugins/jqvmap/jquery.vmap.min.js') }}"></script>
<script src="{{ URL::asset('plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ URL::asset('plugins/jquery-knob/jquery.knob.min.js') }}"></script>
<!-- daterangepicker -->
<script src="{{ URL::asset('plugins/moment/moment.min.js') }}"></script>
<script src="{{ URL::asset('plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ URL::asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<!-- Summernote -->
<script src="{{ URL::asset('plugins/summernote/summernote-bs4.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ URL::asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ URL::asset('dist/js/adminlte.js') }}"></script>

<!-- AdminLTE for demo purposes >
<script src="dist/js/demo.js') }}"></script-->




<script src="{{ URL::asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>

<script src="{{ URL::asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>

<script src="{{ URL::asset('plugins/datatables-bs4/js/dataTables.bootstrap4.js') }}"></script>



<script src="{{ URL::asset('plugins/inputmask/jquery.inputmask.js') }}"></script>

<script src="{{ URL::asset('plugins/inputmask/inputmask.js') }}"></script>

<script src="{{ URL::asset('plugins/inputmask/inputmask.js') }}"></script>


<script src="{{ URL::asset('plugins/select2/js/select2.js') }}"></script>


<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>






<script type="text/javascript">

  $("#select2").select2();


$(".DT1").DataTable({

    "language": {

      "sSearch": "Buscar:",
      "sEmptyTable": "No hay datos en la Tabla",
      "sZeroRecords": "No se encontraron resultados",
      "sInfo": "Mostrando registros del _START_ al _END_ de un total _TOTAL_",
      "SInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0",
      "sInfoFiltered": "(filtrando de un total de _MAX_ registros)",
      "oPaginate": {

        "sFirst": "Primero",
        "sLast": "Último",
        "sNext": "Siguiente",
        "sPrevious": "Anterior"

      },

      "sLoadingRecords": "Cargando...",
      "sLengthMenu": "Mostrar _MENU_ registros"
    

    }

  });

//TABLA PARA PRESTAMOS//

$(".DT2").DataTable({

  "pageLength": 1,

    "language": {

      "sSearch": "Buscar:",
      "sEmptyTable": "No hay datos en la Tabla",
      "sZeroRecords": "No se encontraron resultados",
      "sInfo": "Mostrando registros del _START_ al _END_ de un total _TOTAL_",
      "SInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0",
      "sInfoFiltered": "(filtrando de un total de _MAX_ registros)",
      "oPaginate": {

        "sFirst": "Primero",
        "sLast": "Último",
        "sNext": "Siguiente",
        "sPrevious": "Anterior"

      },

      "sLoadingRecords": "Cargando...",
      "sLengthMenu": "Mostrar _MENU_ registros"
    

    }

  });

    //***ELIMINAR USUARIO***//

$('.table').on('click', '.UsuarioEliminado', function(){

  var Uid = $(this).attr('Uid');
  var Usuario = $(this).attr('Usuario');

  Swal.fire({

    title: '¿Está a punto de eliminar el usuario '+Usuario+'?',
    icon: 'warning',
    showCancelButton: true,
    cancelButtonText: 'Cancelar',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Eliminar',
    confirmButtonColor: '#3085d6'

  }).then((result) => {

    if (result.isConfirmed){

      window.location = "Usuario-Eliminado/"+Uid;

    }

  })

});


    //ELIMINAR ALUMNO//

$('.table').on('click', '.AlumnoEliminado', function(){

  var Aid = $(this).attr('Aid');
  var Alumno = $(this).attr('Alumno');

  Swal.fire({

    title: '¿Está a punto de eliminar el Alumno '+Alumno+'?',
    icon: 'warning',
    showCancelButton: true,
    cancelButtonText: 'Cancelar',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Eliminar',
    confirmButtonColor: '#3085d6'

  }).then((result) => {

    if (result.isConfirmed){

      window.location = "{{ url('Alumno-Eliminado/') }}/"+Aid;

    }

  })

});


$('.table').on('click', '.EliminarLibro', function(){

  Lid = $(this).attr('Lid');

  Swal.fire({

    title: '¿Está a punto de eliminar el libro?',
    icon: 'warning',
    showCancelButton: true,
    cancelButtonText: 'Cancelar',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Eliminar',
    confirmButtonColor: '#3085d6'

  }).then((result) => {

    if (result.isConfirmed){

      window.location = "EliminarLibro/"+Lid;

    }

  })

});


    //**CREAR USUARIO**//

$('[data-mask]').inputmask();

</script>

@if(session('UsuarioCreado') == 'ok')
<script type="text/javascript">
  
  Swal.fire(
   'El usuario ha sido creado',

   '',

   'success'
   )

</script>

<!--CREAR ALUMNO-->

@elseif(session('AlumnoCreado') == 'OK')

<script type="text/javascript">
  
  Swal.fire(

   'El alumno ha sido creado',
   '',
   'success'
   )

</script>

    <!--**EDITAR ALUMNO**-->


@elseif(session('AlumnoActualizado') == 'ok')

<script type="text/javascript">
  
  Swal.fire(

   'Datos guardados correctamente',
   '',
   'success'
   )

</script>



@elseif(session('AutorCreado') == 'OK')

<script type="text/javascript">
  
  Swal.fire(

   'El autor ha sido agregado',
   '',
   'success'
   )

</script>


@elseif(session('LibroCreado') == 'OK')

<script type="text/javascript">
  
  Swal.fire(

   'El libro ha sido agregado',
   '',
   'success'
   )

</script>


   <!--EDITAR USUARIO-->

@endif

<?php

$exp = explode('/', $_SERVER["REQUEST_URI"]);
$exp[3] = null;

?>

@if($exp[3] == 'Editar-Usuario')

<script type="text/javascript">
  
  $(document).ready(function(){

    $('#EditarUsuario').modal('toggle');

  })
  
</script>

@elseif($exp[3] == 'Editar-Alumno')

<script type="text/javascript">
  
  $(document).ready(function(){

    $('#EditarAlumno').modal('toggle');

  })
  
</script>

@elseif($exp[3] == 'Libro-S')

<script type="text/javascript">
  
  $(document).ready(function(){

    $('#resumen').modal('toggle');

  })

</script>

@elseif($exp[3] == 'EditarLibro')

<script type="text/javascript">
  
  $(document).ready(function(){

    $('#EditarL').modal('toggle');

  })
</script>

@endif

</body>

</html>
