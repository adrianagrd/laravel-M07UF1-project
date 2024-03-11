<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar Productes</title>
    <!-- Enlace a Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Otros estilos CSS aquí -->
</head>
<body>
    <div class="container">
        <h1>Lista de Productes</h1> 
        <a href="{{route('afegirProducteForm')}}" class="btn btn-primary">Afegir nou producte</a>
        <div class="row">
            @foreach ($productes as $producte) 
        <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img src="{{ $producte->imatge }}" class="bd-placeholder-img card-img-top" width="100%" height="225">
                    <div class="card-body">
                        <form method="post" action="{{ route('eliminarProducteForm')}}">
                          @csrf    
                        <input type="hidden" name="id" value="{{$producte->id}}">
                            <button type="submit" class="btn btn-sm btn-danger">
                                <img src="./imatges/trash-can.png" alt="Eliminar">
                            </button>
                        </form>

                        <h5 class="card-title">{{ $producte->nom }}</h5>
                        <p class="card-text"> {{ $producte->descripcio }} </p>
                        <p class="card-text"> Preu: {{ $producte->preu }} </p>
                        <p class="card-text"> Stock: {{ $producte->stock }} </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
