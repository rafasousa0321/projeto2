@extends('layout')
<ul>
@foreach($editoras as $editora)
<li>
{{$editora->ide}}
{{$editora->nome}}
{{$editora->morada}}
</li>
@endforeach
</ul>
@section('conteudo')
@endsection