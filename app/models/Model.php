<?php 

namespace app\models;

use app\classes\Connection;

abstract class Model
{
    protected $connection;
    protected $table;
    protected $fields = [];

    public function __construct ()
    {
        $this->connection = new Connection;
    }

    //
    public function create ($attributes)
    {
        $fields = implode(",", $this->fields);
        $placeholders = implode(", ", array_fill(0, count($this->fields), "?"));

        $query = "INSERT INTO {$this->table} ($fields) VALUES ($placeholders)";
        $stmt = $this->connection->prepare($query);
        
        $stmt->execute(array_values($attributes));

        return $stmt->rowCount() > 0;
    }


    //
    public function update ($attributes, $id) : int
    {
        $setValues = array();

        foreach ($attributes as $key => $value)
        {
            $setValues[] = "$key = '$value'";
        }

        $setValues = implode(", ", $setValues);

        $query = "UPDATE {$this->table} SET $setValues WHERE id = ?";
        $stmt = $this->connection->prepare($query);

        $values = array_merge(array_values($attributes), [$id]);
        $stmt->execute($values);

        return $stmt->rowCount() > 0;
    }


    //
    public function all ()
    {
        $query = "SELECT * FROM {$this->table}";

        $stmt = $this->connection->query($query);
        $stmt->execute();

        return $stmt->fetchAll();
    }

    //
    public function findBy ($field, $value)
    {
        $query = "SELECT * FROM {$this->table} WHERE {$field} = ?";

        $stmt = $this->connection->prepare($query);
        $stmt->execute([$value]);

        return $stmt->fetchAll();
    }

    //
    public function findById ($id)
    {
        $query = "SELECT * FROM {$this->table} WHERE id = ?";

        $stmt = $this->connection->prepare($query);
        $stmt->execute([$id]);

        return $stmt->fetchAll();
    }

    //
    public function findByColumn($column, $value)
    {
        $query = "SELECT * FROM {$this->table} WHERE $column = ?";

        $stmt = $this->connection->prepare($query);
        $stmt->execute([$value]);
        
        return $stmt->fetchAll();
    }

    //
    public function findBetweenDates($column, $startDate, $endDate)
    {
        $query = "SELECT * FROM {$this->table} WHERE $column BETWEEN ? AND ?";

        $stmt = $this->connection->prepare($query);
        $stmt->execute([$startDate, $endDate]);

        return $stmt->fetchAll();
    }

    //
    public function delete ($field, $value) : int
    {
        $query = "DELETE FROM {$this->table} WHERE {$field} = ?";

        $stmt = $this->connection->prepare($query);
        $stmt->execute([$value]);
        
        return $stmt->rowCount() > 0;
    }

    //
    public function deleteById ($id) : int
    {
        $query = "DELETE FROM {$this->table} WHERE id = ?";

        $stmt = $this->connection->prepare($query);
        $stmt->execute([$id]);
        
        return $stmt->rowCount() > 0;
    }
}