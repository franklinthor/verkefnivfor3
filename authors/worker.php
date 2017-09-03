<?php

if (isset($_GET['add'])){
    $pageTitle = 'New author';
    $action = 'addform';
    $name = '';
    $id = '';
    $button = 'Add author';
    include 'form.php';
    exit();
}
if (isset($_GET['addform'])){
    include_once $_SERVER['DOCUMENT_ROOT'] . '/nemendur/franklinthor/jokes/db/insertAuthor.php';
    header('Location: .');
    exit();
}
if (isset($_POST['action']) and  $_POST['action'] == 'Edit'){
    include_once $_SERVER['DOCUMENT_ROOT'] . '/nemendur/franklinthor/jokes/db/getAuthorWhereId.php';
    $pageTitle = 'Edit author';
    $action = 'editform';
    $name = $row['name'];
    $id = $row['id_author'];
    $button = 'Update author';
    include 'form.php';
    exit();
}
if (isset($_GET['editform'])){
    include_once $_SERVER['DOCUMENT_ROOT'] . '/nemendur/franklinthor/jokes/db/updateAuthor.php';
    header('Location: .');
    exit();
}
if (isset($_POST['action']) and  $_POST['action'] == 'Delete') {
    include_once $_SERVER['DOCUMENT_ROOT'] . '/nemendur/franklinthor/jokes/db/deleteAuthor.php';
    header('Location: .');
    exit();
}

include_once $_SERVER['DOCUMENT_ROOT'] . '/nemendur/franklinthor/jokes/db/getAuthor.php';

foreach ($result as $row){
    $authors[] = array('id' => $row['id_author'], 'name' => $row['name']);
}
?>