<?php

namespace App\Http\Controllers;

use App\Models\Cita;
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

        $horario = new Horario();
        $horario->medico_id = $request->input('medico_id');
        $horario->paciente_id = $request->input('paciente_id');
        $horario->fecha_a = $request->input('fecha_a');
        $horario->save();

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
        $cita = Cita::find($id);
        $medico = Medico::all();
        $paciente = Paciente::all();
        return view('cita$citas.edit', ['cita' => $cita, 'medico' => $medico, 'paciente' => $paciente]);
    }
    
    public function update(Request $request, Cita $cita)
    {
        $request->validate([
            'medico_id' => 'required',
            'paciente_id' => 'required',
            'fecha_a' => 'required',
        ]);

        $horario = Horario::find($id);
        $horario->medico_id = $request->input('medico_id');
        $horario->paciente_id = $request->input('paciente_id');
        $horario->fecha_a = $request->input('fecha_a');
        $horario->save();

        return view("medicos.message", ['msg' => 'Registro Actualicado']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cita $cita)
    {
        $cita = Cita::find($id);
        $cita->delete();

        return redirect("citas");
    }
}
