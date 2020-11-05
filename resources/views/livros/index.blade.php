@extends('layout')
@foreach($livros as $livro)
<li>
    <a href="{{route('livros.show', ['id'=>$livro->id_livro])}}">
        {{$livro->titulo}}
    </a>
</li>
@endforeach
<br>
{{$livros->render()}}
@section('conteudo')
@endsection 