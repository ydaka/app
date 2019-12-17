<!--Plantilla--extencion-->
@extends('layouts.app')

@section('title', 'Listado de Movimientos')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.28.2/sweetalert2.all.js"></script>

<!--Plantilla-seccion/Layouts/app.blade.php[@.yield/dinamico.usar @.section]-->
@section('title2', 'Listado de Movimientos')

@section('content')
<div class="card">
    <div class="card-body">
        <table id="tabla" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%" style="margin-top:10px">
            <thead>
                <tr>
                    <th>Codigo</th>
                    <th>Usuario</th>
                    <th>Proveedor</th>
                    <th>Producto</th>
                    <th>Asesor Entrada</th>
                    <th>Local Entrada</th>
                    <th>Fecha Entrada</th>
                    <th>Imei</th>
                    <th>Asesor Salida</th>
                    <th>Local Salida</th>
                    <th>Fecha Salida</th>
                    <th>Observaciones</th>
                    @can('Administrador')
                    <th class="text-center">
                        <a href="/movimiento/create" class="btn btn-primary btn-sm" id="nuevo" data-toggle="tooltip" title="Nuevo Asesor">
                            <i class="fa fa-plus" aria-hidden="true"></i>
                            Nuevo
                        </a>
                    </th>
                    @endcan
                </tr>
            </thead>
            <tbody>
                @include('common.success')
                <!--incluye otras directivas de blade(condicionales)--> 

                @foreach($movimientos as $movimiento)
                <tr>
                    <td>{{$movimiento->cod_movimiento}}</td>
                    <td>{{$movimiento->cod_usuario}}</td>
                    <td>{{$movimiento->cod_proveedor}}</td>
                    <td>{{$movimiento->cod_producto}}</td>
                    <td>{{$movimiento->cod_asesor_e}}</td>
                    <td>{{$movimiento->cod_local_e}}</td>
                    <td>{{$movimiento->fecha_entrada}}</td>
                    <td>{{$movimiento->imei}}</td>
                    <td>{{$movimiento->cod_asesor_s}}</td>
                    <td>{{$movimiento->cod_local_s}}</td>
                    <td>{{$movimiento->fecha_salida}}</td>
                    <td>{{$movimiento->observaciones}}</td>
                    @can('Administrador')
                    <td class="text-center">
                        <form method="POST" action="/movimiento/{{$movimiento->cod_movimiento}}" accept-charset="UTF-8" style="display:inline">
                            @csrf
                            <!--Generacion de un token para formularios-->
                            <input name="_method" type="hidden" value="DELETE">
                            <button type="submit" class="btn btn-danger btn-sm fa fa-trash" style="margin-right: 10px"> </button>
                        </form>
                        <a href="/movimiento/{{$movimiento->cod_movimiento}}/edit"><i class="btn btn-info btn-sm fa fa-edit"></i></a>
                    </td>
                    @endcan
                </tr>
                @endforeach
            </tbody>
        </table>
        {{$movimientos->links()}}
    </div>
</div>
@endsection