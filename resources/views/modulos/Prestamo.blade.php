@extends('bienvenida')

@section('contenido')

<div class="content-wrapper">
	<section class="content-header">
		<div class="container-fluid">
			<div class="row">	
				<div class="col-sm-5">
					<h3>GESTIÓN DEL PRESTAMO: ID {{ $prestamo->id }}</h3><br>

					<h4>Administrador: <b>{{$maestros->name}}</b></h4>
					<h4>Alumno: <b>{{$alumnos->nombre}}</b></h4>
					<h4>Fecha: <b>{{$prestamo->fecha}}</b></h4>

					<br>
					<form method="post" action="{{ url('FinalizarPrestamo') }}">
						@csrf

						<input type="hidden" name="id" value="{{ $prestamo->id }}">

						<button type="submit" class="btn btn-success">Finalizar</button>
						
					</form>
				</div>
			</div><br><br>

				<div class="col-sm-12">
					<table class="table table-hover table striped table-bordered DT2">
						<thead>
							<tr>

								<th>Titulo</th>
								<th>Genero</th>
								<th>Autor</th>
								<th>Portada</th>
								<th>Almacén</th>
								<th></th>

							</tr>
						</thead>

						<tbody>
							
							@foreach($libros as $libro)

								@if($libro->stock > 0)
								<tr>

									<td>{{ $libro->titulo }}</td>
									<td>{{ $libro->GENERO->nombre }}</td>
									<td>{{ $libro->AUTOR->nombre }}</td>
									<td><img src="{{url('storage/'.$libro->portada)}}" width="50px"></td>

									@if($libro->stock < 20 && $libro->stock >10 )

									<td><button class="btn btn-warning">{{ $libro->stock}}</button> </td>


								@elseif($libro->stock <= 9 )

									<td><button class="btn btn-danger">{{ $libro->stock}}</button> </td>


								@else

									<td><button class="btn btn-success">{{ $libro->stock}}</button> </td>

								@endif


									<td>
										<form method="post">
											@csrf

											<input type="hidden" name="id_prestamo" value="{{$prestamo->id}}">

											<input type="hidden" name="id_libro" value="{{$libro->id}}">

											<input type="hidden" name="costo" value="{{$libro->costo}}">

											<input type="hidden" name="stock" value="{{$libro->stock}}">


											<button type="submit" class="btn btn-success">Agregar</button>

										</form>
									</td>
									</tr>

								@endif

							@endforeach

						</tbody>


					</table>
				</div>	
		</div>
	</section>

	<!--<br><br>

	<section class="content">
		
		<div class="box">

			<div class="box-body">

				<table class="table table-bordered table-hover table-striped DT1">
				<thead>
					<tr>
								<th>Libro</th>
								<th>Autor</th>
								<th>Portada</th>
								<th></th>
					</tr>
				</thead>

				<tbody>
					
					@foreach($librosPrestamo as $LP)

						@foreach($libros as $i)

							@if($i->id == $LP->id_libro)

								<tr>
									
									<td>{{$i->titulo}}</td>
									<td>{{$i->AUTOR->nombre}}</td>
									<td><img src="{{url('storage/'.$i->portada)}}" width="50px"></td>

									<td>
										<form method="post" action="{{ url('Quitar-Libro-Prestamo/'.$prestamo->id) }}">
											@csrf
											<input type="hidden" name="id" value="{{ $LP->id}}">
											<input type="hidden" name="id_libro" value="{{ $i->id}}">
											<input type="hidden" name="stock" value="{{ $i->stock}}">
											<button type="submit" class="btn btn-danger">Eliminar</button>
										</form>
									</td>
								</tr>

							@endif

						@endforeach

					@endforeach
				</tbody>
			</table>

				
			</div>

		</div>
	</section-->
</div>



@endsection
