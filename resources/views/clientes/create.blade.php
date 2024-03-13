@extends('clientes.layouts.app')

@section('titulo', 'Area de Cadastro')
@section('content')
    {{-- <h1>Cadastrar Cliente</h1> --}}

    <div class="box">
        <div class="img-box">
            <img src="{{ asset('css/img-formulario.png') }}">
        </div>
        <div class="form-box">
            <form action="{{ route('clientes.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="input-group">
                    <label for="nome"> Nome:</label>
                    <input type="text" name="nome" id="nome" placeholder="Digite o seu nome" required>
                </div>

                <div class="input-group">
                    <label for="data_nascimento">Data de Nascimento:</label>
                    <input type="date" name="data_nascimento" id="data_nascimento" required>
                </div>

                <div class="input-group">
                    <label for="cpf">CPF:</label>
                    <input type="text" name="cpf" id="cpf" placeholder="Digite o seu CPF ou CNPJ" required>
                </div>

                <div class="input-group w50">
                    <label for="foto">Foto</label>
                    <input type="file" name="foto" id="foto" required>
                </div>

                <div class="input-group w50">
                    <label for="nome_social">Nome Social:</label>
                    <input type="text" name="nome_social" id="nome_social" required>
                </div>

                <div class="input-group">
                    <button type="submit">Cadastrar</button>
                </div>

            </form>
        </div>
    </div>

   
@endsection
