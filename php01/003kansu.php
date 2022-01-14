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
            <li>組み込み関数を知る</li>
            <li>if文と文と関数を組み合わせておみくじを作る</li>
            <li>(演習)自由におみくじをアレンジする</li>
            <li><a href="index.php">index.php</a></li>
        </ul>
    </div>
    <!-- ここから -->

    <?php
    
    $today = date("Y/m/d H:i"); // 大文字小文字区別します
    echo $today;

    $today2 = date("Y年m月d日 H時i分"); // 大文字小文字区別します
    echo "<br>";

    echo $today2;
    echo "<br>";

    $str_length = strlen("abcdefg");
    echo "文字列の長さは" . $str_length . "です";
    echo "<br>";

    $random_num = rand(1,5);
    echo $random_num;

    if($random_num === 1){
        echo "大吉";
    }elseif($random_num === 2){
        echo "中吉";
    }elseif($random_num === 3){
        echo "小吉";
    }elseif($random_num === 4){
        echo "吉";
    }elseif($random_num === 5){
        echo "凶";
    }

    ?>


    <!-- ここまで -->
</body>

</html>
