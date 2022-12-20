
@extends('bienvenida')

@section('contenido')

  <!-- Content Wrapper General -->
  <div class="content-wrapper">
    <!-- Content Header -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Información del Perfil</h1>
          </div>
        </div>
      </div>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!--Imagen de perfil -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">

                        @if(auth()->user()->foto == "")

                        <img src="{{ url('storage/defecto.png') }}" width="100px" height="100px" >

                         @else

                        <img src="{{ url('storage/'.auth()->user()->foto) }}" width="100px" height="100px">

                         @endif
                  </div>

                        <h3 class="profile-username text-center">{{auth()->user()->name}}</h3>

                        <p class="text-muted text-center">{{auth()->user()->documento}}</p>

                  <ul class="list-group list-group-unbordered mb-3">
                    <li class="list-group-item" style="text-align: center;">
                      <b>Bienvenido</b>
                    </li>
                  </ul>

            
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="btn btn-primary btn-block">Salir</a>

                <a href="{{ url('Inicio') }}" class="btn btn-primary btn-block"><b>Volver</b></a>

              </div>
              <!-- /.card-body -->
            </div>
 
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                      <li class="nav-item"><a class="nav-link active" href="#datos" data-toggle="tab">Mi información</a></li>
                  <li class="nav-item"><a class="nav-link" href="#cerrar" data-toggle="tab">Ocultar</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="datos">
                    <form class="form-horizontal" method="post" enctype="multipart/form-data">
                          @csrf

                          @method('put')
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Nombre</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="name" value="{{auth()->user()->name}}">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" name="email" value="{{auth()->user()->email}}">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">Matrícula</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="documento" value="{{auth()->user()->documento}}">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputSkills" class="col-sm-2 col-form-label">Contraseña</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="passwordN" value="">
                          <input type="hidden" name="password" value="{{auth()->user()->password}}">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">Foto perfil</label>
                        <div class="col-sm-10">
                         <input type="file" class="form-control form-control-lg" name="fotoPerfil">
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox"> Esta seguro de <a href="#">cambiar su información</a>
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                            <button type="submit" class="btn btn-danger">Guardar</button>
                        </div>
                      </div>
                    </form>

                  </div>
                  <div class="tab-pane" id="cerrar">
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

  @endsection