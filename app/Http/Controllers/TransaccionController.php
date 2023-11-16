<?php

namespace App\Http\Controllers;

use App\Models\Transaccion;
use Illuminate\Http\Request;

class TransaccionController extends Controller
{
    public function index()
    {
        return response()->json(Transaccion::get());
    }
    public function create()
    {
        //
    }
    public function store(Request $request)
    {
        $transaccion=Transaccion::create($request->all());
        return response()->json($transaccion);
    }

    public function show($id)
    {
        $transaccion=Transaccion::find($id);
        if($transaccion)
            return response()->json($transaccion);
        else
        return response()->json('Usuario no Encontrado',409);
    }

    public function edit(Request $transaccion)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $transaccion=Transaccion::find($id);
        if($transaccion){
            $transaccion=$transaccion->update($request->all());
            return response()->json($transaccion);
        }
        else
        return response()->json('Usuario no Encontrado',409);
    }

    public function destroy($id)
    {
        $transaccion=Transaccion::find($id);
        if($transaccion){
            $transaccion->delete();
            return response()->json($transaccion);
        }
        else
        return response()->json('Usuario no Encontrado',409);
    }
}
