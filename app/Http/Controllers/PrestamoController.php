<?php

namespace App\Http\Controllers;

use App\Models\Gestor;
use App\Models\IngresoMaterial;
use App\Models\Material;
use App\Models\Prestamo;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Carbon\Carbon;


class PrestamoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $superPantalla = [
            'ListaPrestamoPersonal' => Prestamo::join('material','material.id', '=', 'prestamo.material_id')
            ->select('prestamo.id','material.nombre', 'material.descripcion', 'prestamo.cantidad', 'prestamo.fecha_devolucion')
            ->where('prestamo.id', '0')
            ->get(),
            'ListaUsuarios' => Usuario::all(),
            'ListaMaterial' => Material::all(),
            'ListaMaterialesStock' => IngresoMaterial::join('material', 'material.id', '=', 'ingreso.material_id')
            ->select('ingreso.id','material.nombre', 'ingreso.fecha_ingreso', 'ingreso.cantidad')
            ->where('material.id', '0')
            ->get(),
            'ValorUsuario' => 0,
            'ValorMaterial' => 0
                ];
            
  
        return view('Prestamos.Prestamos',[
            "superPantalla" =>$superPantalla]);
    }


    public function consultarPrestamos(Request $request)
    {
        $usuarioId = $request->input('persona');
        $materialId = $request->input('material');
        $accionId = $request->input('idAccion');
        $devolverId = $request->input('idDevolver');
        $prestarId = $request->input('idPrestar');
        $fechaActual = Carbon::now();
        $fecha0 = Carbon::createFromFormat('Y-m-d', '2000-01-01');

        if ($accionId === 'Devolver') {

            $prestamo = Prestamo::find((int)$devolverId);
            $prestamo->fecha_devolucion = $fechaActual;
            $prestamo->cantidad = 0;
            $prestamo->save();

            $ingreso = IngresoMaterial::where('ingreso.material_id', $prestamo->material_id)->get();
            $ingreso[0]->cantidad = $ingreso[0]->cantidad + 1;
            $ingreso[0]->save();
        }
        else if ($accionId === 'Prestar') {
            $prestamoCantidad = IngresoMaterial::find((int)$prestarId);
            $prestamoCantidad->cantidad = $prestamoCantidad->cantidad - 1;
            $prestamoCantidad->save();

            $gestores = Gestor::all();
            $prestamos = new Prestamo ();
            $prestamos->cantidad = 1;
            $prestamos->fecha_prestamo =$fechaActual;
            $prestamos->fecha_devolucion =$fecha0;
            $prestamos->descripcion = 'prestar';
            $prestamos->material_id = $prestamoCantidad -> material_id;
            $prestamos->usuario_id = $usuarioId;
            $prestamos->gestor_id = $gestores[0]->id;
            $prestamos->save();
        }
        $superPantalla = [
            'ListaPrestamoPersonal' => Prestamo::join('material','material.id', '=', 'prestamo.material_id')
            ->select('prestamo.id','material.nombre', 'material.descripcion', 'prestamo.cantidad', 'prestamo.fecha_prestamo')
            ->where('prestamo.usuario_id', $usuarioId)
            ->where('prestamo.cantidad', '>', 0)
            ->get(),
            'ListaUsuarios' => Usuario::all(),
            'ListaMaterial' => Material::all(),
            'ListaMaterialesStock' => IngresoMaterial::join('material', 'material.id', '=', 'ingreso.material_id')
            ->select('ingreso.id','material.nombre', 'ingreso.fecha_ingreso', 'ingreso.cantidad')
            ->where('material.id', $materialId)
            ->where('ingreso.cantidad', '>', 0)
            ->get(),
            'ValorUsuario' => $usuarioId,
            'ValorMaterial' => $materialId,
                ];

                return view('Prestamos.Prestamos',[
                    "superPantalla" =>$superPantalla]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
