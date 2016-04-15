<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php print $title;?></title>
    <link rel="stylesheet" href="../../css/main.css">
</head>
<body>
<h2><?php print $title;?></h2>
<div id="catform">
<form action="?category" method="post">
    <textarea name="text" cols="40" rows="5"></textarea>
    <br>
    <input type="submit" value="<?php print $button; ?>">
</form>
</div>




</body>
</html>