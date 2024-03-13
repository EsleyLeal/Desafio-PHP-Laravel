@extends('clientes.layouts.app')

@section('titulo', 'Clientes')
@section('content')
    <table class="clientes-table">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Data de Nascimento</th>
                <th>CPF</th>
                <th>Foto</th>
                <th>Nome Social</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($clientes as $cliente)
                <tr>
                    <td>{{ $cliente->nome }}</td>
                    <td>{{ $cliente->data_nascimento }}</td>
                    <td>{{ $cliente->cpf }}</td>
                    <td><img src="{{ asset('storage/'.$cliente->foto) }}" alt="Foto do Cliente" class="cliente-foto"></td>
                    <td>{{ $cliente->nome_social }}</td>
                    <td>
                        <a href="{{ route('clientes.show', $cliente->id) }}" class="acao-ver">Ver</a>
                        <a href="{{ route('clientes.edit', $cliente->id) }}" class="acao-editar">Editar</a>
                        <a href="{{ route('clientes.create', $cliente->id) }}" class="acao-cadastrar">Cadastro</a>
                        <form action="{{ route('clientes.destroy', $cliente->id) }}" method="POST" class="acao-excluir">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
