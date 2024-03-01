<form action="{{ route('afegirProducte') }}" method="POST">

        <input type="text" name="nom" placeholder="Nombre del producto" class="form-control mb-2" autofocus>
        <input type="text" name="descripcio" placeholder="Descripción del producto" class="form-control mb-2">
        <input type="number" name="preu" placeholder="Precio del producto" class="form-control mb-2">
        <input type="number" name="stock" placeholder="Stock del producto" class="form-control mb-2">
        <input type="text" name="imatge" placeholder="Imagen del producto" class="form-control mb-2">

        <button class="btn btn-primary btn-block" type="submit">
            Crear nou producte
        </button>
</form>