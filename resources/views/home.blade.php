<!DOCTYPE html>
<html>
<head>
    <title>Gestión de Películas y Categorías</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Gestión de Películas y Categorías</h1>
        <div class="row">
            <div class="col-md-6">
                <div class="card mb-3">
                    <div class="card-header">
                        Películas
                    </div>
                    <div class="card-body">
                        <p>Administra tus películas aquí.</p>
                        <a href="{{ route('peliculas.index') }}" class="btn btn-primary">Ver Películas</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-3">
                    <div class="card-header">
                        Categorías
                    </div>
                    <div class="card-body">
                        <p>Administra tus categorías aquí.</p>
                        <a href="{{ route('categorias.index') }}" class="btn btn-primary">Ver Categorías</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
