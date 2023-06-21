<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Tipo_Material;
use Illuminate\Routing\Controller;

class Tipo_MaterialController extends Controller


{
    private $id;
    
    private $tipo_material;
  
    public function index()
    
    {
        
        return view('Tipo_Materiales.index',[
            'tipo_material'=>Tipo_Material::all()
            
        ]);
    }
    public function create()
    {
         return view('Tipo_Materiales.create');
         
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $tipo_material = new Tipo_Material ();
        $tipo_material->nombre =$request->get('nombre');
                $tipo_material->save();
 
        return redirect('/Tipo_Materiales');
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
        return view('Tipo_Materiales.edit',['tipo_material'=>Tipo_Material::find($id)]);
    }

    /**
     * Update the specified resource in storage.
     */
    
    
     public function update(Request $request,string $id)
    {
        $tipo_material = Tipo_Material::find($id);
        $tipo_material->nombre =$request->get('nombre');
        $tipo_material->save();

        return redirect('/Tipo_Materiales');
    }
   public function confirmDelete(string $id)
    {
     return view('Tipo_Materiales.confirmDelete',
     ['tipo_material'=>Tipo_Material::find($id)
    ]);

    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
    $tipo_material = Tipo_Material::find($id);
    $tipo_material->delete();

     
    return redirect('/Tipo_Materiales');
    }
        
}