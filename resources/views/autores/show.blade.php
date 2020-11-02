@extends('layout')
@section('conteudo')
ID: {{$autor->ida}}<br>
Nome: {{$autor->nome}}<br>
Nacionalidade: {{$autor->nacionalidade}}<br>
Data: {{$autor->data}}<br>
@endsection