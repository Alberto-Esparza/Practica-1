<?php

namespace App\Http\Controllers;
use App\Materia;
use Illuminate\Http\Request;

class MateriaController extends Controller
{
    public function index()
    {
    $materias = Materia::all();
    return view('materias.index', compact('materias'));
    }

    public function create()
    {
    return view('materias.create');
    }

    public function store(Request $request)
    {
    // Valida los datos del formulario
    $request->validate([
        'nombre' => 'required',
        'fecha' => 'required',
        'resultado' => 'required|in:completo,no completo',
    ]);

    // Crea una nueva materia en la base de datos
    $materia = new Materia;
    $materia->nombre = $request->nombre;
    $materia->fecha = $request->fecha;
    $materia->resultado = $request->resultado;
    $materia->save();

    return redirect('/materias');
    }

    public function show(Materia $materia)
    {
    return view('materias.show', compact('materia'));
    }

    public function edit(Materia $materia)
    {
    return view('materias.edit', compact('materia'));
    }

    public function update(Request $request, Materia $materia)
    {
    // Valida los datos del formulario
    $request->validate([
        'nombre' => 'required',
        'fecha' => 'required',
        'resultado' => 'required|in:Aprobado o Reprobado',
    ]);

    // Actualiza la materia en la base de datos
    $materia->nombre = $request->nombre;
    $materia->fecha = $request->fecha;
    $materia->resultado = $request->resultado;
    $materia->save();

    return redirect('/materias');
    }

    public function destroy(Materia $materia)
    {
    // Elimina la materia de la base de datos
    $materia->delete();

    return redirect('/materias');
    }
}
