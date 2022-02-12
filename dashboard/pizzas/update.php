<?php
    require_once("../../app/views/dashboard/template/page.class.php");
    Page::templateHeader('Pizzas');
    require_once("../../app/controllers/pizzas/update_controller.php");
    Page::templateFooter();
?>