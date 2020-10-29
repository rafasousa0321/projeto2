@extends('layout')
<ul>
@foreach($autores as $autor)
<li>
{{$autor->ida}}
{{$autor->nome}}
{{$autor->nacionalidade}}
</li>
@endforeach
</ul>
@section('conteudo')
@endsection