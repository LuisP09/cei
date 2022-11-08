<?php

namespace App\Http\Controllers;

use App\Models\Usuarios;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsuariosController extends Controller
{
    public function index(){
        return view ('pages.usuarios');
    }

   
    public function listar(){
        return Usuarios::all();
    }

    public function guardar(Request $request){
        if($request->id == null || $request->id == 0){
            $libro = new usuarios();
        }else{
            $libro = usuarios::find($request->id);
        }

        $libro->username = $request->username;
        $libro->firstname =$request->firstname;
        $libro->lastname =$request->lastname;

            $libro->save();
    }
}
