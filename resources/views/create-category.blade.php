@extends('layout')

@section('title', 'Categorias')

@section('content')
    <div class="container my-5">
        <h2 class="mb-4">Cadastrar Categoria</h2>
        <div class="form-container">
            <form action="{{ route('categories.submit') }}" method="POST">
                @csrf

                <!-- Nome da Categoria -->
                <div class="mb-4">
                    <label for="name" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Digite o nome da categoria" required>
                </div>

                <!-- Botão de Submissão -->
                <button type="submit" class="btn btn-primary">Criar</button>
            </form>
        </div>
    </div>
@endsection
