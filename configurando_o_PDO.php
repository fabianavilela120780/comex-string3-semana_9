comex:/caminho/para/o/arquivo/comex.sq3
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
