@extends('layout')

@section('title', 'Criar notícias')

@section('content')
    <!-- News List -->
    <div class="container my-5">
        <h2>{{ $news->title }}</h2>
        <div class="my-5"><strong>Categoria:</strong> {{ $news->category }}</div>
        <div class="my-5"><strong>Descrição:</strong> {{ $news->body }}</div>
    </div>
@endsection
