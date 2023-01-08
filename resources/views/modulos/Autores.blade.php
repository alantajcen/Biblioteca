@extends('bienvenida')

@section('contenido')

<div class="content-wrapper">

	<section class="content-header">

		<h1>Autores</h1>

	</section>

	<section class="content">
		
		<div class="box">

			<div class="box-body">
				@can('crear autores')
				<a href="{{ url('Agregar-Autor')}}">

					<button class="btn btn-primary">Agregar Autor</button>
					
				</a>
				@endcan
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
									@can('listar libros')
										<a href="{{('Autor-Libros/'.$autor->id)}}">
											<button class="btn btn-primary">..Libros..</button>
										</a>
									@endcan
									@can('eliminar autores')
									<form method="post" action="{{ url('Autor-Eliminado/'.$autor->id) }}">

										@csrf
										@method('delete')

										<button type="submit" class="btn btn-danger">Eliminar</button>
										
									</form>
									@endcan
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
