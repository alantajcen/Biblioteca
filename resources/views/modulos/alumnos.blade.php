@extends('bienvenida')

@section('contenido')

<div class="content-wrapper">

	<section class="content-header">

		<h1>Gestor de alumnos</h1>

	</section>

	<section class="content">
		
		<div class="box">

			<div class="box-header">
				<button class="btn btn-primary" data-toggle="modal" data-target="#CrearAlumno">Nuevo Alumno</button>
				
			</div>

			<div class="box-body">
				<br><br>

				<table class="table table-bordered table-striped table-hover DT1">

					<thead>
						<tr>
							<th>ALUMNO</th>
							<th>DOCUMENTO</th>
							<th>GRADO</th>
							<th>GRUPO</th>
							<th>DIRECCIÓN</th>
							<th>TELEFONO</th>
							<th></th>
						</tr>
					</thead>

					<tbody>
						
						@foreach($alumnos as $alumno)

							<tr>

								<td>{{ $alumno->nombre}}</td>
								<td>{{ $alumno->documento}}</td>
								<td>{{ $alumno->grado}}</td>
								<td>{{ $alumno->grupo}}</td>
								<td>{{ $alumno->direccion}}</td>
								<td>{{ $alumno->telefono}}</td>
								<td>
										<a href="{{ url('Editar-Alumno/'.$alumno->id) }}">

											<button class="btn btn-success"><i class="fa fa-edit"></i></button>
										</a>

									<button class="btn btn-danger AlumnoEliminado" Aid="{{$alumno->id}}" Alumno="{{ $alumno->nombre }}"><i class="fa fa-trash"></i></button>
								</td>

							</tr>

						@endforeach

					</tbody>
					

				</table>
				
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

<?php

$exp = explode('/', $_SERVER["REQUEST_URI"]);

?>

@if($exp[3] == "Editar-Alumno")

	<div class="modal fade" id="EditarAlumno">
	
	<div class="modal-dialog">

		<div class="modal-content">

			<form method="post" action="{{ url('actualizarA/'.$alum->id)}}">
				
				@csrf
				@method('put')

				<div class="modal-body">

					<div class="box-body"> 
					
						<div class="form-group">
							<h2>Nombre:</h2>
							<input type="text" class="form-control input-lg" name="nombre" required="" value="{{ $alum->nombre }}">
						</div>

						<div class="form-group">
							<h2>Documento:</h2>
							<input type="text" class="form-control input-lg" name="documento" required="" value="{{ $alum->documento }}">
						</div>

						<div class="form-group">
							<h2>Grado:</h2>
							<select type="text" class="form-control input-lg" name="grado" required="">

								<option value="{{ $alum->grado }}">{{ $alum->grado }}</option>
							    <option value="1">1°</option>
							    <option value="2">2°</option>
							    <option value="3">3°</option>
						    </select>
						</div>

						<div class="form-group">
							<h2>Grupo:</h2>
							<select type="text" class="form-control input-lg" name="grupo" required="">
								<option value="{{ $alum->grupo }}">{{ $alum->grupo }}</option>
							    <option value="A">"A"</option>
							    <option value="B">"B"</option>
						    </select>

						</div>

						<div class="form-group">
							<h2>Dirección:</h2>
							<input type="text" class="form-control input-lg" name="direccion" required="" value="{{ $alum->direccion }}">
						</div>

						<div class="form-group">
							<h2>Telefono:</h2>
							<input type="text" class="form-control input-lg" data-inputmask="'mask': '+(99) 999-9999999'" data-mask name="telefono" required="" value="{{ $alum->telefono }}">
						</div>

					</div>
				</div>

				<div class="modal-footer">
					
					<button type="submit" class="btn btn-primary">Guardar cambios</button>
					<button type="submit" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
				</div>

			</form>
		</div>
	</div>

	</div>
@endif


@endsection