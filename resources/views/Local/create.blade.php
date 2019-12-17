@extends('layouts.app')

@section('title', 'Creación de Local')

@section('title2', 'Nuevo Local')

@section('content')

	<div class="row" >
	<div class="col-sm">
		<div class="card" style="margin-top: 10px;">
			<div class="card-body">
				<form method="POST" action="/local" accept-charset="UTF-8" style="display:inline">
					@csrf
					<div class="form-group">
						<label for="direccion">Direccion</label>
						<input type="text" class="form-control" name="direccion" id="direccion" value ={{old('direccion')}}>
						{!!$errors->first('direccion','<small class="form-text text-muted"> <div class="alert alert-danger" role="alert">:message </div> </small>')!!}
					</div>

					<div class="form-group">
						<label for="telefono">Telefono</label>
						<input type="text" class="form-control" name="telefono" id="telefono" value ={{old('telefono')}}>
						{!!$errors->first('telefono','<small class="form-text text-muted"> <div class="alert alert-danger" role="alert">:message </div> </small>')!!}
					</div>

					<button type="submit" class="btn btn-primary btn-xs fa fa-save" style="margin-left: 10px"> Grabar </button>				
				</form>
				<a href="/local" class="btn btn-danger btn-xs fa fa-arrow-alt-circle-right" style="margin-left: 10px"> Cancelar </a>				
			</div>
		</div>
		</div>
	</div>
@endsection


