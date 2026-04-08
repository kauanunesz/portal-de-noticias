<?php
require './config/Database.php';
$db = Database::Conectar();

if ($db) {
    echo "✅ Conectado com sucesso!";
} else {
    echo "❌ Falha na conexão.";
}