<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;


class UserController extends Controller
{
    public function index()
    {
        return response()->json(User::get());
    }
    public function create()
    {
        //
    }
    public function store(Request $request)
    {
        $request['password']=Hash::make($request['password']);
        $user=User::create($request->all());
        return response()->json($user);
    }

    public function show($id)
    {
        $user=User::find($id);
        if($user)
            return response()->json($user);
        else
        return response()->json('Usuario no Encontrado',409);
    }

    public function edit(Request $user)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $user=User::find($id);
        if($user){
            $user=$user->update($request->all());
            return response()->json($user);
        }
        else
        return response()->json('Usuario no Encontrado',409);
    }

    public function destroy($id)
    {
        $user=User::find($id);
        if($user){
            $user->delete();
            return response()->json($user);
        }
        else
        return response()->json('Usuario no Encontrado',409);
    }
    public function roles($rol){
        $users=User::Roles($rol);
        return response()->json($users);
    }
    public function imageUpload(Request $request){
        $imagen=$request->file('image');
        $path_img='usuario';
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
        return response()->download(public_path('storage').'/usuario/'.$nombre,$nombre);
    }
}
