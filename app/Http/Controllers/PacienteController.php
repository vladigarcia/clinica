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
        return view('pacientes.create', ['pacientes' => Paciente::all()]);
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|max:50',
            'apellido' => 'required|max:50',
            'dirección' => 'required|max:100',
            'telefono' => 'required|',
            'edad' => 'required|',
            'fecha_nacimiento' => 'required|date',
            'fecha_a' => 'required|date',
            'genero' => 'required|'
        ]);

        $pacientes = new Paciente();
        $pacientes->nombre = $request->input('nombre');
        $pacientes->apellido = $request->input('apellido');
        $pacientes->direccion = $request->input('direccion');
        $pacientes->telefono = $request->input('telefono');
        $pacientes->edad = $request->input('edad');
        $pacientes->fecha_nacimiento = $request->input('fecha_nacimiento');
        $pacientes->fecha_a = $request->input('fecha_a');
        $pacientes->genero_id = $request->input('genero');
        $pacientes->save();

        return view("pacientes.message", ['msg' => 'Registro Guardado']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Paciente $paciente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Paciente $paciente)
    {
        $paciente = Paciente::find($id);
        return view('pacientes.edit', ['paciente' => $paciente, 'generos' => Genero::all()]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Paciente $paciente)
    {
        $request->validate([
            'nombre' => 'required|max:50',
            'apellido' => 'required|max:50',
            'dirección' => 'required|max:100',
            'telefono' => 'required|',
            'edad' => 'required|',
            'fecha_nacimiento' => 'required|date',
            'fecha_a' => 'required|date',
            'genero' => 'required|'
        ]);

        $pacientes = Paciente::find($id);
        $pacientes->nombre = $request->input('nombre');
        $pacientes->apellido = $request->input('apellido');
        $pacientes->direccion = $request->input('direccion');
        $pacientes->telefono = $request->input('telefono');
        $pacientes->edad = $request->input('edad');
        $pacientes->fecha_nacimiento = $request->input('fecha_nacimiento');
        $pacientes->fecha_a = $request->input('fecha_a');
        $pacientes->genero_id = $request->input('genero');
        $pacientes->save();

        return view("pacientes.message", ['msg' => 'Registro Actualizado/Modificado']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Paciente $paciente)
    {
        $paciente = Paciente::find($id);
        $paciente->delete();

        return redirect("pacientes");
    }
}
