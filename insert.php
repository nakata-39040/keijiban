<?php

mb_internal_encoding("utf8");

$pdo=new PDO("mysql:dbname=lesson01;host=localhost;","root","root");

$pdo->exec("insert into 4each_keijiban(handlename,title,comments)
value('".$_POST['handlename']."','".$_POST['title']."','".$_POST['comments']."');");

header("Location:http://localhost/php7.4.12/4each_keijiban/index.php");
?>

<!DOCTYPE HTML>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>4eachblog 掲示板</title>
        <link rel="stylesheet" href=style.css>
    </head>
    <body>
        
    </body>
</html>