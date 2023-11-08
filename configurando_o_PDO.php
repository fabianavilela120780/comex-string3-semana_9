comex:/caminho/para/o/arquivo/banco.sq3
sqlite::memory:
sqlite:

<?php

$pdo = new PDO(

    'sqlite::memory:',

    null,

    null,

    array(PDO::ATTR_PERSISTENT => true)

);

?>
