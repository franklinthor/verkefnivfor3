<?php
include $_SERVER['DOCUMENT_ROOT'] . '/nemendur/franklinthor/jokes/db/dbConnect.php';
try{
    $sql = 'UPDATE authors SET name = :name WHERE id_author = :id';
    $s = $pdo->prepare($sql);
    $s->bindValue(':name', $_POST['name']);
    $s->bindValue(':id', $_POST['id']);
    $s->execute();
}
catch (PDOException $e){
    $error = 'Error updating submitted category.';
    include $_SERVER['DOCUMENT_ROOT'] . '/nemendur/franklinthor/jokes/error/error.php';
    exit();
}
?>