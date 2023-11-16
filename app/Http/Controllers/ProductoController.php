<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class ProductoController extends Controller
{
    public function index()
    {
        return response()->json(Producto::get());
    }
    public function create()
    {
        //
    }
    public function store(Request $request)
    {
        $producto=Producto::create($request->all());
        return response()->json($producto);
    }

    public function show($id)
    {
        $producto=Producto::find($id);
        if($producto)
            return response()->json($producto);
        else
        return response()->json('Usuario no Encontrado',409);
    }

    public function edit(Request $producto)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $producto=Producto::find($id);
        if($producto){
            $producto=$producto->update($request->all());
            return response()->json($producto);
        }
        else
        return response()->json('Usuario no Encontrado',409);
    }

    public function destroy($id)
    {
        $producto=Producto::find($id);
        if($producto){
            $producto->delete();
            return response()->json($producto);
        }
        else
        return response()->json('Usuario no Encontrado',409);
    }
    public function imageUpload(Request $request){
        $imagen=$request->file('image');
        $path_img='producto';
        $imageName = $path_img.'/'.$imagen->getClientOriginalName();
        try {
            Storage::disk('public')->put($imageName, File::get($imagen));
        }
        catch (\Exception $exception) {
            return response('error',400);
        }
        return response()->json(['image' => $imageName]);
    }
    public function image($nombre){
        return response()->download(public_path('storage').'/producto/'.$nombre,$nombre);
    }
}
