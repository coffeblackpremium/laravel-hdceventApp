@extends('layouts.main')

@section('Title', 'Produtos')

@section('content')

    <h1> Tela de Produtos </h1>
    @if($busca != '')
        <p>O Usuario está buscando por alguma coisa </p>
    @endif
@endsection