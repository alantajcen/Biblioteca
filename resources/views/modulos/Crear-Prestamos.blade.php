@extends('bienvenida')

@section('contenido')

<div class="content-wrapper">
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Control de Prestamos Bibliograficos </h1>
				</div>
			</div>
		</div>	
	</section>

	<section class="content">
		<div class="container-fluid">
			@can('crear prestamos')
			<div class="row">	
				<div class="col-md-4"><br>
					
					<form method="post">
						@csrf
						<select class="form-control inpun-lg" id="select2" name="id_alumno" required="">
							<option value="">Seleccione el Alumno</option>
							@foreach($alumnos as $alumno)

							<option value="{{ $alumno->id}}">{{$alumno->nombre}} - {{$alumno->documento}}</option>

							@endforeach
						</select>

						<?php

						date_default_timezone_set('America/Mexico_City');

						$time = time();

						$hoy = date("d/m/Y");

						$hora = date("H:i", $time);

						echo '<input type="hidden" name="fecha" value="'.$hoy.' - '.$hora.'">'

						?>

						<br><br>
						
						<button type="submit" class="btn btn-primary">Crear</button>
						
					</form>
				</div>
				@can('crear alumno')
				<div class="col-md-4"><br>
					<button class="btn btn-success" data-toggle="modal" data-target="#CrearAlumno">Añadir Alumno</button>
				</div>
				@endcan
			</div>
			@endcan

				<div class="box">
					<div class="box-body">
						<br>

						<table class="table table-bordered table-hover table-striped DT1">
						<thead>
								<tr>
									<th>ID</th>
									<th>Alumno</th>
									<th>Usuario Prestador</th>
									<th>Fecha de préstamo</th>
									<th></th>
									<th></th>
								</tr>
						</thead>

						<tbody>
						
						@foreach($prestamos as $prestamo)

							<tr>
								<td>{{ $prestamo->id }}</td>
								<td>{{ $prestamo->ALUMNO->nombre }}</td>
								<td>{{ $prestamo->MAESTRO->name }}</td>
								<td>{{ $prestamo->fecha }}</td>

								
								<td>
									@can('ver prestamos')
									<a href="{{ url('Ver-Prestamo/'.$prestamo->id) }}">
									<button class="btn btn-primary">Ver Prestamo</button>
									</a>
									@endcan
								</td>
								
								<td>
									@can('crear prestamos')
									<a href="{{url('Prestamo/'.$prestamo->id)}}">
										<button class="btn btn-primary">Añadir Prestamo</button>
									</a>
									@endcan

								</td>
							</tr>
							
						@endforeach

						</tbody>
						</table>	
							
					</div>
				</div>
		</div>
	</section>

</div>

<div class="modal fade" id="CrearAlumno">
	
	<div class="modal-dialog">

		<div class="modal-content">

			<form method="post" action="">
				
				@csrf

				<div class="modal-body">

					<div class="box-body"> 
					
						<div class="form-group">
							<h2>Nombre:</h2>
							<input type="text" class="form-control input-lg" name="nombre" required="">
						</div>

						<div class="form-group">
							<h2>Documento:</h2>
							<input type="text" class="form-control input-lg" name="documento" required="">
						</div>

						<div class="form-group">
							<h2>Grado:</h2>
							<select type="text" class="form-control input-lg" name="grado" required="">
								<option value="">Seleccionar...</option>
							    <option value="1">1°</option>
							    <option value="2">2°</option>
							    <option value="3">3°</option>
						    </select>
						</div>

						<div class="form-group">
							<h2>Grupo:</h2>
							<select type="text" class="form-control input-lg" name="grupo" required="">
								<option value="">Seleccionar...</option>
							    <option value="A">"A"</option>
							    <option value="B">"B"</option>
						    </select>

						</div>

						<div class="form-group">
							<h2>Dirección:</h2>
							<input type="text" class="form-control input-lg" name="direccion" required="">
						</div>

						<div class="form-group">
							<h2>Telefono:</h2>
							<input type="text" class="form-control input-lg" data-inputmask="'mask': '+(99) 999-9999999'" data-mask name="telefono" required="">
						</div>

					</div>
				</div>

				<div class="modal-footer">
					
					<button type="submit" class="btn btn-primary">Crear</button>
					<button type="submit" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
				</div>

			</form>
		</div>
	</div>

</div>




@endsection
