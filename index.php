<?php 
    require_once './config/Database.php';
    require_once './src/models/ModelUsuario.php';
    require_once './src/controllers/AuthController.php';

    $pagina = $_GET['pagina'];
    switch ($pagina)
    {
        case 'login': 
            header("Location: ./src/views/auth/login.php");
            break;
        // case 'cadastro':
            
    }
?>