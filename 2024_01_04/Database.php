<?php

require_once 'Car.php';

class Database
{
    private ?PDO $pdo;

    public function __construct(string $host, string $dbname, string $user, string $password)
    {
        $this->pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function __destruct()
    {
        $this->pdo = null;
    }

    public function getCars(): array
    {
        $sql = "SELECT * FROM Car";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Car');

        return $stmt->fetchAll();
    }

    public function getCar(int $id): Car|false
    {
        $sql = "SELECT * FROM Car WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Car');

        return $stmt->fetch();
    }
}