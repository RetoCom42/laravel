<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Reservista;

class ReservistaController extends Controller
{
    public function getCounters() {
        $counters = [
            'destacamento1' => DB::table('Destacamento1')->count(),
            'destacamento2' => DB::table('Destacamento2')->count(),
            'destacamento3' => DB::table('Destacamento3')->count(),
            'destacamento4' => DB::table('Destacamento4')->count(),
            'destacamento5' => DB::table('Destacamento5')->count(),
            'planaMayor' => DB::table('PlanaMayor')->count(),
        ];

        return view('counters', compact('counters'));
    }

    public function viewDestacamento1() {
        $reservistas = DB::table('Destacamento1')->get();
        return view('destacamento1', compact('reservistas'));
    }

    public function viewDestacamento2() {
        $reservistas = DB::table('Destacamento2')->get();
        return view('destacamento2', compact('reservistas'));
    }

    public function viewDestacamento3() {
        $reservistas = DB::table('Destacamento3')->get();
        return view('destacamento3', compact('reservistas'));
    }

    public function viewDestacamento4() {
        $reservistas = DB::table('Destacamento4')->get();
        return view('destacamento4', compact('reservistas'));
    }

    public function viewDestacamento5() {
        $reservistas = DB::table('Destacamento5')->get();
        return view('destacamento5', compact('reservistas'));
    }

    public function viewPlanaMayor() {
        $reservistas = DB::table('PlanaMayor')->get();
        return view('planaMayor', compact('reservistas'));
    }

    // Métodos CRUD
    public function show($id) {
        $reservista = Reservista::find($id);
        return response()->json($reservista);
    }

    public function edit($id) {
        $reservista = Reservista::find($id);
        return view('edit', compact('reservista'));
    }

    public function destroy($id) {
        $reservista = Reservista::find($id);
        $reservista->delete();
        return response()->json(['success' => 'Registro eliminado']);
    }

    public function store(Request $request) {
        $reservista = new Reservista();
        $reservista->Unidad = $request->unidad;
        $reservista->Plantilla = $request->plantilla;
        $reservista->ESTADO = $request->estado;
        $reservista->CARGO = $request->cargo;
        $reservista->GRADO = $request->grado;
        $reservista->NOMBRE_Y_APELLIDOS = $request->nombre;
        $reservista->C_IDENTIDAD = $request->c_identidad;
        $reservista->MUNICIPIO = $request->municipio;
        $reservista->DIRECCION = $request->direccion;
        $reservista->TELEFONO = $request->telefono;
        $reservista->Preparado = $request->preparado;
        $reservista->Fecha_Preparado = $request->fecha_preparado;
        $reservista->Recorrido = $request->recorrido;
        $reservista->Fecha_Recorrido = $request->fecha_recorrido;
        $reservista->Causal = $request->causal;
        $reservista->Observaciones = $request->observaciones;
        $reservista->save();
        return response()->json(['success' => 'Registro añadido']);
    }

    public function update(Request $request, $id) {
        $reservista = Reservista::find($id);
        $reservista->Unidad = $request->unidad;
        $reservista->Plantilla = $request->plantilla;
        $reservista->ESTADO = $request->estado;
        $reservista->CARGO = $request->cargo;
        $reservista->GRADO = $request->grado;
        $reservista->NOMBRE_Y_APELLIDOS = $request->nombre;
        $reservista->C_IDENTIDAD = $request->c_identidad;
        $reservista->MUNICIPIO = $request->municipio;
        $reservista->DIRECCION = $request->direccion;
        $reservista->TELEFONO = $request->telefono;
        $reservista->Preparado = $request->preparado;
        $reservista->Fecha_Preparado = $request->fecha_preparado;
        $reservista->Recorrido = $request->recorrido;
        $reservista->Fecha_Recorrido = $request->fecha_recorrido;
        $reservista->Causal = $request->causal;
        $reservista->Observaciones = $request->observaciones;
        $reservista->save();
        return response()->json(['success' => 'Registro actualizado']);
    }
}
