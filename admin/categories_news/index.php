<?php
include_once 'connect.php';
//Перехватываем нажатие ссылки ДОБАВИТЬ КАТЕГОРИЮ
if(isset($_GET['add_cat'])){
    $title = 'Добавить категорию:';
    $button = 'Добавить';

    include 'form_cat.php';
    exit();
}

if(isset($_GET['category'])){
    try{
        $sql = 'INSERT INTO `categories` SET
            `name` = :name';
        $s = $pdo->prepare($sql);
        $s->bindValue(':name', $_POST['text']);
        $s->execute();

    }catch(PDOException $e){
        $error = 'Не получилось добавить категорию новостей. Ошибка: ' . $e->getMessage();
        include $_SERVER['DOCUMENT_ROOT'] . '/views/error.php';

        exit();
    }
    header('location: .');
    exit();
}

include 'cat_news.views.php';

try{
    $sql = 'SELECT *';
}catch(PDOException $e){
    $error = 'Не получилось загрузить категории новостей. Ошибка: ' . $e->getMessage();
    include $_SERVER['DOCUMENT_ROOT'] . '/views/error.php';

    exit();
}