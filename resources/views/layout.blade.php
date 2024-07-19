<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>

<!-- Header -->
<header class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home', [], false) }}">
{{--            <img src="../../storage/logo.png" alt="Logo" class="logo">--}}
            News
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home', [], false) }}">Mostrar notícias</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('news-create', [], false) }}">Adicionar notícias</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('categories') }}">Adicionar categoria</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('categories-show') }}">Mostrar categorias</a>
                </li>
            </ul>
            <form class="d-flex" method="get" action="{{ route('home', [], false) }}">
                @CSRF
                <input class="form-control me-2" id="like" name="like" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
                <button class="btn btn-outline-success" type="submit">Pesquisar</button>
            </form>
        </div>
    </div>
</header>

<main class="container mt-5 pt-4">
    @yield('content')
</main>

<!-- Footer -->
<footer class="bg-dark text-light py-3">
    <div class="container text-center">
        <p>© 2024 | Matheus</p>
    </div>
</footer>

</body>
</html>
