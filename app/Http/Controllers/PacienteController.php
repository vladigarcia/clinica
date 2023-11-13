<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use App\Models\Genero;
use Illuminate\Http\Request;

class PacienteController extends Controller
{
    public function index()
    {
        $pacientes = Paciente::all();
        return view('pacientes.index', ['pacientes' => $pacientes]);
    }
    
    public function create()
    {
        return view('pacientes.create', ['generos' => Genero::all()]);
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|max:50',
            'apellido' => 'required|max:50',
            'direccion' => 'required|max:100',
            'telefono' => 'required|int',
            'edad' => 'required|int',
            'fecha_nacimiento' => 'required|date',
            'fecha_a' => 'required|date',
            'genero' => 'required'
        ]);

        $paciente = new Paciente();
        $paciente->nombre = $request->input('nombre');
        $paciente->apellido = $request->input('apellido');
        $paciente->direccion = $request->input('direccion');
        $paciente->telefono = $request->input('telefono');
        $paciente->edad = $request->input('edad');
        $paciente->fecha_nacimiento = $request->input('fecha_nacimiento');
        $paciente->fecha_a = $request->input('fecha_a');
        $paciente->genero_id = $request->input('genero');
        $paciente->save();

        return view("pacientes.message", ['msg' => 'Registro Guardado']);
    }

    public function edit($id)
    {
        $paciente = Paciente::find($id);
        return view('pacientes.edit', ['paciente' => $paciente, 'generos' => Genero::all()]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required|max:50',
            'apellido' => 'required|max:50',
            'direccion' => 'required|max:100',
            'telefono' => 'required',
            'edad' => 'required',
            'fecha_nacimiento' => 'required|date',
            'fecha_a' => 'required|date',
            'genero' => 'required'
        ]);

        $paciente = Paciente::find($id);
        $paciente->nombre = $request->input('nombre');
        $paciente->apellido = $request->input('apellido');
        $paciente->direccion = $request->input('direccion');
        $paciente->telefono = $request->input('telefono');
        $paciente->edad = $request->input('edad');
        $paciente->fecha_nacimiento = $request->input('fecha_nacimiento');
        $paciente->fecha_a = $request->input('fecha_a');
        $paciente->genero_id = $request->input('genero');
        $paciente->save();

        return view("pacientes.message", ['msg' => 'Registro Actualizado/Modificado']);
    }

    public function destroy($id)
    {
        $paciente = Paciente::find($id);
        $paciente->delete();

        return redirect("pacientes");
    }
}
