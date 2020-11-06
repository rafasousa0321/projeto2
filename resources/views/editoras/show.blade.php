@extends('layout')
@section('conteudo')
ID: {{$editora->id_editora}}<br>
Nome: {{$editora->nome}}<br>
Morada: {{$editora->morada}}<br>
Observações: {{$editora->observacoes}}<br>
@foreach($editora->livros as $livro)
    {{$livro->titulo}}<br>
@endforeach
@endsection