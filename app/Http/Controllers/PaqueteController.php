<?php

namespace App\Http\Controllers;
use App\Models\Paquete;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class PaqueteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $paquetes = DB::table('paquetes_turis')
        ->select('id', 'destino', 'descripcion', 'duracion', 'precio', 'incluye')
        ->get();

        // Retorna la vista 'clientes.index' con los datos obtenidos
        return view('paquetes.index', ['paquetes' => $paquetes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $paquetes = DB::table('paquetes_turis')
        ->orderBy('id')
        ->get();
        return view('paquetes.new');
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
        $paquete = new Paquete();
        $paquete->destino = $request->destino;
        $paquete->descripcion = $request->descripcion;
        $paquete->duracion = $request->duracion;
        $paquete->precio = $request->precio;
        $paquete->incluye = $request->incluye;
        $paquete->save();

 
        $paquetes = DB::table('paquetes_turis')
        ->select('id', 'destino', 'descripcion', 'duracion', 'precio', 'incluye')
        ->get();

        // Retorna la vista 'clientes.index' con los datos obtenidos
        return view('paquetes.index', ['paquetes' => $paquetes]);
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
