<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function index()
    {
        return response()->json(Categoria::get());
    }
    public function create()
    {
        //
    }
    public function store(Request $request)
    {
        $categoria=Categoria::create($request->all());
        return response()->json($categoria);
    }

    public function show($id)
    {
        $categoria=Categoria::find($id);
        if($categoria)
            return response()->json($categoria);
        else
        return response()->json('Usuario no Encontrado',409);
    }

    public function edit(Request $categoria)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $categoria=Categoria::find($id);
        if($categoria){
            $categoria=$categoria->update($request->all());
            return response()->json($categoria);
        }
        else
        return response()->json('Usuario no Encontrado',409);
    }
    public function productosCategoria($id){
        $productos=Categoria::ProductosByCategoria($id)->get();
        return response()->json($productos);
    }
    public function destroy($id)
    {
        $categoria=Categoria::find($id);
        if($categoria){
            $categoria->delete();
            return response()->json($categoria);
        }
        else
        return response()->json('Usuario no Encontrado',409);
    }   
}
