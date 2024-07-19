@extends('layout')

@section('title', 'Criar notícias')

@section('content')
    <div class="container my-5">
        <h2 class="mb-4">Criar nova notícia</h2>
        <form method="post" action="{{ route('news-store', [], false) }}">
            @CSRF

            <!-- Título -->
            <div class="mb-4">
                <label for="title" class="form-label">Título</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Digite o título da notícia" required>
            </div>

            <!-- Categoria -->
            <div class="mb-4">
                <label for="category" class="form-label">Categorias</label>
                <select name="category" id="category" class="form-control" required>
                    <option value="" disabled selected>Selecione uma categoria</option>
                    @foreach ($allCategories as $category)
                        <option value="{{ $category->name }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Texto -->
            <div class="mb-4">
                <label for="body" class="form-label">Texto</label>
                <textarea class="form-control" id="body" name="body" rows="5" placeholder="Digite o conteúdo da notícia" required></textarea>
            </div>

            <!-- Botão de Submissão -->
            <button type="submit" class="btn btn-primary">Criar</button>
        </form>
    </div>
@endsection
