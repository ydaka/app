@extends('layouts.app')

@section('title', 'Actualización de Movimiento')
@section('title2', 'Actualización de Movimiento')
@section('content')

	<div class="row" >
		<div class="col-sm">
			<div class="card" style="margin-top: 10px;">
				<div class="card-body">
					<form method="POST" action="/movimiento/{{$movimiento->cod_movimiento}}" accept-charset="UTF-8" style="display:inline">
						@csrf			
						<input type="hidden" name="_method" value="PUT">
						<div class="form-group">
							<label for="cod_proveedor">Usuario </label>
							<select name='cod_usuario' class = 'form-control'>
								@foreach($users as $user)
									@if($movimiento->cod_usuario == $user->cod_usuario)
										<option selected value = '{{ $user->cod_usuario }}'> {{ $user->nombres .' '. $user->apellidos }} </option>
									@else
										<option value = '{{ $user->cod_usuario }}'> {{ $user->nombres .' '. $user->apellidos }} </option>
									@endif
								@endforeach
							</select>
						</div>

						<div class="form-group">
							<label for="cod_proveedor">Proveedor </label>
							<select name='cod_proveedor' class = 'form-control'>
								@foreach($proveedores as $proveedor)
									@if($movimiento->cod_proveedor == $proveedor->cod_proveedor)
										<option selected value = '{{ $proveedor->cod_proveedor }}'> {{ $proveedor->nombres .' '. $proveedor->apellidos }} </option>
									@else
										<option value = '{{ $proveedor->cod_proveedor }}'> {{ $proveedor->nombres .' '. $proveedor->apellidos }} </option>
									@endif
								@endforeach
							</select>
						</div>

						<div class="form-group">
							<label for="cod_producto">Producto </label>
							<select name='cod_producto' class = 'form-control'>
								@foreach($productos as $producto)
									@if($movimiento->cod_producto == $producto->cod_producto)
										<option selected value = '{{ $producto->cod_producto }}'> {{ $producto->descripcion }} </option>
									@else
										<option value = '{{ $producto->cod_producto }}'> {{ $producto->descripcion }} </option>
									@endif
								@endforeach
							</select>
						</div>

						<div class="form-group">
							<label for="cod_asesor_e">Asesor Entrada </label>
							<select name='cod_asesor_e' class = 'form-control'>
								@foreach($asesores as $asesor)
									@if($movimiento->cod_asesor_e == $asesor->cod_asesor)
										<option selected value = '{{ $asesor->cod_asesor }}'> {{  $asesor->nombres .' '. $asesor->apellidos }} </option>
									@else
										<option value = '{{ $asesor->cod_asesor }}'> {{  $asesor->nombres .' '. $asesor->apellidos }} </option>
									@endif
								@endforeach
							</select>
						</div>
						
						<div class="form-group">
							<label for="cod_local_e">Local Entrada </label>
							<select name='cod_local_e' class = 'form-control'>
								@foreach($locales as $local)
									@if($movimiento->cod_local_e == $local->cod_local)
										<option selected value = '{{ $local->cod_local }}'> {{  $local->direccion }} </option>
									@else
										<option value = '{{ $local->cod_local }}'> {{  $local->direccion }} </option>
									@endif
								@endforeach
							</select>
						</div>

						<div class="form-group">
							<label for="fecha_entrada">Fecha Entrada</label>
							<input type="date" value = '{{$movimiento->fecha_entrada}}' class="form-control" name="fecha_entrada"/>
						</div>
						
						<div class="form-group">
							<label for="imei">Imei</label>
							<input type="text" value = '{{$movimiento->imei}}' class="form-control" name="imei"/>
						</div>
						
						<div class="form-group">
							<label for="cod_asesor_s">Asesor Salida </label>
							<select name='cod_asesor_s' class = 'form-control'>
								<option value="">Seleccione uno ... </option>
								@foreach($asesores as $asesor)
									@if($movimiento->cod_asesor_s == $asesor->cod_asesor)
										<option selected value = '{{ $asesor->cod_asesor }}'> {{  $asesor->direccion }} </option>
									@else
										<option 
											value = '{{ $asesor->cod_asesor }}' {{(old('cod_asesor_s') == $asesor->cod_asesor) ? 'selected':''}}> {{ $asesor->nombres .' '. $asesor->apellidos }} 
										</option>
									@endif
								@endforeach
							</select>
						</div>
						
						<div class="form-group">
							<label for="cod_local_s">Local Salida </label>
							<select name='cod_local_s' class = 'form-control'>
								<option value="">Seleccione uno ... </option>
								@foreach($locales as $local)
									@if($movimiento->cod_local_s == $local->cod_local)
										<option selected value = '{{ $local->cod_local }}'> {{  $local->direccion }} </option>
									@else
										<option 
											value = '{{ $local->cod_local }}' {{(old('cod_local_s') == $local->cod_local) ? 'selected':''}}> {{ $local->direccion }} 
										</option>
									@endif
								@endforeach
							</select>
						</div>

						<div class="form-group">
							<label for="fecha_salida">Fecha Salida</label>
							<input type="date" value = '{{$movimiento->fecha_salida}}' class="form-control" name="fecha_salida"/>
						</div>

						<div class="form-group">
							<label for="observaciones">Observaciones</label>
							<input type="text" value = '{{$movimiento->observaciones}}' class="form-control" name="observaciones"/>
						</div>
						
						<button type="submit" class="btn btn-primary btn-xs fa fa-save" style="margin-left: 10px"> Actualizar </button>				
					</form>
					<a href="/movimiento" class="btn btn-danger btn-xs fa fa-arrow-alt-circle-right" style="margin-left: 10px"> Cancelar </a>				
				</div>
			</div>
		</div>
	</div>

@endsection
