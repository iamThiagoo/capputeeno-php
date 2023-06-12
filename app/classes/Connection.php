<?php 

namespace app\classes;

use PDO;
use PDOException;

final class Connection 
{
    protected static $pdo;

    public function __construct()
    {
        try 
        {
            $configs = self::getConnectionConfigs();

            self::$pdo = new PDO("{$configs['DB_DRIVER']}:host={$configs['DB_HOST']}; port={$configs['DB_PORT']}; dbname={$configs['DB_DATABASE']}", $configs['DB_USER'], $configs['DB_PASS']);
            self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            self::$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

            return self::$pdo;

        } catch (PDOException $e) {
            die("Connection error => {$e->getMessage()}");
        }
    }

    public static function getConnectionConfigs () : array
    {
        if ($_ENV['DB_ENVIROMENT'] == 'production') {
            return self::getConnectionProdutionConfigs();

        } else {
            return self::getConnectionDevelopmentConfigs();
        }
    }

    public static function getConnectionProdutionConfigs () : array
    {
        return [
            'DB_DRIVER' => $_ENV['DB_DRIVER_PROD'],
            'DB_HOST' => $_ENV['DB_HOST_PROD'],
            'DB_PORT' => $_ENV['DB_PORT_PROD'],
            'DB_DATABASE' => $_ENV['DB_DATABASE_PROD'],
            'DB_USER' => $_ENV['DB_USER_PROD'],
            'DB_PASS' => $_ENV['DB_PASS_PROD']
        ];
    }


    public static function getConnectionDevelopmentConfigs () : array
    {
        return [
            'DB_DRIVER' => $_ENV['DB_DRIVER'],
            'DB_HOST' => $_ENV['DB_HOST'],
            'DB_PORT' => $_ENV['DB_PORT'],
            'DB_DATABASE' => $_ENV['DB_DATABASE'],
            'DB_USER' => $_ENV['DB_USER'],
            'DB_PASS' => $_ENV['DB_PASS']
        ];
    }
}