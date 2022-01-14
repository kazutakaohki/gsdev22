<?php
// GETで送られてきた名前とアドレスのデータを受け取る

$name = $_GET["namae"];
$mail = $_GET["mail"];
$nation = $_GET["nation"];
// (演習)名前、アドレス以外の情報を追加して送ってみましょう（性別、年齢などなど）




?>

<html>

<head>
    <meta charset="utf-8">
    <title>GET練習（受信）</title>
</head>

<body>
    <p>お名前：<?php echo $name; ?> </p> 
    <p>Mail：<?php echo $mail; ?> </p>

    <p>お名前：<?= $name; ?> </p> 
    <p>Mail：<?= $mail; ?> </p>
    <p>国籍：<?= $nation; ?> </p>
    <ul>
        <li><a href="index.php">index.php</a></li>
    </ul>
</body>

</html>
