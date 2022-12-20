@extends('bienvenida')

@section('contenido')

<div class="content-wrapper">

	<section class="content-header">

		<h1>Añadir Autor</h1>

	</section>

	<section class="content">
		
		<div class="box">

			<div class="box-body">

				<form method="post" enctype="multipart/form-data">

					@csrf

					<h2>Autor:</h2>
					<input type="text" class="form-control" name="nombre">

					<h2>Foto:</h2>
					<input type="file" checked="form-control" name="foto">

					<h2>Biografia:</h2>
					<textarea name="info" style="height: 150px; width: 100%;"></textarea>	
		
					<button type="submit">Enviar</button>	

				</form>

				
				
			</div>

		</div>

	</section>

</div>

@endsection



