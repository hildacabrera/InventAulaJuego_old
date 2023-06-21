<?php

namespace App\Http\Controllers;

use App\Models\Gestor;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

//use App\Http\Controllers\Controller;

class GestorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       return view('Gestores.Index',[
            'gestor'=>Gestor::all()
            
        ]);
        
 }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Gestores.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $gestor = new Gestor();
        $gestor->nombre =$request->get('nombre');
        $gestor->apellido =$request->get('apellido');
        $gestor->email =$request->get('email');
        $gestor->contraseña =$request->get('contraseña');
        $gestor->save();
 
        return redirect('/Gestores');
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
        return view('Gestores.edit',['gestor'=>Gestor::find($id)]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $gestor = Gestor::find($id);       
        $gestor->nombre =$request->get('nombre');
        $gestor->apellido =$request->get('apellido');
        $gestor->email =$request->get('email');
        $gestor->contraseña =$request->get('contraseña');
      

        return redirect('/Gestores');
    }

    /**
     * Remove the specified resource from storage.
     */
    
    public function confirmDelete(string $id)
    {
     return view('Gestores.confirmDelete',
     ['gestor'=>Gestor::find($id)
    ]);
    }
     public function destroy(string $id)
    {
       
    $usuario = Gestor::find($id);
    $usuario->delete();
    return redirect('/Gestores');
    }
}
  