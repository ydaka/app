<!--Plantilla--extencion-->
@extends('layouts.app')

@section('title', 'Listado de Proveedores')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.28.2/sweetalert2.all.js"></script>

<!--Plantilla-seccion/Layouts/app.blade.php[@.yield/dinamico.usar @.section]-->
@section('title2', 'Listado de Proveedores')

@section('content')
<div class="card">
    <div class="card-body">
        <table id="tabla" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%" style="margin-top:10px">
            <thead>
                <tr>
                    <th>Codigo</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Direccion</th>
                    <th>Telefono</th>
                    <th>Email</th>
                    @can('Administrador')
                    <th class="text-center">
                        <a href="/proveedor/create" class="btn btn-primary btn-sm" id="nuevo" data-toggle="tooltip" title="Nuevo Asesor">
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

                @foreach($proveedores as $proveedor)
                <tr>
                    <td>{{$proveedor->cod_proveedor}}</td>
                    <td>{{$proveedor->nombres}}</td>
                    <td>{{$proveedor->apellidos}}</td>
                    <td>{{$proveedor->direccion}}</td>
                    <td>{{$proveedor->telefono}}</td>
                    <td>{{$proveedor->email}}</td>
                    @can('Administrador')
                    <td class="text-center">
                        <form method="POST" action="/proveedor/{{$proveedor->cod_proveedor}}" accept-charset="UTF-8" style="display:inline">
                            @csrf
                            <!--Generacion de un token para formularios-->
                            <input name="_method" type="hidden" value="DELETE">
                            <button type="submit" class="btn btn-danger btn-sm fa fa-trash" style="margin-right: 10px"> </button>
                        </form>
                        <a href="/proveedor/{{$proveedor->cod_proveedor}}/edit"><i class="btn btn-info btn-sm fa fa-edit"></i></a>
                    </td>
                    @endcan
                </tr>
                @endforeach
            </tbody>
        </table>
        {{$proveedores->links()}}
    </div>
</div>
@endsection