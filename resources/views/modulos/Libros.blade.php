@extends('bienvenida')

@section('contenido')

<div class="content-wrapper">

	<section class="content-header">

		<h1>Libros en la Biblioteca</h1>

	</section>

	<section class="content">
		
		<div class="box">

			<div class="box-header">
				@can('crear libros')
				<button class="btn btn-primary" data-toggle="modal" data-target="#AgregarLibro">Agregar Libro</button>
				@endcan
			</div>
			<br><br>

			<div class="box-body">

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
							<th></th>
							

						</tr>

					</thead>

					<tbody>
						
						@foreach($libros as $libro)

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



								<td>
									@can('editar libros')
									<a href="{{ url('EditarLibro/'.$libro->id) }}">
									<button class="btn btn-success"><i class="fa fa-edit"></i></button></a>
									@endcan
									@can('eliminar libros')
									<button class="btn btn-danger EliminarLibro" Lid="{{ $libro->id }}"><i class="fa fa-trash"></i></button>
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


<div class="modal fade" id="AgregarLibro">
	
	<div class="modal-dialog">

		<div class="modal-content">

			<form method="post" enctype="multipart/form-data">
				
			    @csrf

				<div class="modal-body">

					<div class="box-body"> 

						<div class="form-group">
						 <h2>Titulo:</h2>
							<div class="input-group">
                    			<div class="input-group-prepend">
                      				<span class="input-group-text"><i class="far fa-bookmark"></i></span>
                    			</div>
								<input type="text" class="form-control input-lg" name="titulo" required="">
							</div>
						</div>

					
						<div class="form-group">
							<h2>Género:</h2>
							<select name="id_genero" class="form-control input-lg"  required="">

								<option value="">Seleccionar...</option>

								@foreach($generos as $genero)

									<option value="{{ $genero->id }}">{{ $genero->nombre}}</option>

								@endforeach
							   
						    </select>

						</div>

						<div class="form-group">
							<h2>Autor:</h2>
							<select name="id_autor" class="form-control input-lg" required="">

								<option value="">Seleccionar...</option>

								@foreach($autores as $autor)

									<option value="{{ $autor->id }}">{{ $autor->nombre}}</option>

								@endforeach							   
						    </select>

						</div>

						<div class="form-group">
							<h2>Resumen:</h2>
							<textarea class="form-control" name="resumen" style="height: 100px" required=""></textarea>
						</div>


						<div class="form-group">
							<h2>Idioma:</h2>
							<select type="text" class="form-control input-lg" name="idioma" required="">
								<option value="">Seleccionar...</option>
							    <option value="Español">Español</option>
							    <option value="Ingles">Inglés</option>
							    <option value="Tutunaku">Tutunakú</option>
						    </select>
						</div>

						<div class="form-group">
							<h2>Portada:</h2>
							<input type="file" class="form-control input-lg" name="portada" required="">
						</div>

						<div class="form-group">
							<h2>Fecha de Publicación:</h2>
							<div class="input-group">
							     <div class="input-group-prepend">
								     <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
							     </div>	
							     <input type="text" class="form-control" name="fecha_publicacion" data-inputmask-alias="datetime" data-inputmask-inputformat="mm/dd/yyyy" data-mask>
							</div>
						</div>	

						
						<div class="form-group">
							<h2>Stock:</h2>
							<div class="input-group">
							     <div class="input-group-prepend">
								 	 <span class="input-group-text"><i class="far fa-sticky-note"></i></span>
								 </div>
								<input type="number" class="form-control input-lg" name="stock" required="">
							</div>	
						</div>

	

					</div>				

				</div>

				<div class="modal-footer">
					
					<button type="submit" class="btn btn-primary">Crear</button>
					<button type="submit" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
				</div>
				

			</form>
		</div>
	</div>
</div>

@if(Route::is('libros.show'))

<div class="modal fade" id="resumen">
	
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-body">
				<h2>Resumen</h2>
				<p>{{ $resumen->resumen }}</p>
			</div>

			<div class="modal-footer">
				<button class="btn btn-danger" data-dismiss=modal>Cerrar</button>
			</div>
		</div>
	</div>
</div>



@elseif(Route::is('libros.edit'))

	<div class="modal fade" id="EditarL">
		
		<div class="modal-dialog">

			<div class="modal-content">

				<form method="post" enctype="multipart/form-data" action="{{url('Libro-Act/'.$libroE->id)}}">
					
				    @csrf
				    @method('put')

					<div class="modal-body">

						<div class="box-body"> 

							<div class="form-group">
							 <h2>Titulo:</h2>
								<div class="input-group">
	                    			<div class="input-group-prepend">
	                      				<span class="input-group-text"><i class="far fa-bookmark"></i></span>
	                    			</div>
									<input type="text" class="form-control input-lg" name="titulo" value="{{ $libroE->titulo }}" required="">
								</div>
							</div>

						
							<div class="form-group">
								<h2>Género:</h2>
								<select name="id_genero" class="form-control input-lg"  required="">

									<option value="{{ $libroE->id_genero }}">{{ $libroE->GENERO->nombre}}</option>

									@foreach($generos as $genero)

										<option value="{{ $genero->id }}">{{ $genero->nombre}}</option>

									@endforeach
								   
							    </select>

							</div>

							<div class="form-group">
								<h2>Autor:</h2>
								<select name="id_autor" class="form-control input-lg" required="">

									<option value="{{ $libroE->id_autor }}">{{ $libroE->AUTOR->nombre }}</option>

									@foreach($autores as $autor)

										<option value="{{ $autor->id }}">{{ $autor->nombre}}</option>

									@endforeach							   
							    </select>

							</div>

							<div class="form-group">
								<h2>Resumen:</h2>
								<textarea class="form-control" name="resumen" style="height: 100px" required="">{{ $libroE->resumen }}></textarea>
							</div>


							<div class="form-group">
								<h2>Idioma:</h2>
								<select type="text" class="form-control input-lg" name="idioma" required="">
									<option value="{{ $libroE->idioma }}">{{ $libroE->idioma }}</option>
								    <option value="Español">Español</option>
								    <option value="Ingles">Inglés</option>
								    <option value="Tutunaku">Tutunakú</option>
							    </select>
							</div>

							<div class="form-group">
								<h2>Portada:</h2>
								<input type="file" class="form-control input-lg" name="portadaN">
								<img src="{{ url('storage/'.$libroE->portada)}}" width="300px">
							</div>

							<div class="form-group">
								<h2>Fecha de Publicación:</h2>
								<div class="input-group">
								     <div class="input-group-prepend">
									     <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
								     </div>	
								     <input type="text" class="form-control" name="fecha_publicacion" data-inputmask-alias="datetime" data-inputmask-inputformat="mm/dd/yyyy" data-mask value="{{ $libroE->fecha_publicacion }}">
								</div>
							</div>	

							
							<div class="form-group">
								<h2>Stock:</h2>
								<div class="input-group">
								     <div class="input-group-prepend">
									 	 <span class="input-group-text"><i class="far fa-sticky-note"></i></span>
									 </div>
									<input type="number" class="form-control input-lg" name="stock" required="" value="{{ $libroE->stock }}">
								</div>	
							</div>


							<!--div class="form-group">
								<h2>Costo:</h2>
								<div class="input-group">
								     <div class="input-group-prepend">
									 	 <span class="input-group-text"><i class="fas fa-dollar-sign"></i></span>
									 </div>	
									<input type="text" class="form-control input-lg" name="costo" required="" value="{{ $libroE->costo }}">
								</div>	
							</div-->	

						</div>				

					</div>

					<div class="modal-footer">
						
						<button type="submit" class="btn btn-success">Guardar cambios</button>
						<button type="submit" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
					</div>
					

				</form>
			</div>
		</div>
	</div>


@endif


@endsection
