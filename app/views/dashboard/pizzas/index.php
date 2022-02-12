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
                <?php
                    foreach($pizzas as $pizza)
                    {
                        print("
                        <tr>
                            <td scope='row'>".$pizza['id_pizza']."</th>
                            <td>".$pizza['name_pizza']."</td>
                            <td>".$pizza['size']."</td>
                            <td>".$pizza['typeDough']."</td>
                            <td>$".$pizza['price']."</td>
                            <td>".$pizza['description']."</td>
                            <td>
                                <a class='btn btn-success' href='update.php?id=".$pizza['id_pizza']."' role='button'>Editar</a>
                                <a class='btn btn-danger' href='delete.php?id=".$pizza['id_pizza']."' role='button'>Eliminar</a>
                            </td>
                        </tr>
                        ");
                    }
                ?>
            </tbody>
        </table>
    </div>

</div>