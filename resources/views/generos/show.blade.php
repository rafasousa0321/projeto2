@extends('layout')
@section('conteudo')
ID: {{$genero->id_genero}}<br>
Designação: {{$genero->designacao}}<br>
Observações: {{$genero->observacao}}<br>
@if(count($genero->livros))
@foreach($genero->livros as $livro)
<h6>{{$livro->titulo}}</h6>
@endforeach
@else
<div class = "alert alert-danger" role="alert">
Neste género ainda não há livros!
</div>
@endif
@endsection