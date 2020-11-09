<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livro;

class LivrosController extends Controller
{
    public function index(){
        $livros = Livro::paginate(4);
        return view ('livros.index', [
            'livros'=>$livros
        ]); 
    }

    public function show(Request $request){
        $idLivro = $request->id;
        //$livro = Livro::findOrFail($idLivro);
        $livro = Livro::where('id_livro', $idLivro)->with(['genero', 'autores', 'editoras'])->first();
        return view ('livros.show', [
            'livro'=>$livro
        ]);
    }

    public function enviado(Request $request){
        $nome = $request -> pesquisar;
        $livros = Livro::where('titulo', 'like', '%' . $nome . '%')->get();
        return view('livros.enviado', ['livros' => $livros]);
    }
}