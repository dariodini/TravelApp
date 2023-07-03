<?php

namespace App\Core\Database;

use PDO;

class QueryBuilder
{
    protected $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table)
    {
        $statement = $this->pdo->prepare("select * from {$table}");

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    public function create($table, $parameters): void
    {
        $columns = implode(', ', array_keys($parameters));
        $values = ':' . implode(', :', array_keys($parameters));

        $sql = "INSERT INTO $table ($columns) VALUES ($values)";

        try {
            $statement = $this->pdo->prepare($sql);
            $statement->execute($parameters);
        } catch (\Exception $e) {
            echo "An error occurred while executing the query. Try later.";
        }
    }


    public function update($table, $parameters): void
    {
        $columns = [];
        $id = $parameters['id'];

        foreach ($parameters as $key => $value) {
            if ($key !== 'id') {
                $columns[] = $key . ' = :' . $key;
            }
        }

        $sql = sprintf(
            'UPDATE %s SET %s WHERE id = :id',
            $table,
            implode(', ', $columns)
        );

        try {
            $statement = $this->pdo->prepare($sql);
            $statement->bindValue(':id', $id);
            unset($parameters['id']);

            foreach ($parameters as $key => $value) {
                $statement->bindValue(':' . $key, $value);
            }

            $statement->execute();
        } catch (\Exception $e) {
            echo "An error occurred while executing the query. Try later.";
        }
    }
        );

        try {
            $statement = $this->pdo->prepare($sql);
            $statement->execute($parameters);
        } catch (\Exception $e) {
            echo "An error occurred while executing the query. Try later.";
        }
    }
}
