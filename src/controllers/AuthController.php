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
        $campos = ['nome', 'email', 'senha', 'confirmarSenha'];
        foreach ($campos as $campo)
        {
            if (empty(trim($_POST[$campo] ?? '')))
        {
            echo "Campos vazios. Preencha os campos corretamente!";
            return;
        }
        }
        $nome = trim($_POST['nome']);
        $email = trim($_POST['email']);
        $senha = trim($_POST['senha']);

        if ($senha !== trim($_POST['confirmarSenha']))
        {
            echo "As senhas não coincidem. ";
            return;
        }
        $this->model->criar($nome, $email, password_hash($senha, PASSWORD_DEFAULT), 'leitor');
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
        if (!$usuario)
        {
            echo "Credenciais inválidas. Preencha corretamente, senão Israel lhe espancará";
            return;
        }
        if (!password_verify($senha, $usuario['senha']))
        {
            echo "Credenciais inválidas. Preencha corretamente, senão Israel lhe espancará";
            return;
        }
        session_start();
        $_SESSION['id'] = $usuario['id'];
        $_SESSION['nome'] = $usuario['nome'];
        $_SESSION['perfil'] = $usuario['perfil'];
        // $perfil = $usuario['perfil'];
        if($usuario['perfil'] === 'admin')
        {
            header("Location: ./view/admin/ex.php");
            exit;
        }
        elseif ($usuario['perfil'] === 'redator')
        {
            header("Location: ./view/redator/ex.php");
            exit;
        }
        else
        {
            header("Location: /");
            exit;
        }
    }
}
?>