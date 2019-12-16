<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Movimiento;

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
        $movimientos = DB::table('movimientos')
            ->select('*')
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
        //
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
        $movimiento->fecha_salida     = $request->fecha_salida;
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
        return view('movimiento.edit', compact('movimiento'));
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
