<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторы</title>
    <link rel="stylesheet" href="../../css/main.css">
</head>
<body>
<h2>Авторы новостей: </h2>
<?php foreach($authors as $author):?>
    <p><?php echo ' - ' . $author['first_name'] . ' ' . $author['last_name'];?></p>
<?php endforeach; ?>
</body>
</html>