<?php

require 'index.view.php';

try{
    $pdo = new PDO('mysql:host=127.0.0.1;dbname=mytodo', 'root','');
} catch(PDOException $e) {
    die('Could not connect.');
}

$statement = $pdo->prepare('select * from todos');
$statement->execute();

var_dump($statement->fetchAll(PDO::FETCH_OBJ));