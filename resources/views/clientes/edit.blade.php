@extends('clientes.layouts.app')

@section('titulo', 'Editar')

@section('content')
    <div class="box">
        <div class="img-box">
            <img src="{{ asset('css/img-formulario.png') }}">
        </div>
        <div class="form-box">
            <form action="{{ route('clientes.update', $cliente->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="input-group">
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome" id="nome" value="{{ $cliente->nome }}" required>
                </div>

                <div class="input-group">
                    <label for="data_nascimento">Data de Nascimento:</label>
                    <input type="date" name="data_nascimento" id="data_nascimento"
                        value="{{ $cliente->data_nascimento }}" required>
                </div>

                <div class="input-group">
                    <label for="cpf">CPF:</label>
                    <input type="text" name="cpf" id="cpf" value="{{ $cliente->cpf }}" required>
                </div>

                <div class="input-group">
                    <label for="foto">Foto:</label>
                    <input type="file" name="foto" id="foto" accept="image/*">
                </div>

                <div class="input-group">
                    <label for="nome_social">Nome Social:</label>
                    <input type="text" name="nome_social" id="nome_social" value="{{ $cliente->nome_social }}" required>
                </div>
                <div class="input-group">
                <div class="input-group">
        <button type="submit">Atualizar</button> 
        <button <a href="{{ route('clientes.index') }}" class="button">Clientes</a> </button>
    </div>
        </div>
            </form>
        </div>
    </div>
        @endsection
