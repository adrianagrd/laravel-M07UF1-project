<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Producto</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link  href="{{ asset('../resources/css/form.css') }}" rel="stylesheet">    
</head>
<body>

<form method="POST" action="{{ route('afegirForm') }}" enctype='multipart/form-data' class="container">
    @csrf        
    <h1 class="text-center">Introduce la información del producto</h1>
    <input type="text" name="nom" placeholder="Nombre del producto" class="form-control mb-2" autofocus>
    <input type="text" name="descripcio" placeholder="Descripción del producto" class="form-control mb-2">
    <input type="number" name="preu" placeholder="Precio del producto" class="form-control mb-2">
    <input type="number" name="stock" placeholder="Stock del producto" class="form-control mb-2">
    <input type="file" name="imatge" placeholder="Imagen del producto" class="form-control mb-2">

    <input type='submit' value='Crear nuevo producto' class="btn btn-primary btn-block mt-2">
</form>

<!-- Enlace a Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
