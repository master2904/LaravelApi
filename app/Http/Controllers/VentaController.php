<?php

namespace App\Http\Controllers;

use App\Models\Venta;
use Illuminate\Http\Request;

class VentaController extends Controller
{
    public function index()
    {
        return response()->json(Venta::get());
    }
    public function create()
    {
        //
    }
    public function store(Request $request)
    {
        $venta=Venta::create($request->all());
        return response()->json($venta);
    }

    public function show($id)
    {
        $venta=Venta::find($id);
        if($venta)
            return response()->json($venta);
        else
        return response()->json('Usuario no Encontrado',409);
    }

    public function edit(Request $venta)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $venta=Venta::find($id);
        if($venta){
            $venta=$venta->update($request->all());
            return response()->json($venta);
        }
        else
        return response()->json('Usuario no Encontrado',409);
    }

    public function destroy($id)
    {
        $venta=Venta::find($id);
        if($venta){
            $venta->delete();
            return response()->json($venta);
        }
        else
        return response()->json('Usuario no Encontrado',409);
    }
    public function reporteCliente(){
        
        $venta=Venta::Reporte()->get();
        return response()->json($venta);
    }
}