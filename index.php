<?php

$pdo = new PDO("mysql:dbname=test;host=localhost:3307", "root", "");

$sql = $pdo->query('SELECT * FROM usuario');

$dados = $sql->fetchAll(pdo::FETCH_ASSOC);

echo '<pre>';
print_r($dados);
