<?php

namespace App\Http\Controllers;

use App\Models\Medico;
use App\Models\Clinica;
use Illuminate\Http\Request;

class MedicoController extends Controller
{
    public function index()
    {
        $medicos = Medico::all();
        return view('medicos.index', ['medicos' => $medicos]);
    }
    
    public function create()
    {
        return view('medicos.create', ['clinicas' => Clinica::all()]);
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|max:100',
            'telefono' => 'required|',
            'clinica_id' => 'required',
        ]);

        $medico = new Medico();
        $medico->nombre = $request->input('nombre');
        $medico->telefono = $request->input('telefono');
        $medico->clinica_id = $request->input('clinica_id');
        $medico->save();

        return view("medicos.message", ['msg' => 'Registro Guardado']);
    }
    
    public function show($id)
    {
        //
    }
    
    public function edit($id)
    {
        $medico = Medico::find($id);
        $clinicas = Clinica::all();
        return view('medicos.edit', ['medico' => $medico, 'clinicas' => $clinicas]);
    }
    
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required|max:100',
            'telefono' => 'required|',
            'clinica_id' => 'required',
        ]);

        $medico = Medico::find($id);
        $medico->nombre = $request->input('nombre');
        $medico->telefono = $request->input('telefono');
        $medico->clinica_id = $request->input('clinica_id');
        $medico->save();

        return view("medicos.message", ['msg' => 'Registro Guardado']);
    }
    
    public function destroy($id)
    {
        $medico = Medico::find($id);
        $medico->delete();

        return redirect("medicos");
    }
}
