<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tipo_Material;
use App\Models\Material;
class MaterialController extends Controller
{
    
    public function index()
{
    return view('Materiales.index', [
        'material' => Material::select('material.*', 'tipo_material.nombre as tipo_material_nombre')
            ->join('tipo_material', 'material.tipo_material_id', '=', 'tipo_material.id')
            ->get()
    ]);
}
        
        
    public function create()
    {
        return view('Materiales.create',['tipo_material'=>Tipo_Material::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $material = new Material ();
        $material->nombre =$request->get('nombre');
        $material->descripcion =$request->get('descripcion');
        $material->tipo_material_id =$request->get('tipo_material_id');
        $material->save();
 
        return redirect('/Materiales');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
       return view('Materiales.edit',['material'=>Material::find($id),'tipo_material'=>Tipo_Material::all()]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $material = Material::find($id);
        $material->nombre =$request->get('nombre');
        $material->descripcion =$request->get('descripcion');
        $material->tipo_material_id =$request->get('tipo_material_id');
        $material->save();

        return redirect('/Materiales');
    }

    /**
     * Remove the specified resource from storage.
     */
    
    public function confirmDelete(string $id)
    {
     return view('Materiales.confirmDelete',['material'=>Material::find($id)]);
    }
    
    
     public function destroy(string $id)
    {
        $material = Material::find($id);
     $material->delete();
        return redirect('/Materiales');
    }
}
