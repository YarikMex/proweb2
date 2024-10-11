<?php

namespace App\Http\Controllers;

use App\Models\Puesto;
use Illuminate\Http\Request;

class PuestoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Mostrar una lista paginada de puestos
        $puestos = Puesto::paginate(10);
        return view('puestos.index', compact('puestos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $puestos = Puesto::paginate(10);
        // Mostrar el formulario para crear un nuevo puesto
        return view('puestos.create', compact('puestos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Crear un nuevo puesto con los datos del formulario
        Puesto::create($request->all());
        return redirect()->route('puestos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Puesto $puesto)
    {
        $puestos = Puesto::paginate(10);
        return view('puestos.show', compact('puestos','puesto'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Puesto $puesto)
    {
        $puestos = Puesto::paginate(10);
        // Mostrar el formulario para editar un puesto existente
        return view('puestos.edit', compact('puestos','puesto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Puesto $puesto)
    {
        // Actualizar los datos de un puesto existente
        $puesto->update($request->all());
        return redirect()->route('puestos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Puesto $puesto)
    {
        // Eliminar un puesto existente
        $puesto->delete();
        return redirect()->route('puestos.index');
    }
}
