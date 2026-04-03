<?php 
try {
    $env = parse_ini_file(__DIR__ . '/../.env');
    $pdo = new PDO(
        "mysql:host={$env['DB_HOST']};dbname={$env['DB_NAME']}",
        $env['DB_USER'],
        $env['DB_PASS']
    );
    // var_dump($env);
}
catch (PDOException $e) {
    echo "Erro: ". $e->getMessage();
}
?>