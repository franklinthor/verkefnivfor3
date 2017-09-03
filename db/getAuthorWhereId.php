<?php
include $_SERVER['DOCUMENT_ROOT'] . '/nemendur/franklinthor/jokes/db/dbConnect.php';
try{
    $sql = 'SELECT id_author, name FROM authors WHERE id_author = :id';
    $s = $pdo->prepare($sql);
    $s->bindValue(':id', $_POST['id']);
    $s->execute();
}
catch (PDOException $e){
    $error = 'Error fetching category details.' . $e->getMessage();
    include $_SERVER['DOCUMENT_ROOT'] . '/nemendur/franklinthor/jokes/error/error.php';
    exit();
}

$row = $s->fetch();

?>