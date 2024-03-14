<form action="{{ isset($producte) ? route('editarProducteForm', ['id' => $producte->id]) : route('afegirProducteNou') }}" method="POST">
    
        <input type="text" name="nom" placeholder="Nombre del producto" class="form-control mb-2" autofocus value="{{  isset($producte) ? $producte->nom: '' }}">
        <input type="text" name="descripcio" placeholder="Descripción del producto" class="form-control mb-2" value="{{ isset($producte) ? $producte->descripccio : '' }}">
        <input type="number" name="preu" placeholder="Precio del producto" class="form-control mb-2" value="{{ isset($producte) ? $producte->preu : '' }}">
        <input type="number" name="stock" placeholder="Stock del producto" class="form-control mb-2" value="{{ isset($producte) ? $producte->stock : '' }}" >
        <input type="text" name="imatge" placeholder="Imagen del producto" class="form-control mb-2" value="{{ isset($producte) ? $producte->imatge : '' }}">

        <button class="btn btn-primary btn-block" type="submit">
            {{ isset($producte) ? 'Editar producte' : 'Crear nou producte' }}       
        </button>
</form>