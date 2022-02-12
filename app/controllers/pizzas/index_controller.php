<?php
    require_once('../../app/models/pizza.class.php');

    try
    {
        $pizza = new Pizza;
        $pizzas = $pizza->readAll();
        if($pizzas)
        {
            require_once('../../app/views/dashboard/pizzas/index.php');
        }
        else
        {
            Page::showMessage(2, "No se encontraron pizzas", "");
        }
    }
    catch(Exception $error)
    {
        Page::showMessage(2, $error->getMessage(), "");
    }

?>