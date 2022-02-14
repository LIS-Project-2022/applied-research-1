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
                    if(isset($_POST['eliminar']))
                    {
                        if($pizza->deleteForId())
                        {
                            Page::showMessage(1, "Pizza eliminada", "../../dashboard/pizzas/index.php");
                        }
                        else
                        {
                            throw new Exception("Ocurrio un problema al eliminar la pizza");
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

    require_once('../../app/views/dashboard/pizzas/delete_view.php');

?>