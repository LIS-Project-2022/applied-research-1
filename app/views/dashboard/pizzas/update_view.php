<h1 class='text-center my-3'>Modificar Pizza</h1>
<div class="container">
    <form method="POST">
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre de Pizza</label>
            <input type="text" class="form-control" id="nombre" placeholder="Ingrese el nombre de pizza" name='nombre' value='<?=$pizza->getName(); ?>'>
        </div>
        <div class="mb-3">
            <label for="tamanio" class="form-label">Tamaño de Pizza</label>
            <select class="form-select" name='tamanio'>
                <option value=''>Seleccione el tamaño de pizza</option>
                <?php
                    foreach($sizes as $size)
                    {
                        if($size == trim($pizza->getSize()) )
                        {
                            print("
                                <option value='\"$size\"' selected>".$size."</option>
                            ");
                        }
                        else
                        {
                            print("
                                <option value='\"$size\"'>".$size."</option>
                            ");
                        }
                    }
                ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="tipo_masa" class="form-label">Tipo de masa de Pizza</label>
            <select class="form-select" name='tipo_masa'>
                <option value=''>Seleccione el tipo de masa de pizza</option>
                <?php
                    foreach($tipos as $tipo)
                    {
                        if($tipo == trim($pizza->getTypeDough()) )
                        {
                            print("
                                <option value='\"$tipo\"' selected>".$tipo."</option>
                            ");
                        }
                        else
                        {
                            print("
                                <option value='\"$tipo\"'>".$tipo."</option>
                            ");
                        }
                    }
                ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="precio" class="form-label">Precio de Pizza</label>
            <input type="text" class="form-control" id="precio" placeholder="Ingrese el precio de pizza" name='precio' value='<?=$pizza->getPrice(); ?>'>
        </div>
        <div class="mb-3">
            <label for="descripcion" class="form-label">Example textarea</label>
            <textarea class="form-control" id="descripcion" rows="3" name='descripcion' placeholder='Ingrese una descripción de la pizza'><?=$pizza->getDescription(); ?></textarea>
        </div>
        <button type="submit" class="btn btn-primary" name='modificar'>Modificar</button>
    </form>
</div>