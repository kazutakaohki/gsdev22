<?php
// POSTを受け取る
// POSTの場合はパスワードも送ってみる。

$name = $_POST["namae"];
$address = $_POST["address"];
$tel = $_POST["tel"];
$category = $_POST["category"];
$star = $_POST["star"];
$comment = $_POST["comment"];

$name = htmlspecialchars($name,ENT_QUOTES);
$address = htmlspecialchars($address,ENT_QUOTES);
$tel = htmlspecialchars($tel,ENT_QUOTES);
$category = htmlspecialchars($category,ENT_QUOTES);
$star = htmlspecialchars($star,ENT_QUOTES);
$comment = htmlspecialchars($comment,ENT_QUOTES);

// ファイルに書き込むデータ
$date = date('Y/m/d');
$str = $date ."\t". $name ."\t". $address ."\t". $tel ."\t". $category ."\t". $star ."\t". $comment ;

// ファイルの用意
$file = fopen('./data/data.txt', 'a');

// 書き込み
// fwrite($file, $date . "\n");　※「 \ 」は、[ option＋¥ ]
fwrite($file, $str . "\n");

// ファイルをクローズ
fclose($file);
?>

<html>

<head>
    <meta charset="utf-8">
    <title>POST（受信）</title>
</head>

<body>
    <p>スポット名：<?=$name;?> </p>
    <p>住　　　所：<?=$address;?> </p>
    <p>電　　　話：<?=$tel;?></p>
    <p>カテゴリー：<?=$category;?></p>
    <p>おすすめ度：<?=$star;?></p>
    <p>コメント　：<?=$comment;?></p>

<h4>上記内容でスポットを登録しました！</h4>

    <ul>
        <li><a href="index.php">index.php</a></li>
    </ul>
</body>

</html>
