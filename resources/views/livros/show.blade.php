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
ID genero: {{$livro->id_genero}}<br>
ID autor: {{$livro->id_autor}}<br>
Sinopse: {{$livro->sinopse}}<br>
@endsection