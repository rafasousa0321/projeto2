@extends('layout')
<ul>
@foreach($livros as $livro)
<li>
{{$livro->idl}}
{{$livro->titulo}}
{{$livro->idioma}}
{{$livro->isbn}}
{{$livro->total_paginas}}
{{$livro->data_edicao}}
{{$livro->ide}}
</li>
@endforeach
<br>
{{$livros->render()}}
</ul>
@section('conteudo')
@endsection