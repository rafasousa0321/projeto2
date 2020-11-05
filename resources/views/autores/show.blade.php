@extends('layout')
@section('conteudo')
ID: {{$autor->id_autor}}<br>
Nome: {{$autor->nome}}<br>
Nacionalidade: {{$autor->nacionalidade}}<br>
Data de nascimento: {{$autor->data_nascimento}}<br>
Fotografia: {{$autor->fotografia}}<br>
@endsection