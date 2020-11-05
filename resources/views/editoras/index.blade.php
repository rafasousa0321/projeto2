@extends('layout')
@foreach($editoras as $editora)
<li>
    <a href="{{route('editoras.show', ['id'=>$editora->id_editora])}}">
        {{$editora->nome}}
    </a>
</li>
@endforeach
@section('conteudo')
@endsection 