<?php

try {
    $db = new PDO('mysql:host=localhost;dbname=bote', 'root', 'rootroot');
} catch (PDOException $e) {
// örneğin zaman aşımını bekledikten sonra yediden bağlanmaya çalış
}
?>

