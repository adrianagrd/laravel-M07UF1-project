<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Afegir Producte</title>
    <!-- Enlace a Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('../resources/css/form.css') }}" rel="stylesheet">
</head>
<body>
    <div class="product-card">
        <form   action="{{ route('afegirProducteForm') }}" method="POST">
            <label for="nom-producte">NOM DEL PRODUCTE </label>
            <input type="text" id="nom-producte" name="nom-producte" placeholder="Nom del producte" class="form-control mb-2" autofocus value="{{  isset($producte) ? $producte->nom: '' }}" required>
            
            <label for="descripcio-producte">DESCRIPCIÓ DEL PRODUCTE</label>
            <input type="text" id="descripcio-producte" name="descripcio-producte" placeholder="Descripción del producto" class="form-control mb-2" value="{{ isset($producte) ? $producte->descripccio : '' }}">
            
            <label for="preu-producte">PREU</label>
            <input type="number" id="preu-producte" name="preu-producte" placeholder="Precio del producto" class="form-control mb-2" value="{{ isset($producte) ? $producte->preu : '' }}">
            
            <label for="stock-producte">STOCK ACTUAL</label>
            <input type="number" id="stock-producte" name="stock-producte" placeholder="Stock del producto" class="form-control mb-2" value="{{ isset($producte) ? $producte->stock : '' }}" >
            
            <label for="imatge-producte">IMATGE</label>
            <input type="text" id="imatge-producte" name="imatge-producte" placeholder="Imagen del producto" class="form-control mb-2" value="{{ isset($producte) ? $producte->imatge : '' }}">
    
            <button class="btn btn-primary btn-block" type="submit">
                {{ isset($producte) ? 'Editar producte' : 'Crear nou producte' }}       
            </button>
        </form>
    
    </div>
    
    
</body>
</html>

