<?php
    require_once('../../app/models/pizza.class.php');

    try
    {
        $pizza = new Pizza;
        if(isset($_POST['crear']))
        {
            $_POST = $pizza->validateForm($_POST);
            if($pizza->setName($_POST['nombre']))
            {
                if($pizza->setSize($_POST['tamanio']))
                {
                    if($pizza->setTypeDough($_POST['tipo_masa']))
                    {
                        if($pizza->setPrice($_POST['precio']))
                        {
                            if($pizza->setDescription($_POST['descripcion']))
                            {
                                if($pizza->create())
                                {
                                    Page::showMessage(1, "Pizza creada", "../../dashboard/pizzas/index.php");
                                }
                                else
                                {
                                    throw new Exception("Ocurrio un problema al crear la pizza");
                                }
                            }
                            else
                            {
                                throw new Exception("Ingrese una descripción para la pizza");
                            }
                        }
                        else
                        {
                            throw new Exception("Ingrese el precio de la pizza");
                        }
                    }
                    else
                    {
                        throw new Exception("Seleccione el tipo de masa de la pizza");
                    }
                }
                else
                {
                    throw new Exception("Seleccione el tamaño de la pizza");
                }
            }
            else
            {
                throw new Exception("Ingresar nombre de pizza");
            }
        }
    }
    catch(Exception $error)
    {
        Page::showMessage(2, $error->getMessage(), "");
    }

    require_once('../../app/views/dashboard/pizzas/create_view.php');
?>