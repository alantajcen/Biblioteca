@extends('bienvenida')

@section('contenido')

<div class="content-wrapper">
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>INICIO </h1>
				</div>
			</div>
		</div>	
	</section>

	<section class="content">
		
		<div class="box">

			<div class="box-body">

				<div class="row">
					<div class="col-lg-3 col-xs-6">
						<div class="small-box bg-blue">
							<div class="inner">
								<h3>{{ count($prestamos) }}</h3>
								<p>Prestamos</p>
							</div>

							<div class="icon">
								<i class="fas fa-book-reader"></i>
							</div>
							<a href="{{ url('Ver-Prestamos') }}" class="small-box-footer"> Ir a Prestamos <i class="fa fa-arrow-circle-right"></i></a>
						</div>
					</div>

					<div class="col-lg-3 col-xs-6">
						<div class="small-box bg-green">
							<div class="inner">
								<h3>{{ count($libros) }}</h3>
								<p>Libros</p>
							</div>

							<div class="icon">
								<i class="fa fa-book"></i>
							</div>
							<a href="{{ url('Libros') }}" class="small-box-footer"> Ir a Libros <i class="fa fa-arrow-circle-right"></i></a>
						</div>
					</div>

					<div class="col-lg-3 col-xs-6">
						<div class="small-box bg-red">
							<div class="inner">
								<h3>{{ count($alumnos) }}</h3>
								<p>Alumnos</p>
							</div>

							<div class="icon">
								<i class="fas fa-user-graduate"></i>
							</div>
							<a href="{{ url('Alumnos') }}" class="small-box-footer"> Ver alumnos <i class="fa fa-arrow-circle-right"></i></a>
						</div>
					</div>

					<div class="col-lg-3 col-xs-6">
						<div class="small-box bg-yellow">
							<div class="inner">
								<h3>{{ count($usuarios) }}</h3>
								<p>Usuarios</p>
							</div>

							<div class="icon">
								<i class="fas fa-user-friends"></i>
							</div>
							<a href="{{ url('Usuarios') }}" class="small-box-footer"> Ver Usuarios <i class="fa fa-arrow-circle-right"></i></a>
						</div>
					</div>
				</div><br>

				<h2 style="text-align: center;" >Ejemplares Agotados:</h2>

				<table class="table table-bordered table-hover table-striped DT1">
					
					<thead>
						
						<tr>
							
							<th>Titulo</th>
							<th>Genero</th>
							<th>Autor</th>
							<th>Resumen</th>
							<th>Idioma</th>
							<th>Portada</th>
							<th>Publicación</th>
							<th>Ejemplares</th>
							

						</tr>

					</thead>

					<tbody>
						
						@foreach($libros as $libro)

						@if($libro->stock < 1)

							<tr>
								<td>{{ $libro->titulo }}</td>

								<td>{{ $libro->GENERO->nombre }}</td>

								<td>{{ $libro->AUTOR->nombre }}</td>



								<td>{{ Str::limit($libro->resumen, 200) }} <a href="{{ url('Libro-S/'.$libro->id) }}"><button class="btn btn-default btn-xs">Leer</button></a></td>


								<td>{{ $libro->idioma }}</td>


								<td><img src="{{ url('storage/'.$libro->portada) }}" width="50px"></td>


								<td>{{ $libro->fecha_publicacion }}</td>


								@if($libro->stock < 20 && $libro->stock >10 )

									<td><button class="btn btn-warning">{{ $libro->stock}}</button> </td>


								@elseif($libro->stock <= 9 )

									<td><button class="btn btn-danger">{{ $libro->stock}}</button> </td>


								@else

									<td><button class="btn btn-success">{{ $libro->stock}}</button> </td>

								@endif


							</tr>


						@endif


						@endforeach

					</tbody>

				</table>
				
			</div>

		</div>
	</section>
</div>



@endsection
