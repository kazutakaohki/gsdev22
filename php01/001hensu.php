<html>

<head>
    <meta charset="utf-8">
    <style>
        .menu {
            background-color: #2FA6E9;
        }
    </style>
</head>

<body>
    <div class="menu">
        <h3>menu</h3>
        <ul>
            <li>PHP開始タグ、終了タグを知る</li>
            <li>echoを使う(str,int)</li>
            <li>htmlタグを出力しみる</li>
            <li>変数を使う($hoge)</li>
            <li>. を使う(結合演算子)</li>
            <li>(演習)自分の好きな文字列を表示する</li>
            <li><a href="index.php">index.php</a></li>
        </ul>
    </div>
    <!-- ↓ここから -->

<?php 

$name="かずたか";   // string型 = 文字列
$num=19760530;  // int型 = 数字
$br="<br>";
$miyoji="おおき";


echo $name;
echo $br;
echo $num;
echo $br;
echo $miyoji . $name;

?>


    <!-- ↑ここまで -->
</body>

</html>
