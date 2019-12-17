@extends('layouts.app')

@section('title', 'Creación de Asesor')

@section('title2', 'Nuevo Asesor')

@section('content')

	<div class="row" >
	<div class="col-sm">
		<div class="card" style="margin-top: 10px;">
			<div class="card-body">
				<form method="POST" action="/asesor" accept-charset="UTF-8" style="display:inline">
					@csrf			
					<div class="form-group">
						<label for="asesor">Cedula</label>
						<input type="text" class="form-control" name="cedula" id="cedula" value ={{old('cedula')}}>
						{!!$errors->first('cedula','<small class="form-text text-muted"> <div class="alert alert-danger" role="alert">:message </div> </small>')!!}
					</div>
					
					<div class="form-group">
						<label for="asesor">Nombres</label>
						<input type="text" class="form-control" name="cedula" id="cedula" value ={{old('cedula')}}>
						{!!$errors->first('cedula','<small class="form-text text-muted"> <div class="alert alert-danger" role="alert">:message </div> </small>')!!}
					</div>

					<div class="form-group">
						<label for="asesor">Apellidos</label>
						<input type="text" class="form-control" name="cedula" id="cedula" value ={{old('cedula')}}>
						{!!$errors->first('cedula','<small class="form-text text-muted"> <div class="alert alert-danger" role="alert">:message </div> </small>')!!}
					</div>

					<div class="form-group">
						<label for="asesor">Direccion</label>
						<input type="text" class="form-control" name="cedula" id="cedula" value ={{old('cedula')}}>
						{!!$errors->first('cedula','<small class="form-text text-muted"> <div class="alert alert-danger" role="alert">:message </div> </small>')!!}
					</div>

					<div class="form-group">
						<label for="asesor">Telefono</label>
						<input type="text" class="form-control" name="cedula" id="cedula" value ={{old('cedula')}}>
						{!!$errors->first('cedula','<small class="form-text text-muted"> <div class="alert alert-danger" role="alert">:message </div> </small>')!!}
					</div>

					<div class="form-group">
						<label for="asesor">Email</label>
						<input type="text" class="form-control" name="cedula" id="cedula" value ={{old('cedula')}}>
						{!!$errors->first('cedula','<small class="form-text text-muted"> <div class="alert alert-danger" role="alert">:message </div> </small>')!!}
					</div>

					<button type="submit" class="btn btn-primary btn-xs fa fa-save" style="margin-left: 10px"> Grabar </button>				
				</form>
				<a href="/asesor" class="btn btn-danger btn-xs fa fa-arrow-alt-circle-right" style="margin-left: 10px"> Cancelar </a>				
			</div>
		</div>
		</div>
	</div>
@endsection


