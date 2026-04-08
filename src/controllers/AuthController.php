<?php 
class AuthController
{
    private $model;
    public function __construct()
    {
        $db = Database::Conectar();
        $this->model = new Usuario($db);
    }

    public function cadastro()
    {
        if (empty(trim($_POST['nome'])) || empty(trim($_POST['email'])) || empty(trim($_POST['senha'])) || empty(trim($_POST['confirmarSenha']))) 
        {
            echo "Campos vazios. Preencha os campos corretamente!";
            return;
        }
        $nome = trim($_POST['nome']);
        $email = trim($_POST['email']);
        $senha = trim($_POST['senha']);
        $confirmarSenha = trim($_POST['confirmarSenha']);
        if ($senha === $confirmarSenha)
        {
            $senhaHash = password_hash($senha, PASSWORD_DEFAULT);
        }
        $this->model->criar($nome, $email, $senhaHash, 'leitor');
    }
    public function login()
    {
        if (empty(trim($_POST['email'])) || empty(trim($_POST['senha']))) 
        {
            echo "Campos vazios. Preencha os campos corretamente!";
            return;
        }
        $email = trim($_POST['email']);
        $senha = trim($_POST['senha']);
        $usuario = $this->model->buscarPorEmail($email);
        if ($usuario)
        {
            
        }
    }
}
?>