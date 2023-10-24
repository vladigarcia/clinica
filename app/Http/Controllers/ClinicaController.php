<?php

namespace App\Http\Controllers;

use App\Models\Clinica;
use Illuminate\Http\Request;

class ClinicaController extends Controller
{
    public function index()
    {
        $clinicas = Clinica::all();
        return view('clinicas.index', ['clinicas' => $clinicas]);
    }
    
    public function create()
    {
        return view('clinicas.create');
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|max:100',
            'telefono' => 'required|',
            'direccion' => 'required|max:100',
        ]);

        $clinica = new Clinica();
        $clinica->nombre = $request->input('nombre');
        $clinica->telefono = $request->input('telefono');
        $clinica->direccion = $request->input('direccion');
        $clinica->save();

        return view("clinicas.message", ['msg' => 'Registro Guardado']);
    }

    public function show(Clinica $clinica)
    {
        //
    }
    
    public function edit($id)
    {
        $clinica = Clinica::find($id);
        return view('clinicas.edit', ['clinica' => $clinica]);
    }
    
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required|max:100',
            'telefono' => 'required|',
            'direccion' => 'required|max:100',
        ]);

        $clinica = Clinica::find($id);
        $clinica->nombre = $request->input('nombre');
        $clinica->telefono = $request->input('telefono');
        $clinica->direccion = $request->input('direccion');
        $clinica->save();

        return view("clinicas.message", ['msg' => 'Registro Actualizado/Modificado']);
    }
    
    public function destroy($id)
    {
        $clinica = Clinica::find($id);
        $clinica->delete();

        return redirect("clinicas");
    }
}
