<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Asesor;

class AsesorController extends Controller
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
        $asesores = DB::table('asesores')
            ->select('*')
            ->paginate(10);
        return view('asesor.index', compact('asesores'));
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
            'cedula' => 'Required',
            'nombres' => 'Required',
            'apellidos' => 'Required',
            'direccion' => 'Required',
            'telefono' => 'Required',
            'email' => 'Required'
        ]);

        $asesor = new Asesor();
        $asesor->cedula = $request->cedula;
        $asesor->nombres = $request->nombres;
        $asesor->apellidos = $request->apellidos;
        $asesor->direccion = $request->direccion;
        $asesor->telefono = $request->telefono;
        $asesor->email = $request->email;
        $asesor->save();
        return redirect()->route('asesor.index')->with('status', 'guardado');
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
        $asesor = Asesor::findOrFail($id);
        return view('asesor.edit', compact('asesor'));
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
        $asesor = Asesor::findOrFail($id);
        $asesor->fill($request->all()); //necesita que los name formulario sean iguales a los campos de tabla
        $asesor->save();
        return redirect()->route('asesor.index')->with('status', 'actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $asesor = Asesor::findOrFail($id); //busque o devuelva pero no muestre error
        $asesor->delete();
        return redirect()->route('asesor.index')->with('status', 'eliminado');
    }
}
