@extends('bienvenida')

@section('contenido')

<div class="content-wrapper">
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>PRESTAMOS FINALIZADOS </h1>
				</div>
			</div>
		</div>	
	</section>

	<section class="content">
		
		<div class="box">

			<div class="box-body">


				<table class="table table-bordered table-striped table-hover DT1">
					
					<thead>
						<tr>
							<th>No.</th>
							<th>Alumno</th>
							<th>Administrador</th>
							<th>Fecha</th>
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

								<a href="{{ url('Ver-Prestamo/'.$prestamo->id) }}">
									<button class="btn btn-primary">Ver</button>
								</a>

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