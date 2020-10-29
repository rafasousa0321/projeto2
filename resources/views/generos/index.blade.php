@extends('layout')
<ul>
@foreach($generos as $genero)
<li>
{{$genero->idg}}
{{$genero->designacao}}
{{$genero->observacoes}}
</li>
@endforeach
</ul>
@section('conteudo')
@endsection