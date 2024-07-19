@extends('layout')

@section('title', 'Categorias')

@section('content')
    <div class="container my-5">
        <h2 class="mb-4">Categorias</h2>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach ($data as $category)
                <div class="col">
                    <div class="card news-card">
                        <div class="card-body">
                            <h5 class="card-title text-center">
                                {{ Str::limit($category->name, 30) }}
                            </h5>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
