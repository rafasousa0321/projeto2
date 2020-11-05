@extends('layout')
@section('conteudo')
ID: {{$autor->id_autor}}<br>
Nome: {{$autor->nome}}<br>
Nacionalidade: {{$autor->nacionalidade}}<br>
Data de nascimento: {{$autor->data_nascimento}}<br>
Fotografia: {{$autor->fotografia}}<br>
@if(count($autor->livros))
    Livros: 
    @foreach($autor->livros as $livro)
        <h6>{{$livro->titulo}}</h6>
    @endforeach
@else
    <div class = "alert alert-danger" role="alert">
        Este autor ainda não há livros!
    </div>
@endif
@endsection