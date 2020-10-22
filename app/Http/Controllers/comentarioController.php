<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\comentario;

class comentarioController extends Controller
{
    public function Allcomentarios(Request $request){
        $input = comentario::all();
        return $input;
    }
}
