<?php

namespace App\Http\Controllers;

use App\Models\Horario;
use App\Models\Medico;
use Illuminate\Http\Request;

class HorarioController extends Controller
{
    public function index()
    {
        $horarios = Horario::all();
        return view('horarios.index', ['horarios' => $horarios]);
    }

    public function create()
    {
        return view('horarios.create', ['medicos' => Medico::all()]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'medico_id' => 'required',
            'dia_trabajo' => 'required',
            'hora_e' => 'required',
            'hora_s' => 'required',
        ]);

        $horario = new Horario();
        $horario->medico_id = $request->input('medico_id');
        $horario->dia_trabajo = $request->input('dia_trabajo');
        $horario->hora_e = $request->input('hora_e');
        $horario->hora_s = $request->input('hora_s');
        $horario->save();

        return view("medicos.message", ['msg' => 'Registro Guardado']);
    }

    public function show(Horario $horario)
    {
        //
    }

    public function edit(Horario $horario)
    {
        $horario = Horario::find($id);
        $medico = Medico::all();
        return view('horario$horarios.edit', ['horario' => $horario, 'medico' => $medico]);
    }

    public function update(Request $request, Horario $horario)
    {
        $request->validate([
            'medico_id' => 'required',
            'dia_trabajo' => 'required',
            'hora_e' => 'required',
            'hora_s' => 'required',
        ]);

        $horario = Horario::find($id);
        $horario->medico_id = $request->input('medico_id');
        $horario->dia_trabajo = $request->input('dia_trabajo');
        $horario->hora_e = $request->input('hora_e');
        $horario->hora_s = $request->input('hora_s');
        $horario->save();

        return view("medicos.message", ['msg' => 'Registro Actualizado']);
    }

    public function destroy(Horario $horario)
    {
        $horario = Horario::find($id);
        $horario->delete();

        return redirect("horarios");
    }
}
