<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Editora;

class EditorasController extends Controller
{
    public function index(){
        $editoras = Editora::all();
        return view ('editoras.index', [
            'editoras'=>$editoras
        ]); 
    }

    public function show(Request $request){
        $idEditora = $request->id;
        //$editora = Editora::findOrFail($idEditora);
        $editora = Editora::where('ide', $idEditora)->first();
        return view ('Editoras.show', [
            'editora'=>$editora
        ]);
    }
}
