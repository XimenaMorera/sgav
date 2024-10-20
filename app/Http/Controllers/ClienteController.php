<?php

namespace App\Http\Controllers;
use App\Models\Cliente;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $clientes = DB::table('clientes')
        ->select('id', 'nombre', 'apellido', 'telefono', 'email', 'direccion')
        ->get();

        // Retorna la vista 'clientes.index' con los datos obtenidos
        return view('cliente.index', ['clientes' => $clientes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $clientes = DB::table('clientes')
        ->orderBy('id')
        ->get();
        return view('cliente.new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
          // Validar los datos de entrada
          $cliente = new Cliente();
          $cliente->nombre = $request->nombre;
          $cliente->apellido = $request->apellido;
          $cliente->telefono = $request->telefono;
          $cliente->direccion = $request->direccion;
          $cliente->email = $request->email;
          $cliente->save();
  
   
          $clientes = DB::table('clientes')
          ->select('id', 'nombre', 'apellido', 'telefono', 'email', 'direccion')
          ->get();
  
          // Retorna la vista 'clientes.index' con los datos obtenidos
          return view('cliente.index', ['clientes' => $clientes]);

    
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
