<?php
include $_SERVER['DOCUMENT_ROOT'] . '/nemendur/franklinthor/jokes/db/dbConnect.php';
try{
    $result = $pdo->query('SELECT id_author, name FROM authors');
}
catch (PDOException $e){
    $error = 'Error fetching category details.' . $e->getMessage();
    include $_SERVER['DOCUMENT_ROOT'] . '/nemendur/franklinthor/jokes/error/error.php';
    exit();
}
?>