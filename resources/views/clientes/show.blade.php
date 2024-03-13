@extends('clientes.layouts.app')

@section('titulo', 'Cliente')
@section('content')

    <div class="container-cliente">
        <div class="cliente-img">
            <p><img src="{{ asset('storage/'.$cliente->foto) }}" alt="Foto do Cliente" class="cliente-foto"></p>
        </div>
        <ul class="cliente-detalhes">
            <li>Nome:  {{ $cliente->nome }}</li>
            <li>Data de Nascimento: {{ $cliente->data_nascimento }}</li>
            <li>CPF: {{ $cliente->cpf }}</li>
            <li>Nome Social: {{ $cliente->nome_social }}</li>
        </ul>
           
    </div>

@endsection
