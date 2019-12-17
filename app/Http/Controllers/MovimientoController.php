<?php

namespace App\Http\Controllers;

use App\Asesor;
use App\Local;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Movimiento;
use App\Producto;
use App\Proveedor;
use App\User;

class MovimientoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movimientos = DB::table('movimientos as m')
            ->join('users as u','m.cod_usuario','=','u.cod_usuario')
            ->join('proveedores as p','m.cod_proveedor','=','p.cod_proveedor')
            ->join('productos as r','m.cod_producto','=','r.cod_producto')
            ->join('asesores as q','m.cod_asesor_e','=','q.cod_asesor')
            ->join('locales as w','m.cod_local_e','=','w.cod_local')
            ->join('asesores as t','m.cod_asesor_s','=','t.cod_asesor')
            ->join('locales as y','m.cod_local_s','=','y.cod_local')
            ->select('m.cod_movimiento', 'm.cod_usuario', 'm.cod_proveedor', 'm.cod_producto', 'm.cod_asesor_e', 'm.cod_local_e', 'm.fecha_entrada', 'm.imei', 'm.cod_asesor_s', 'm.cod_local_s', 'm.fecha_salida', 'm.observaciones')
            ->paginate(10);
        return view('movimiento.index', compact('movimientos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $productos = Producto::orderBy('cod_producto')->get();
        $proveedores = Proveedor::orderBy('cod_proveedor')->get();
        $users = User::orderBy('cod_usuario')->get();
        $asesores = Asesor::orderBy('cod_asesor')->get();
        $locales = Local::orderBy('cod_local')->get();
        return view('movimiento.create',compact('locales','productos','proveedores','users','asesores'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'cod_usuario' => 'Required',
            'cod_proveedor' => 'Required',
            'cod_producto' => 'Required',
            'cod_asesor_e' => 'Required',
            'cod_local_e' => 'Required',
            'fecha_entrada' => 'Required',
            'imei' => 'Required',
            'observaciones' => 'Required'
        ]);

        $movimiento = new Movimiento();
        $movimiento->cod_usuario = $request->cod_usuario;
        $movimiento->cod_proveedor = $request->cod_proveedor;
        $movimiento->cod_producto = $request->cod_producto;
        $movimiento->cod_asesor_e = $request->cod_asesor_e;
        $movimiento->cod_local_e = $request->cod_local_e;
        $movimiento->fecha_entrada = $request->fecha_entrada;
        $movimiento->imei = $request->imei;
        $movimiento->cod_asesor_s = $request->cod_asesor_s;
        $movimiento->cod_local_s = $request->cod_local_s;
        $movimiento->fecha_salida = $request->fecha_salida;
        $movimiento->observaciones = $request->observaciones;
        $movimiento->save();
        return redirect()->route('movimiento.index')->with('status', 'guardado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $movimiento = Movimiento::findOrFail($id);
        $productos = Producto::all();
        $proveedores = Proveedor::all();
        $users = User::all();
        $asesores = Asesor::all();
        $locales = Local::all();
        return view('movimiento.edit', compact('movimiento','productos','proveedores','users','asesores','locales'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $movimiento = Movimiento::findOrFail($id);
        $movimiento->fill($request->all()); //necesita que los name formulario sean iguales a los campos de tabla
        $movimiento->save();
        return redirect()->route('movimiento.index')->with('status', 'actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $movimiento = Movimiento::findOrFail($id); //busque o devuelva pero no muestre error
        $movimiento->delete();
        return redirect()->route('movimiento.index')->with('status', 'eliminado');
    }
}
