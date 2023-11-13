<?php

namespace App\Http\Controllers;

use App\Models\Horario;
use App\Models\Clinica;
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
            'fecha_hora' => 'required',
        ]);

        $horario = new Horario();
        $horario->medico_id = $request->input('medico_id');
        $horario->fecha_hora = $request->input('fecha_hora');
        $horario->save();

        return view("medicos.message", ['msg' => 'Registro Guardado']);
    }

    public function show(Horario $horario)
    {
        //
    }

    public function edit(Horario $horario)
    {
        //
    }

    public function update(Request $request, Horario $horario)
    {
        //
    }

    public function destroy(Horario $horario)
    {
        //
    }
}
