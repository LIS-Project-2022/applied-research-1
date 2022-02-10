<?php
    require_once("../../app/views/dashboard/template/page.class.php");
    Page::templateHeader('Pizzas');
    require_once("../../app/views/dashboard/pizzas/delete_view.php");
    Page::templateFooter();
?>