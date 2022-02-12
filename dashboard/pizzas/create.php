<?php
    require_once("../../app/views/dashboard/template/page.class.php");
    Page::templateHeader('Pizzas');
    require_once("../../app/controllers/pizzas/create_controller.php");
    Page::templateFooter();
?>