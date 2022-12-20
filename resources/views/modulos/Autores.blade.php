@extends('bienvenida')

@section('contenido')

<div class="content-wrapper">

	<section class="content-header">

		<h1>Autores</h1>

	</section>

	<section class="content">
		
		<div class="box">

			<div class="box-body">

				<a href="{{ url('Agregar-Autor')}}">

					<button class="btn btn-primary">Agregar Autor</button>
					
				</a>	
				<br><br>

				<table class="table table-bordered table-striped table-hover DT1">
					
					<thead>
						<tr>
							<th>No.</th>
							<th>FOTO</th>
							<th>NOMBRE DEL AUTOR</th>
							<th>Biografia</th>
							<th></th>
						</tr>
					</thead>

					<tbody>
						
						@foreach($autores as $autor)

							<tr>
								<td>{{ $autor->id }}</td>
								<td><img src="{{ url('storage/'.$autor->foto ) }}" width="100%"></td>

								<td>{{ $autor->nombre }}</td>
								<td>{{ $autor->info }}</td>

								<td>

										<a href="{{('Autor-Libros/'.$autor->id)}}">
											<button class="btn btn-primary">..Libros..</button>
										</a>

									<form method="post" action="{{ url('Autor-Eliminado/'.$autor->id) }}">

										@csrf
										@method('delete')

										<button type="submit" class="btn btn-danger">Eliminar</button>
										
									</form>
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
