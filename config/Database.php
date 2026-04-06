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
                    "mysql:host={$env['DB_HOST']};dbname={$env['DB_NAME']}",
                    $env['DB_USER'],
                    $env['DB_PASS']
                    );
                } catch (\Throwable $e) {
                    echo $e->getMessage();
                }
            }
        return self::$pdo;
    }
}
?>