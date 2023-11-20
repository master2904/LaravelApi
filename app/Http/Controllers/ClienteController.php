<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index()
    {
        return response()->json(Cliente::get());
    }
    public function create()
    {
        //
    }
    public function store(Request $request)
    {
        $cliente=Cliente::create($request->all());
        return $this->index();
    }

    public function show($id)
    {
        $cliente=Cliente::find($id);
        if($cliente)
            return response()->json($cliente);
        else
        return response()->json('Usuario no Encontrado',409);
    }

    public function edit(Request $cliente)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $problema=Cliente::find($id);
        if (!$problema)
            return response()->json("Este cliente no existe",400);
        $problema->update($request->all());
        return $this->index();
    }

    public function destroy($id)
    {
        $cliente=Cliente::find($id);
        if($cliente){
            $cliente->delete();
        }
        return $this->index();
    }
}
