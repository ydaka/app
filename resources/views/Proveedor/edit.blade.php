@extends('layouts.app')

@section('title', 'Actualización de Proveedor')
@section('title2', 'Actualización de Proveedor')
@section('content')

	<div class="row" >
		<div class="col-sm">
			<div class="card" style="margin-top: 10px;">
				<div class="card-body">
					<form method="POST" action="/proveedor/{{$proveedor->cod_proveedor}}" accept-charset="UTF-8" style="display:inline">
						@csrf			
						<input type="hidden" name="_method" value="PUT">
						<div class="form-group">
							<label for="cedula">Cedula</label>
							<input type="text" value = '{{$proveedor->cedula}}' class="form-control" name="cedula"/>
						</div>
						
						<div class="form-group">
							<label for="nombres">Nombres</label>
							<input type="text" value = '{{$proveedor->nombres}}' class="form-control" name="nombres"/>
						</div>

						<div class="form-group">
							<label for="apellidos">Apellidos</label>
							<input type="text" value = '{{$proveedor->apellidos}}' class="form-control" name="apellidos"/>
						</div>

						<div class="form-group">
							<label for="direccion">Direccion</label>
							<input type="text" value = '{{$proveedor->direccion}}' class="form-control" name="direccion"/>
						</div>

						<div class="form-group">
							<label for="telefono">Telefono</label>
							<input type="text" value = '{{$proveedor->telefono}}' class="form-control" name="telefono"/>
						</div>

						<div class="form-group">
							<label for="email">Email</label>
							<input type="text" value = '{{$proveedor->email}}' class="form-control" name="email"/>
						</div>
						
						<button type="submit" class="btn btn-primary btn-xs fa fa-save" style="margin-left: 10px"> Actualizar </button>				
					</form>
					<a href="/proveedor" class="btn btn-danger btn-xs fa fa-arrow-alt-circle-right" style="margin-left: 10px"> Cancelar </a>				
				</div>
			</div>
		</div>
	</div>

@endsection
