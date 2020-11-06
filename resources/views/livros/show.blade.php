@extends('layout')
@section('conteudo')
ID: {{$livro->id_livro}}<br>
Titulo: {{$livro->titulo}}<br>
Idioma: {{$livro->idioma}}<br>
Isbn: {{$livro->isbn}}<br>
Total Paginas: {{$livro->total_paginas}}<br>
Data Edição: {{$livro->data_edicao}}<br>
Observações: {{$livro->observacoes}}<br>
Imagem da Capa: {{$livro->imagem_capa}}<br>
Sinopse: {{$livro->sinopse}}<br>
@if(isset($livro->genero->designacao))
    Género: {{$livro->genero->designacao}}<br>
@else
    <div class = "alert alert-danger" role="alert">
        Sem genero definido
    </div>
@endif
@if(isset($livro->autor->nome))
    Autor: {{$livro->autor->nome}}<br>
@else
    <div class = "alert alert-danger" role="alert">
        Sem autor definido
    </div>
@endif
@foreach($livro->editoras as $editora)
    {{$editora->nome}}<br>
@endforeach
@endsection