<h1 class='text-center my-3'>Crear Pizza</h1>
<div class="container">
    <form method="POST" autocomplete="off">
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre de Pizza</label>
            <input type="text" class="form-control" id="nombre" placeholder="Ingrese el nombre de pizza" name='nombre' value='<?php echo isset($_POST['nombre']) ?  $_POST['nombre'] : '' ?>'>
        </div>
        <div class="mb-3">
            <label for="tamanio" class="form-label">Tamaño de Pizza</label>
            <select class="form-select" name='tamanio'>
                <option value='' selected>Seleccione el tamaño de pizza</option>
                <option value="Personal">Personal</option>
                <option value="Mediana">Mediana</option>
                <option value="Gigante">Gigante</option>
                <option value="4 Estaciones">4 Estaciones</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="tipo_masa" class="form-label">Tipo de masa de Pizza</label>
            <select class="form-select" name='tipo_masa'>
                <option value='' selected>Seleccione el tipo de masa de pizza</option>
                <option value="Delgada">Delgada</option>
                <option value="Alta">Alta</option>
                <option value="Pan pizza">Pan pizza</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="precio" class="form-label">Precio de Pizza</label>
            <input type="text" class="form-control" id="precio" placeholder="Ingrese el precio de pizza" name='precio' value='<?php echo isset($_POST['precio']) ?  $_POST['precio'] : '' ?>'>
        </div>
        <div class="mb-3">
            <label for="descripcion" class="form-label">Example textarea</label>
            <textarea class="form-control" id="descripcion" rows="3" name='descripcion' placeholder='Ingrese una descripción de la pizza'><?php echo isset($_POST['descripcion']) ?  trim($_POST['descripcion']) : '' ?>
            </textarea>
        </div>
        <button type="submit" class="btn btn-primary" name='crear'>Crear</button>
    </form>
</div>