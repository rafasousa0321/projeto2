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

<h5>Pesquisar Livros</h5>
<form method="POST" action="{{route('enviado')}}">
    @csrf
    <label for="nome">Pesquisar: </label>
    <input type="text" name="pesquisar">
    <button type="submit"> Enviar</button>
</form>