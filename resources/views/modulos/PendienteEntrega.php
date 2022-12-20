@extends('bienvenida')

@section('contenido')

<div class="content-wraper">
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