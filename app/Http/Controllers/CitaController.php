<?php

namespace App\Http\Controllers;

use App\Models\Cita;
use App\Models\Medico;
use App\Models\Paciente;
use Illuminate\Http\Request;

class CitaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $citas = Cita::all();
        return view('citas.index', ['citas' => $citas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('citas.create', ['medicos' => Medico::all()], ['pacientes' => Paciente::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'medico_id' => 'required',
            'paciente_id' => 'required',
            'fecha_a' => 'required',
        ]);

        $cita = new Cita();
        $cita->medico_id = $request->input('medico_id');
        $cita->paciente_id = $request->input('paciente_id');
        $cita->fecha_a = $request->input('fecha_a');
        $cita->save();

        return view("medicos.message", ['msg' => 'Registro Guardado']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Cita $cita)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cita $cita)
    {
        $medicos = Medico::all();
        $pacientes = Paciente::all();
        return view('citas.edit', ['cita' => $cita, 'medicos' => $medicos, 'pacientes' => $pacientes]);
    }
    
    public function update(Request $request, Cita $cita)
    {
        $request->validate([
            'medico_id' => 'required',
            'paciente_id' => 'required',
            'fecha_a' => 'required',
        ]);

        $cita->medico_id = $request->input('medico_id');
        $cita->paciente_id = $request->input('paciente_id');
        $cita->fecha_a = $request->input('fecha_a');
        $cita->save();

        return view("medicos.message", ['msg' => 'Registro Actualizado']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cita $cita)
    {
        $cita->delete();

        return redirect("citas");
    }
}
