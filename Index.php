<?php
	$pageTitle = "Orions";
    include_once 'View/Layouts/_Header.php';
    include_once 'View/Layouts/_Menu.php';
    require "Controller/HomeController.php";
    $pagina = isset($_GET["pagina"])?$_GET["pagina"]:"index";
    $ctrl = new HomeController();
    switch($pagina){
        case "index" : 
            $ctrl->Index();
            break;
        case "quem-somos" : 
            $ctrl->QuemSomos();
            break;
    }
    include_once 'View/Layouts/_Footer.php';