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
    return view('Ingresos.index', [
        'ingresomaterial' => IngresoMaterial::select('ingreso.*', 'material.nombre as material_nombre')
            ->join('material', 'ingreso.material_id', '=', 'material.id')
            ->get()
        //'usuario' => IngresoMaterial::select('ingreso.*', 'usuario.nombre as usuario_nombre')
            //->join('usuario', 'ingreso.usuario_id', '=', 'usuario.id')
           // ->get()
    ]);
}
        
        
    public function create()
    {
       // return view('Ingresos.create',['material'=>Material::all()]);

        //return view('Ingresos.create',['usuario'=>Usuario::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //$ejemplar = new IngresoMaterial ();
        //$ejemplar->localizacion =$request->get('localizacion');
        //$ejemplar->cantidad =$request->get('cantidad');
       // $ejemplar->codigoLibro =$request->get('codigoLibro');
        //$ejemplar->save();
 
        //return redirect('/Ingreso');
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
      // return view('Ingreso.edit',['ejemplar'=>IngresoMaterial::find($id),'libro'=>Libro::all()]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
       // $ejemplar = IngresoMaterial::find($id);
       // $ejemplar->localizacion =$request->get('localizacion');
       // $ejemplar->cantidad =$request->get('cantidad');
       // $ejemplar->codigoLibro =$request->get('codigoLibro');
       // $ejemplar->save();

        //return redirect('/Ingreso');
    }

    /**
     * Remove the specified resource from storage.
     */
    
    public function confirmDelete(string $id)
    {
     //return view('Ingreso.confirmDelete',['ejemplar'=>IngresoMaterial::find($id)]);
    }
    
    
     public function destroy(string $id)
    {
        //$ejemplar = IngresoMaterial::find($id);
     //$ejemplar->delete();
        //return redirect('/Ingreso');
    }
}
