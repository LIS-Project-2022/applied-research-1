<h1 class='text-center'>Administración de pizzas</h1>
<div class="container">
    <div class="row">
        <div class='col offset-10'>
            <a class="btn btn-primary" href="create.php" role="button">Agregar pizza</a>
        </div>
    </div>

    <div class="row">
        <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Tamaño</th>
                <th scope="col">Tipo masa</th>
                <th scope="col">Precio</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Pizza de Jamón</td>
                    <td>Mediana</td>
                    <td>Alta</td>
                    <td>$5.00</td>
                    <td>Rica pizza de jamón</td>
                    <td>
                        <a class="btn btn-success" href="update.php" role="button">Editar</a>
                        <a class="btn btn-danger" href="delete.php" role="button">Eliminar</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

</div>