<?php 
class Database
{
    private static $pdo = null;
    private function __construct(){}
    public static function Conectar()
    {
        if (self::$pdo === null)
            {
                try {
                    $env = parse_ini_file(__DIR__ . '/../.env');
                    self::$pdo = new PDO(
                    "mysql:host={$env['DB_HOST']};dbname={$env['DB_NAME']};charset=utf8mb4",
                    $env['DB_USER'],
                    $env['DB_PASS'],
                    [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,]
                    );
                } catch (\Throwable $e) {
                    echo $e->getMessage();
                }
            }
        return self::$pdo;
    }
}
?>