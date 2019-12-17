<?php
//Para pensar
namespace App\Http\Controllers;

use App\Rol_x_usuario;
use App\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class UserController extends Controller
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
        $users = DB::table('users')
            ->select('*')
            ->paginate(10);
        return view('user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles_x_usuarios = Rol_x_usuario::orderBy('rol_por_usuario')->get();
        return view('rol_x_usuario.create',compact('roles_x_usuarios'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $asesor = new User();
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
        $user = User::findOrFail($id);
        $roles_x_usuarios = Rol_x_usuario::all();
        return view('user.edit', compact('users','roles_x_usuarios'));
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
        $user = User::findOrFail($id);
        $user->fill($request->all()); //necesita que los name formulario sean iguales a los campos de tabla
        $user->save();
        return redirect()->route('user.index')->with('status', 'actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id); //busque o devuelva pero no muestre error
        $user->delete();
        return redirect()->route('user.index')->with('status', 'eliminado');
    }
}

