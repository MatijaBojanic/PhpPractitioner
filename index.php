<?php

require 'bootstrap.php';


$pdo = Connection::make();

$query = new QueryBuilder($pdo);

$tasks = $query->selectAll('todos');
require 'index.view.php';