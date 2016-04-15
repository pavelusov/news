<?php
//Получаем список авторов
try{
    include 'connect.php';
    $sql = 'SELECT * FROM `authors`';
    $s = $pdo->query($sql);
    foreach($s as $row){
        $authors[] = [
            'id'=>$row['id'],
            'first_name'=>$row['first_name'],
            'last_name'=>$row['last_name']
        ];
    }
    include '../views/users.view.php';
}catch(PDOException $e){
    $error = 'Не получилось загрузить авторов. Ошибка: ' . $e->getMessage();
    include $_SERVER['DOCUMENT_ROOT'] . '/views/error.php';

    exit();
}
