<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar Productes</title>
    <!-- Enlace a Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('../resources/css/styles.css') }}" rel="stylesheet">
</head>

<body>
    <header>
        <h1 class="title-super text-center">SUPERMERCAT</h1>
        <h5 class="title-cataleg-productes">CATÀLEG DE PRODUCTES</h5>
    </header>

    <div class="separacion"></div>
    <div class="container">        
        <nav class="navbar navbar-expand-lg ">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                     <li class="nav-item">
                        <a class="btn a-custom nav-link" href="#"><i class="fas fa-arrow-circle-left"></i> Enrere </a>
                    </li>
                </ul>
                <div class="mx-auto order-0">
                    <form class="form-inline my-2 my-lg-0" action="/buscar" method="GET">
                        <input class="form-control form-control-search mr-sm-2" type="search" placeholder="Busca un producte: (tovalloletes, xampú, etc)" aria-label="Search" name="q">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
                    </form> 
                </div>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="btn a-custom" href="{{ route('afegirProducteForm') }}">
                            Afegir producte <i class="fas fa-plus"></i> 
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="row">
            @foreach ($productes as $producte)
                <div class="col-sm-4">
                    <div class="card">
                        <a class="btn a-eliminar" href="{{route('eliminarProductes', ['id'=>$producte->id])}}" onclick="event.preventDefault(); document.getElementById('eliminar-producte-form-{{ $producte->id }}').submit();">
                            <img src="{{ asset('imatges/trash-can.png') }}" alt="Eliminar" width="20" height="20">
                            </a>
                            <form id="eliminar-producte-form-{{ $producte->id }}" action="{{ route('eliminarProductes') }}" method="POST" style="display: none;">
                                @csrf
                                <input type="hidden" name="id" value="{{ $producte->id }}">
                            </form>
                        <img src="{{ $producte->imatge }}" class="card-img-top" alt="{{ $producte->nom }}">
                        
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <p class="card-text-price">{{ $producte->preu }} €</p> 
                                <p class="card-text-stock">STOCK: {{ $producte->stock }}</p>
                            </div>
                            <h5 class="card-title">{{ $producte->nom }}</h5>
                            {{-- <h6 class="card-subtitle mb-2 text-muted">{{ $producte->descripcio }}</h6> --}}
                            <a class="btn a-editar" href="{{ route('afegirProducteForm', ['id'=>$producte->id]) }}"> EDITAR </a>
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
