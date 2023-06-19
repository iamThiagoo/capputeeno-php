<?php 

namespace app\classes;

use PDO;
use PDOException;

final class Connection
{
    protected $pdo;

    public function __construct()
    {
        try 
        {
            $configs = self::getConnectionConfigs();

            $this->pdo = new PDO("{$configs['DB_DRIVER']}:host={$configs['DB_HOST']}; port={$configs['DB_PORT']}; dbname={$configs['DB_DATABASE']}", $configs['DB_USER'], $configs['DB_PASS']);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

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


    public function CloseConnection()
    {
        $this->pdo = null;
    }


    public function prepare($sql)
    {
        return $this->pdo->prepare($sql);
    }


    public function bindValue($parameter, $value, $dataType = PDO::PARAM_STR)
    {
        return $this->pdo->bindValue($parameter, $value, $dataType);
    }


    public function query($sql, $params = [])
    {
        try {
            $statement = $this->pdo->prepare($sql);
            $statement->execute($params);
            return $statement;
        } catch (PDOException $e) {
            die("Query error => {$e->getMessage()}");
        }
    }


    public function execute($sql, $params = [])
    {
        try {
            $statement = $this->pdo->prepare($sql);
            $statement->execute($params);
            return $statement->rowCount();
        } catch (PDOException $e) {
            die("Execute error => {$e->getMessage()}");
        }
    }

    
    public function lastInsertId() {
        return $this->pdo->lastInsertId();
    }
}