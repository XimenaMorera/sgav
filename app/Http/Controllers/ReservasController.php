<?php

namespace App\Http\Controllers;

use App\Models\Reserva;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ReservaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Obtener todas las reservas
        $reservas = DB::table('reservas')
            ->join('clientes', 'reservas.cliente_id', '=', 'clientes.id')
            ->join('paquetes_turis', 'reservas.paquete_id', '=', 'paquetes_turis.id')
            ->select('reservas.*', 'clientes.nombre as cliente_nombre', 'paquetes_turis.nombre as paquete_nombre')
            ->get();

        // Retornar la vista 'reserva.index' con las reservas obtenidas
        return view('reserva.index', ['reservas' => $reservas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Obtener los datos necesarios para crear una reserva
        $clientes = DB::table('clientes')->get();
        $paquetes = DB::table('paquetes_turis')->get();

        // Retornar la vista para crear una nueva reserva
        return view('reserva.new', ['clientes' => $clientes, 'paquetes' => $paquetes]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validar los datos de entrada (puedes agregar más validaciones si es necesario)
        $request->validate([
            'cliente_id' => 'required|exists:clientes,id',
            'paquete_id' => 'required|exists:paquetes_turis,id',
            'fecha_reserva' => 'required|date',
            'fecha_salida' => 'required|date',
            'cantidad_personas' => 'required|integer',
        ]);

        // Crear una nueva reserva
        $reserva = new Reserva();
        $reserva->cliente_id = $request->cliente_id;
        $reserva->paquete_id = $request->paquete_id;
        $reserva->fecha_reserva = $request->fecha_reserva;
        $reserva->fecha_salida = $request->fecha_salida;
        $reserva->cantidad_personas = $request->cantidad_personas;
        $reserva->comentarios = $request->comentarios;
        $reserva->save();

        // Redirigir a la vista de índice con las reservas actualizadas
        return redirect()->route('reservas.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Obtener la reserva por su id
        $reserva = Reserva::find($id);
        $clientes = DB::table('clientes')->get();
        $paquetes = DB::table('paquetes_turis')->get();

        // Retornar la vista de edición de la reserva
        return view('reserva.edit', ['reserva' => $reserva, 'clientes' => $clientes, 'paquetes' => $paquetes]);
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
        // Validar los datos de entrada
        $request->validate([
            'cliente_id' => 'required|exists:clientes,id',
            'paquete_id' => 'required|exists:paquetes_turis,id',
            'fecha_reserva' => 'required|date',
            'fecha_salida' => 'required|date',
            'cantidad_personas' => 'required|integer',
        ]);

        // Actualizar la reserva
        $reserva = Reserva::find($id);
        $reserva->cliente_id = $request->cliente_id;
        $reserva->paquete_id = $request->paquete_id;
        $reserva->fecha_reserva = $request->fecha_reserva;
        $reserva->fecha_salida = $request->fecha_salida;
        $reserva->cantidad_personas = $request->cantidad_personas;
        $reserva->comentarios = $request->comentarios;
        $reserva->save();

        // Redirigir a la vista de índice con las reservas actualizadas
        return redirect()->route('reservas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Eliminar la reserva por su id
        $reserva = Reserva::find($id);
        $reserva->delete();

        // Redirigir a la vista de índice
        return redirect()->route('reservas.index');
    }
}
