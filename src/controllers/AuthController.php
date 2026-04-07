<?php 
class UsuarioController
{
    public function __construct($db)
    {
        $db = Database::Conectar();
        $model = new Usuario($db);
    }
}
?>