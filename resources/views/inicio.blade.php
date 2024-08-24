@extends('layouts.principal_layout')

@section('title', 'Página Inicial')

@section('description', 'Esta é a página inicial.')

@section('content')
    <div class="container mt-5">
        <h1>Bem vindo</h1>

        <p><a href="{{ url('/todos') }}">Aqui</a> você pode verificar o resultado do que foi pedido</p>
        
    </div>
@endsection
