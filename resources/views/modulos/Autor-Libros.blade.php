@extends('bienvenida')

@section('contenido')

<div class="content-wrapper">

	<section class="content-header">

		<h1>Ver libros del autor {{$autor->nombre}}</h1>

	</section>

	<section class="content">
		
		<div class="box">

			<div class="box-header">

				<a href="{{ url('Autores') }}">
					
					<button class="btn btn-primary">Volver</button>
				</a>
				
			</div>
			<br><br>

			<div class="box-body">

				<table class="table table-bordered table-hover table-striped DT1">
					
					<thead>
						
						<tr>
							
							<th>Titulo</th>
							<th>Genero</th>
							<th>Resumen</th>
							<th>Idioma</th>
							<th>Portada</th>
							<th>Publicación</th>
							<th>Almacén</th>
							<th></th>
							

						</tr>

					</thead>

					<tbody>
						
						@foreach($libros as $libro)

							<tr>
								<td>{{ $libro->titulo }}</td>

								<td>{{ $libro->GENERO->nombre }}</td>



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


									<td>
								
								<a href="{{ url('EditarLibro/'.$libro->id) }}">


								<button class="btn btn-success"><i class="fa fa-edit"></i></button>
									
								</a>


								<button class="btn btn-danger EliminarLibro" Lid="{{ $libro->id }}"><i class="fa fa-trash"></i></button>
							</td>

							</tr>

						@endforeach

					</tbody>

				</table>
				
			</div>

		</div>

	</section>

</div>




@endsection
