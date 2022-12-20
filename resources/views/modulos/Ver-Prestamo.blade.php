@extends('bienvenida')

@section('contenido')

<div class="content-wrapper">
	<section class="content-header">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-5">
					<h3>GESTIÓN DEL PRESTAMO: ID {{ $prestamo->id }}</h3><br>

					<h4>Administrador: <b>{{$maestro->name}}</b></h4>
					<h4>Alumno: <b>{{$alumno->nombre}}</b></h4>
					<h4>Fecha: <b>{{$prestamo->fecha}}</b></h4>

				</div>

			</div>		
		</div>
	</section><br><br>

	<section class="content">
		
		<div class="box">

			<div class="box-body">

				<table class="table table-bordered table-hover table-striped DT1">
				<thead>
					<tr>
								<th>Libro</th>
								<th>Autor</th>
								<th>Portada</th>
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

								</tr>

							@endif

						@endforeach

					@endforeach
				</tbody>
			</table>

				
			</div>

		</div>
	</section>
</div>



@endsection