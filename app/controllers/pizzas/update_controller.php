<?php
    require_once('../../app/models/pizza.class.php');

    try
    {
        if(isset($_GET['id']))
        {
            $pizza = new Pizza;
            if($pizza->setId($_GET['id']))
            {
                if($pizza->readAllForId())
                {
                    $sizes = array('Personal', 'Mediana', 'Gigante', "4 Estaciones");
                    $tipos = array('Delgada', 'Alta', 'Pan pizza');
                    if(isset($_POST['modificar']))
                    {
                        $_POST = $pizza->validateForm($_POST);
                        if($pizza->setName($_POST['nombre']))
                        {
                            echo $_POST['tamanio'];
                            if($pizza->setSize($_POST['tamanio']))
                            {
                                if($pizza->setTypeDough($_POST['tipo_masa']))
                                {
                                    if($pizza->setPrice($_POST['precio']))
                                    {
                                        if($pizza->setDescription($_POST['descripcion']))
                                        {
                                            if($pizza->updateForId())
                                            {
                                                Page::showMessage(1, "Pizza modificada", "../../dashboard/pizzas/index.php");
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
                else
                {
                    Page::showMessage(3, "La pizza no existe", "../../dashboard/pizzas/index.php");
                }
            }
            else
            {
                Page::showMessage(3, "El id es invalido", "../../dashboard/pizzas/index.php");
            }
        }
        else
        {
            Page::showMessage(3, "Seleccione una pizza", "../../dashboard/pizzas/index.php");
        }

    }
    catch(Exception $error)
    {
        Page::showMessage(2, $error->getMessage(), "");
    }

    require_once('../../app/views/dashboard/pizzas/update_view.php');
?>