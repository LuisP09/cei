<?php

namespace App\Http\Controllers;

use App\Models\Usuarios;
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
}
