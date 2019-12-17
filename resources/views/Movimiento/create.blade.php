@extends('layouts.app')

@section('title', 'Creación de Movimiento')

@section('title2', 'Nuevo Movimiento')

@section('content')

	<div class="row" >
	<div class="col-sm">
		<div class="card" style="margin-top: 10px;">
			<div class="card-body">
				<form method="POST" action="/movimiento" accept-charset="UTF-8" style="display:inline">
					@csrf		
					<div class="form-group">
						<label for="user">Usuario</label>
						<select name='cod_usuario' class = 'form-control'>
							<option value="">Seleccione uno ... </option>
							@foreach($users as $user)
								<option 
								value = '{{ $user->cod_usuario }}' {{(old('cod_usuario') == $user->cod_usuario) ? 'selected':''}}> {{ $user->nombres .' '. $user->apellidos}} 
							</option>
							@endforeach
						</select>
						{!!$errors->first('cod_usuario','<small class="form-text text-muted"> <div class="alert alert-danger" role="alert">:message </div> </small>')!!}
					</div>

					<div class="form-group">
						<label for="proveedor">Proveedor</label>
						<select name='cod_proveedor' class = 'form-control'>
							<option value="">Seleccione uno ... </option>
							@foreach($proveedores as $proveedor)
								<option 
								value = '{{ $proveedor->cod_proveedor }}' {{(old('cod_proveedor') == $proveedor->cod_proveedor) ? 'selected':''}}> {{ $proveedor->nombres .' '. $proveedor->apellidos }} 
							</option>
							@endforeach
						</select>
						{!!$errors->first('cod_proveedor','<small class="form-text text-muted"> <div class="alert alert-danger" role="alert">:message </div> </small>')!!}
					</div>

					<div class="form-group">
						<label for="producto">Producto</label>
						<select name='cod_producto' class = 'form-control'>
							<option value="">Seleccione uno ... </option>
							@foreach($productos as $producto)
								<option 
								value = '{{ $producto->cod_producto }}' {{(old('cod_producto') == $producto->cod_producto) ? 'selected':''}}> {{ $producto->descripcion }} 
							</option>
							@endforeach
						</select>
						{!!$errors->first('cod_producto','<small class="form-text text-muted"> <div class="alert alert-danger" role="alert">:message </div> </small>')!!}
					</div>

					<div class="form-group">
						<label for="asesor">Asesor</label>
						<select name='cod_asesor_e' class = 'form-control'>
							<option value="">Seleccione uno ... </option>
							@foreach($asesores as $asesor)
								<option 
								value = '{{ $asesor->cod_asesor }}' {{(old('cod_asesor_e') == $asesor->cod_asesor) ? 'selected':''}}> {{ $asesor->nombres .' '. $asesor->apellidos }} 
							</option>
							@endforeach
						</select>
						{!!$errors->first('cod_asesor_e','<small class="form-text text-muted"> <div class="alert alert-danger" role="alert">:message </div> </small>')!!}
					</div>

					<div class="form-group">
						<label for="local">Local</label>
						<select name='cod_local_e' class = 'form-control'>
							<option value="">Seleccione uno ... </option>
							@foreach($locales as $local)
								<option 
								value = '{{ $local->cod_local }}' {{(old('cod_local') == $local->cod_local) ? 'selected':''}}> {{ $local->direccion }} 
							</option>
							@endforeach
						</select>
						{!!$errors->first('cod_local','<small class="form-text text-muted"> <div class="alert alert-danger" role="alert">:message </div> </small>')!!}
					</div>

					<div class="form-group">
						<label for="fecha_entrada">Fecha Entrada</label>
						<input type="date" class="form-control" name="fecha_entrada" id="fecha_entrada" value ={{old('fecha_entrada')}}>
						{!!$errors->first('fecha_entrada','<small class="form-text text-muted"> <div class="alert alert-danger" role="alert">:message </div> </small>')!!}
					</div>
					
					<div class="form-group">
						<label for="imei">Imei</label>
						<input type="text" class="form-control" name="imei" id="imei" value ={{old('imei')}}>
						{!!$errors->first('imei','<small class="form-text text-muted"> <div class="alert alert-danger" role="alert">:message </div> </small>')!!}
					</div>

					<div class="form-group">
						<label for="observaciones">Observaciones</label>
						<input type="text" class="form-control" name="observaciones" id="observaciones" value ={{old('observaciones')}}>
						{!!$errors->first('observaciones','<small class="form-text text-muted"> <div class="alert alert-danger" role="alert">:message </div> </small>')!!}
					</div>

					<button type="submit" class="btn btn-primary btn-xs fa fa-save" style="margin-left: 10px"> Grabar </button>				
				</form>
				<a href="/movimiento" class="btn btn-danger btn-xs fa fa-arrow-alt-circle-right" style="margin-left: 10px"> Cancelar </a>				
			</div>
		</div>
		</div>
	</div>
@endsection


