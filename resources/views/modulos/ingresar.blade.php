@extends('estilologin')

@section('content')


<div class="login-box">
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="" class="h1"><b>BIBLIOTECA</b></a>
    </div>
  <!-- /.login-logo -->
    <div class="card-body">
      <p class="login-box-msg">Estimado usuario por favor ingrese los siguientes datos.</p>

      <form action="{{route('login') }}" method="post">

      	@csrf

        <div class="input-group mb-3">
          <input type="email" name="email" class="form-control" placeholder="Correo" style="font-family:" value="{{ old('email') }}" required="">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div> 
        </div>

          @error('email')

          <div class="alert alert-danger">Error en los datos</div>

          @enderror

        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Contraseña">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <br>
        <div class="row">     
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block"><h3>Iniciar sesión</h3></button>
          </div>
          <!-- /.col -->
        </div>
      </form>

   
     

    
    </div>
    <!-- /.login-card-body -->
  </div>

</div>





@endsection