@extends('layout')
@section('conteudo')
ID: {{$livro->idl}}<br>
Titulo: {{$livro->titulo}}<br>
Idioma: {{$livro->idioma}}<br>
Isbn: {{$livro->isbn}}<br>
Total Paginas: {{$livro->total_paginas}}<br>
Data Edição: {{$livro->data_edicao}}<br>
Ide: {{$livro->ide}}<br>
@endsection