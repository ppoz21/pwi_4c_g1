<?php

// DSN (Data Source Name) "mysql:host=host_name;dbname=db_name;charset=utf-8"

$dsn = "mysql:host=127.0.0.1;dbname=grupa_s;charset=utf8";

$user = 'root';

$password = 'root';

try {
    $pdo = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}

if (isset($pdo)) {
    echo "Connected to the $dsn database successfully!";

    $sql = "SELECT * FROM products";

    $products = $pdo
        ->query($sql)
        ->fetchAll(PDO::FETCH_ASSOC)
    ;

//    foreach ($products as $product) {
//        echo '<pre>';
//        print_r($product);
//        echo '</pre>';
//    }

    $sql = "SELECT * FROM products WHERE ean = :ean";

    $id = 'e284f4d0-01f7-4c3d-bbea-6334cf6d99b5';

    $statement = $pdo->prepare($sql);

    $statement->bindParam(':ean', $id, PDO::PARAM_STR);

    $statement->execute();

    $product = $statement->fetch(PDO::FETCH_ASSOC);


    echo '<pre>';
    print_r($product);
    echo '</pre>';
}
