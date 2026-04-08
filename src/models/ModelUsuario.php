<?php
class Usuario
{
    private PDO $db;
    public function __construct(PDO $db)
    {
        $this->db = $db;
    }
    public function buscarPorEmail($email)
    {
        try {
            $stmt = $this->db->prepare("SELECT * from usuarios where email = :email");
            $stmt->execute([':email' => $email]);
            $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
            return $usuario;
        } catch (\Throwable $e) {
            echo $e->getMessage();
        }
        
    }
    public function criar($nome, $email, $senha, $perfil)
    {
        try {
            $stmt = $this->db->prepare("INSERT INTO usuarios (nome, email, senha, perfil) VALUES (:nome, :email, :senha, :perfil)");
            $stmt->execute([':nome' => $nome,':email' => $email, ':senha' => $senha, ':perfil' => $perfil]);
        } catch (\Throwable $e) {
            echo $e->getMessage();
        }
    }
}
?>