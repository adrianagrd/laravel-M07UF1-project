 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar Productes</title>
    <!-- Enlace a Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href=".\css\app.css">
</head>
<body>
    <header>
        <h1>Supermercat</h1>
    </header>
    <div class="container">
        <h1>Lista de Productos</h1> 
        <a class="btn btn-primary" href="{{ route('afegirProducteForm') }}"> afegir producte </a>

        @foreach ($productes as $producte)
        <div class="row mb-4">
            <div class="col-md-4">
                <img src="{{ $producte->imatge }}" class="img-fluid" alt="{{ $producte->nom }}">
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $producte->nom }}</h5>
                        <p class="card-text">{{ $producte->descripcio }}</p>
                        <p class="card-text">Precio: {{ $producte->preu }}</p>
                        <p class="card-text">Stock: {{ $producte->stock }}</p>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>    
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
