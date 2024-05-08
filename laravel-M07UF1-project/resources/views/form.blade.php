<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Añadir producto</title>
    <!-- Enlace a Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link  href="{{ asset('../css/form.css') }}" rel="stylesheet">    
    <link  href="{{ asset('../css/styles.css') }}" rel="stylesheet">    

</head>
<body>
    <header>
        <br>
        <h5 class="title-cataleg-productes">
            @if(Request::is('*/edit'))
                EDITAR PRODUCTE
            @else
                AFEGIR PRODUCTE
            @endif
        </h5>
    </header>
    <div class="separacion"></div>

    <form method="POST" action="{{ route('afegirForm') }}" enctype='multipart/form-data' class="container">
        @csrf      
        <div class="form">
            <div class="form-group">
                <label for="nom">NOM DEL PRODUCTE</label>
                <input type="text" name="nom" placeholder="Escriu el nom del producte que afegiràs" class="form-control mb-2" autofocus>
            </div>
            <div class="form-group">
                <label for="descripcio">DESCRIPCIÓ DEL PRODUCTE</label>
                <input type="text" name="descripcio" placeholder="Descripció del producte" class="form-control mb-2">
            </div>
            <div class="row">
                <div class="form-group form-group-small col-3">
                    <label for="preu">PREU DEL PRODUCTE</label>
                    <input type="number" name="preu" placeholder="Preu del producte" class="form-control form-control-small mb-2">
                </div>
                <div class="form-group form-group-small col-3">
                    <label for="stock">STOCK DEL PRODUCTE</label>
                    <input type="number" name="stock" placeholder="Stock del producte" class="form-control form-control-small mb-2">
                </div>
            </div>
            <div class="row">
                <div class="form-group form-group-image col-3">
                    <label for="imatge">IMATGE DEL PRODUCTE</label>
                    <input type="file" name="imatge" class="form-control form-control-small mb-2">
                </div>
                <div class="form-group form-group-small col-3">
                    <input type='submit' value='AFEGIR' class="btn btn-primary btn-block btn-addProduct form-control-small">
                </div>  
            </div>
    </form>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
