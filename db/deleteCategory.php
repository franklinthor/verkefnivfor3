<?php
include $_SERVER['DOCUMENT_ROOT'] . '/nemendur/franklinthor/jokes/db/dbConnect.php';
try {
    $sql = 'DELETE FROM categories WHERE id_category = :id';
    $s = $pdo->prepare($sql);
    $s->bindValue(':id', $_POST['id']);
    $s->execute();
}
catch (PDOException $e){
    $error = 'Error delete category.';
    include $_SERVER['DOCUMENT_ROOT'] . '/nemendur/franklinthor/jokes/error/error.php';
    exit();
}
?>