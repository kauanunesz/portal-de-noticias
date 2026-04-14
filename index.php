<?php 
session_start();
require_once './config/Database.php';
require_once './src/models/ModelUsuario.php';
require_once './src/controllers/AuthController.php';

$pagina = $_GET['pagina'] ?? '';
switch ($pagina)
{
    case 'login': 
        if ($_SERVER['REQUEST_METHOD'] === 'POST')
        {
            try {
                $controller = new AuthController();
                $controller->login();
                
            } catch (\Throwable $e) {
                $e->getMessage();
            }
        }
        else
        {
            include 'login.php';
        }
        break;
    case 'cadastro':        
        if ($_SERVER['REQUEST_METHOD'] === 'POST')
        {
            try {
                $controller = new AuthController();
                $controller->cadastro();
            } catch (\Throwable $e) {
                $e->getMessage();
            }
        }
        else
        {
            include 'login.php';
        }
        break;
    default: 
        include 'login.php';
}
?>