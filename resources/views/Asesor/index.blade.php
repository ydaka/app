<!--Plantilla--extencion-->
@extends('layouts.app')

@section('title', 'Listado de Asesores')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.28.2/sweetalert2.all.js"></script>

<!--Plantilla-seccion/Layouts/app.blade.php[@.yield/dinamico.usar @.section]-->
@section('title2', 'Listado de Asesores')

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
                        <a href="/asesor/create" class="btn btn-primary btn-sm" id="nuevo" data-toggle="tooltip" title="Nuevo Asesor">
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

                @foreach($asesores as $asesor)
                <tr>
                    <td>{{$asesor->cod_asesor}}</td>
                    <td>{{$asesor->nombres}}</td>
                    <td>{{$asesor->apellidos}}</td>
                    <td>{{$asesor->direccion}}</td>
                    <td>{{$asesor->telefono}}</td>
                    <td>{{$asesor->email}}</td>
                    @can('Administrador')
                    <td class="text-center">
                        <form method="POST" action="/asesor/{{$asesor->cod_asesor}}" accept-charset="UTF-8" style="display:inline">
                            @csrf
                            <!--Generacion de un token para formularios-->
                            <input name="_method" type="hidden" value="DELETE">
                            <button type="submit" class="btn btn-danger btn-sm fa fa-trash" style="margin-right: 10px"> </button>
                        </form>
                        <a href="/asesor/{{$asesor->cod_asesor}}/edit"><i class="btn btn-info btn-sm fa fa-edit"></i></a>
                    </td>
                    @endcan
                </tr>
                @endforeach
            </tbody>
        </table>
        {{$asesores->links()}}
    </div>
</div>
@endsection