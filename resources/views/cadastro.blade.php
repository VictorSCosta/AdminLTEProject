@extends('adminlte::page')

@section('title', 'Analisar.net')

@section('content_header')
    <h1>Cadastro</h1>
@stop

@section('content')
    <p>Você esta na pagina de cadastro!</p>
    @foreach($users as $user)
        {{ $user->name }}
    @endforeach
@stop
