<?php

require 'Task.php';


try{
    $pdo = new PDO('mysql:host=127.0.0.1;dbname=mytodo', 'root','');
} catch(PDOException $e) {
    die('Could not connect.');
}

$statement = $pdo->prepare('select * from todos');
$statement->execute();

$tasks = $statement->fetchAll(PDO::FETCH_CLASS, 'Task');

require 'index.view.php';