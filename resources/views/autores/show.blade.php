@extends('layout')
@section('conteudo')
ID: {{$autor->id_autor}}<br>
Nome: {{$autor->nome}}<br>
Nacionalidade: {{$autor->nacionalidade}}<br>
Data: {{$autor->data}}<br>
@endsection