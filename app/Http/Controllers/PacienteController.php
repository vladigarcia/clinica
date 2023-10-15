<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use App\Models\Genero;
use App\Models\Nivel; // Importa el modelo Nivel
use Illuminate\Http\Request;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pacientes = Paciente::all();
        return view('pacientes.index', ['pacientes' => $pacientes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pacientes.create', ['niveles' => Nivel::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Aquí debes implementar la lógica para almacenar un nuevo paciente.
    }

    /**
     * Display the specified resource.
     */
    public function show(Paciente $paciente)
    {
        // Aquí debes implementar la lógica para mostrar un paciente específico.
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Paciente $paciente)
    {
        // Aquí debes implementar la lógica para editar un paciente específico.
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Paciente $paciente)
    {
        // Aquí debes implementar la lógica para actualizar un paciente específico.
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Paciente $paciente)
    {
        // Aquí debes implementar la lógica para eliminar un paciente específico.
    }
}
