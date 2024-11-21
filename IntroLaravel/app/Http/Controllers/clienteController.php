<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use carbon\Carbon;
use App\Http\Requests\validadorClientes;

class clienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()

    {
        $ConsultarClientes = DB::table('clientes')->get();
        return view('clientes', compact('ConsultarClientes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('formulario');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(validadorClientes $request)
    {
        DB::table('clientes')->insert([
            'nombre' => $request->input('txtnombre'),
            'apellido' => $request->input('txtapellido'),
            'correo' => $request->input('txtcorreo'),
            'telefono' => $request->input('txttelefono'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        $usuario = $request->input('txtnombre');

        session()->flash('exito','se guardo el usuario' .$usuario);
        return to_route('rutaform');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
       $cliente = DB::table('clientes')->where('id', $id)->first();
         return view('customerUpdate', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'txtnombre' => 'required',
            'txtapellido' => 'required',
            'txtcorreo' => 'required',
            'txttelefono' => 'required'
        ]);

        DB::table('clientes')
        ->where('id', $id)
        ->update([
            'nombre' => $request->input('txtnombre'),
            'apellido' => $request->input('txtapellido'),
            'correo' => $request->input('txtcorreo'),
            'telefono' => $request->input('txttelefono'),
            'updated_at' => Carbon::now()
 
        ]);
        $usuario = $request->input('txtnombre');

        session()->flash('exito','se actualizo el usuario' .$usuario);

        return redirect()->route('rutaclientes')->with('exito', 'El cliente fue actualizado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
