<form method="POST" action="{{ route('afegirForm') }}" enctype='multipart/form-data' >
@csrf        
<input type="text" name="nom" placeholder="Nombre del producto" class="form-control mb-2" autofocus>
        <input type="text" name="descripcio" placeholder="Descripción del producto" class="form-control mb-2">
        <input type="number" name="preu" placeholder="Precio del producto" class="form-control mb-2">
        <input type="number" name="stock" placeholder="Stock del producto" class="form-control mb-2">
        <input type="file" name="imatge" placeholder="Imagen del producto" class="form-control mb-2">

        <input type='submit' value='Crear nou producte' class="btn btn-primary btn-block">
            
        
</form>