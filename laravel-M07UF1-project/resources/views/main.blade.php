 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar Productes</title>
    <!-- Enlace a Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('../resources/css/styles.css') }}" rel="stylesheet">
</head>

<body>
    <header>
        <h1 class="text-center" >Supermercat</h1>
    </header>
    <div class="title-cataleg-productes">CATÀLEG DE PRODUCTES</div>
    <div class="separacion"></div>
    <div class="container">        

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-arrow-left"></i> Atrás</a>
                    </li>
                </ul>
                <div class="mx-auto order-0">
                    <form class="form-inline my-2 my-lg-0" action="/buscar" method="GET">
                        <input class="form-control mr-sm-2" type="search" placeholder="Buscar productos" aria-label="Search" name="q">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
                    </form>
                </div>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a  class="btn a-custom" href="{{ route('afegirProducteForm') }}" > afegir producte </a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="row">
            @foreach ($productes as $producte)
                <div class="col-sm-4">
                    <div class="card">
                        <img src="{{ $producte->imatge }}" class="card-img-top" alt="{{ $producte->nom }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $producte->nom }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">{{ $producte->descripcio }}</h6>
                            <p class="card-text">Precio: {{ $producte->preu }}</p>
                            <a class="btn a-editar" href="{{ route('afegirProducteForm', ['id'=>$producte->id]) }}"> Editar </a>
                        </div>
                        <div class="card-footer text-muted">
                            Stock: {{ $producte->stock }}
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
