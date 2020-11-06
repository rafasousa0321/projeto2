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

<h5>Pesquisar Livros</h5>
<form method="POST" action="enviado">
    Pesquisar:<input type="text" name="pesquisar">
    <input type="submit" value="Enviar">
</form>