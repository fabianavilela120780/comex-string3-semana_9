<?php

$databasePath = __DIR__ . '/comex.sqlite';
$pdo = new PDO('sqlite:' . $databasePath);

echo 'Conectei';

$pdo->exec('CREATE TABLE produtos (id INTEGER PRIMARY KEY, name TEXT, categoria TEXT, preco TEXT, quantidade TEXT, tipo TEXT);');
$pdo->exec('CREATE TABLE cliente (id INTEGER PRIMARY KEY, name TEXT, endereco TEXT, telefone TEXT, email TEXT, telefone TEXT);');
$pdo->exec('CREATE TABLE pedido (id INTEGER PRIMARY KEY, numero TEXT, quantidade TEXT, produto TEXT, valor unitario TEXT, valor total TEXT);');
