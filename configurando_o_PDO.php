<php
    $caminho = _DIR_ . " /../../db.sqlite";
    
    $pdo = new PDO('sqlite: ' . $caminho);

    $sql = "CREATE TABLE clientes (
    id INTEGER PRIMARY KEY,
    nome TEXT,
    email TEXT,
    celular TEXT,
    );";    
