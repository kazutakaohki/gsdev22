<?php
// POSTを受け取る
// POSTの場合はパスワードも送ってみる。

$name = $_POST["namae"];
$mail = $_POST["mail"];
$pass = $_POST["pass"];

$name = htmlspecialchars($name,ENT_QUOTES);
$mail = htmlspecialchars($mail,ENT_QUOTES);
$pass = htmlspecialchars($pass,ENT_QUOTES);
?>

<html>

<head>
    <meta charset="utf-8">
    <title>POST（受信）</title>
</head>

<body>
    <p>お名前：<?=$name;?> </p>
    <p>EMAIL：<?=$mail;?> </p>
    <p>パスワード：<?=$pass;?></p>
    <ul>
        <li><a href="index.php">index.php</a></li>
    </ul>
</body>

</html>
