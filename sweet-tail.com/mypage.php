<?php

session_start();
require_once("funcs.php");
loginCheck();

$pdo = db_conn();

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>mypage</title>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <script src="js/index.js"></script>
  </head>
<body>

<header>
      <div class="flex header_yohaku">
        
      <img src="img/sweettail_logo_white.png" alt="サイトロゴ" class="logo"/>
        <nav>
          <ul class="flex">
            <li class="header_list"><a href="#kensaku">検索する</a></li>
            <li class="header_list"><a href="/sweet-tail.com/spot_toukou_index.php">投稿する</a></li>
            <li class="header_list"><a href="/sweet-tail.com/mypage.php">マイページ</a></li>
            <li class="header_list"><a href="/sweet-tail.com/user_touroku_index.php">ユーザー登録</a></li>
            <li class="header_list"><a href="/sweet-tail.com/user_login.php">ログイン</a></li>
          </ul>
        </nav>
      </div>
    </header>

    <p> mypageこれから作ります</p>
    <ul>
        
        
        
        <li>自分の会員情報表示（編集ボタンつける）</li>
        <li>愛犬情報</li>
        <li>行きたいスポットリストを表示</li>
    <li>投稿したらポイント付与。合計ポイント表示</li>
    </ul>
    <a href="index.php">TOPページに戻る</a>

</body>
</html>