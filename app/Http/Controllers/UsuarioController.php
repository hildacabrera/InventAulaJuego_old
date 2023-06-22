<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
//use App\Http\Controllers\Controller;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       return view('Usuarios.Index',[
            'usuario'=>Usuario::all()
            
        ]);
        
 }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Usuarios.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $usuario = new Usuario();
        $usuario->nombre =$request->get('nombre');
        $usuario->email =$request->get('email');
        $usuario->telefono =$request->get('telefono');
        $usuario->direccion =$request->get('direccion');
        $usuario->save();
 
        return redirect('/Usuarios');
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
        return view('Usuarios.edit',['usuario'=>Usuario::find($id)]);
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $usuario = Usuario::find($id);       
        $usuario->nombre =$request->get('nombre');
        $usuario->email =$request->get('email');
        $usuario->telefono =$request->get('telefono');
        $usuario->direccion =$request->get('direccion');
        $usuario->save();

        return redirect('/Usuarios');
    }

    /**
     * Remove the specified resource from storage.
     */
    
    public function confirmDelete(string $id)
    {
     return view('Usuarios.confirmDelete',
     ['usuario'=>Usuario::find($id)
    ]);
    }
     public function destroy(string $id)
    {
       
    $usuario = Usuario::find($id);
    $usuario->delete();
    return redirect('/Usuarios');
    }
}
  