@extends('layouts.app')

@section('title', 'Actualización de Usurios')
@section('title2', 'Actualización de Usurios')
@section('content')

	<div class="row" >
		<div class="col-sm">
			<div class="card" style="margin-top: 10px;">
				<div class="card-body">
					<form method="POST" action="/user/{{$user->cod_usurio}}" accept-charset="UTF-8" style="display:inline">
						@csrf			
						<input type="hidden" name="_method" value="PUT">
						<div class="form-group">
							<label for="cedula">Cedula</label>
							<input type="text" value = '{{$user->cedula}}' class="form-control" name="cedula"/>
						</div>
						
						<div class="form-group">
							<label for="nombres">Nombres</label>
							<input type="text" value = '{{$user->nombres}}' class="form-control" name="nombres"/>
						</div>

						<div class="form-group">
							<label for="apellidos">Apellidos</label>
							<input type="text" value = '{{$user->apellidos}}' class="form-control" name="apellidos"/>
						</div>

						<div class="form-group">
							<label for="direccion">Direccion</label>
							<input type="text" value = '{{$user->direccion}}' class="form-control" name="direccion"/>
						</div>

						<div class="form-group">
							<label for="telefono">Telefono</label>
							<input type="text" value = '{{$user->telefono}}' class="form-control" name="telefono"/>
						</div>

						<div class="form-group">
							<label for="email">Email</label>
							<input type="text" value = '{{$user->email}}' class="form-control" name="email"/>
						</div>
						
						<div class="form-group">
							<label for="password">Contraseña</label>
							<input type="password" value = '{{$user->password}}' class="form-control" name="password"/>
						</div>

						<button type="submit" class="btn btn-primary btn-xs fa fa-save" style="margin-left: 10px"> Actualizar </button>				
					</form>
					<a href="/user" class="btn btn-danger btn-xs fa fa-arrow-alt-circle-right" style="margin-left: 10px"> Cancelar </a>				
				</div>
			</div>
		</div>
	</div>

@endsection
