<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use App\Models\Material;
use Illuminate\Http\Request;
use App\Models\IngresoMaterial;
use App\Http\Controllers\Controller;

class IngresoMaterialController extends Controller
{
    
    

public function index()
{
    return view('Ingresos.index',[
        'ingreso'=>IngresoMaterial::select('ingreso.*','usuario.nombre as nombre_usuario','material.nombre as nombre_material')
        ->join('usuario','ingreso.usuario_id', '=','usuario.id')
        ->join('material','ingreso.material_id', '=','material.id')
        ->orderBy('id', 'asc')
        ->get()
    ]);
}
        
        
    public function create()
    {
        return view('Ingresos.create',['usuario'=>Usuario::all()],['material'=>Material::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $ingreso = new IngresoMaterial();
        $ingreso->cantidad =$request->get('cantidad');
        $ingreso->fecha_ingreso =$request->get('fecha_ingreso');
        $ingreso->proveedor =$request->get('proveedor');
        $ingreso->usuario_id =$request->get('usuario_id');
        $ingreso->material_id =$request->get('material_id');
        $ingreso->save();
 
        return redirect('/Ingresos');
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
        return view('Ingresos.edit',['ingreso'=>IngresoMaterial::find($id),'usuario'=>Usuario::all()],['material'=>Material::all()]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $ingreso = IngresoMaterial::find($id);
        $ingreso->cantidad =$request->get('cantidad');
        $ingreso->fecha_ingreso =$request->get('fecha_ingreso');
        $ingreso->proveedor =$request->get('proveedor');
        $ingreso->usuario_id =$request->get('usuario_id');
        $ingreso->material_id =$request->get('material_id');
        $ingreso->save();
 
        return redirect('/Ingresos');
    }

    /**
     * Remove the specified resource from storage.
     */
    
    public function confirmDelete(string $id)
    {
        return view('Ingresos.confirmDelete',['ingreso'=>IngresoMaterial::find($id)]);
    }
    
    
     public function destroy(string $id)
    {
        $ingreso = IngresoMaterial::find($id);
        $ingreso->delete();
        return redirect('/Ingresos');
    }
}
