<?php
    require_once("../../app/views/dashboard/template/page.class.php");
    Page::templateHeader('Pizzas');
    require_once("../../app/views/dashboard/pizzas/index.php");
    Page::templateFooter();
?>