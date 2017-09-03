<?php
try {
    $pdo = new PDO('mysql:host=localhost;dbname=franklinthor', 'franklinthor', 'franklin8');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec('SET NAMES "utf8"');
}
catch (PDOException $e){
    $error = 'Unable to connect to database' . $e->getMessage();
    include $_SERVER['DOCUMENT_ROOT'] . '/nemendur/franklinthor/jokes/error/error.php';
    exit();
}
?>