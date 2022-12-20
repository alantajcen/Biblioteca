@extends('bienvenida')

@section('contenido')

<div class="content-wrapper">
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Generos bibliograficos</h1>
				</div>
				<!--form method="post">
					@csrf
					<div class="col-md-3 col-xs-12">
						<input type="text" class="form-control" name="nombre" placeholder="Ingresar Nuevo Género"> <button class="btn btn-light" type="submit">Agregar +</button>
					</div>
				</form-->
			</div>
		</div>	
	</section>

	<section class="content">	
		<div class="row">
			<div class="col-md-6">
				<div class="card card-secondary">
					<div class="card-header">
						<h3 class="card-title">Agregar</h3>
						    <div class="card-tools">
	                			<button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse"><i class="fas fa-minus"></i>
	                			</button>
              				</div>
            		</div>

            		<div class="card-body">
              			<div class="form-group">
              			<form method="post">
						@csrf
							<label for="inputEstimatedBudget">Ingresar nuevo genero</label>
				
							<input type="text" class="form-control" name="nombre" placeholder="Novela, Cientificos, Biog..."><br>
							<button class="btn btn-primary" type="submit">Agregar +</button>
						</form>
              			</div> 
					</div>
				</div>	
			</div>
			<div class="col-md-6">
				<div class="card card-primary">
					<div class="card-header">
						<h3 class="card-title">Lista de generos</h3>

						<div class="card-tools">
						 	<button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  				<i class="fas fa-minus"></i>
                  			</button>
                  		</div>
                  	</div>

				<div class="card-body">

				@foreach($generos as $genero)

					<div class="row">
						<div class="col">
							<form method="post" action="{{ url('Actualizar-Genero/'.$genero->id) }}">
								@csrf
								@method('put')

								<input type="text" class="form-control" name="nombre" value="{{ $genero->nombre }}">
							</form>
						</div>

							
							<div class="col">
								<a href="{{url('Genero-Libros/'.$genero->id) }}"><button type="button" class="btn btn-info">Ver Libros <i class="fas fa-eye"></i></button></a>

								<button class="btn btn-success" type="submit"><i class="fa fa-edit"></i> </button>

								<a href="{{ url('Genero-Eliminado/'.$genero->id) }}"><button class="btn btn-danger" type="button"><i class="fa fa-trash"></i></button></a>
							</div>
							<br><br>

			

					</div>

				@endforeach
				</div>
				</div>
			</div>
		</div>
	</section>

</div>


@endsection
