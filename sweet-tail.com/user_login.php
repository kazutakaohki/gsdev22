<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>ログイン</title>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <script src="js/index.js"></script>
  </head>
</head>

<body>

    <!-- Head[Start] -->
    <header>
      <div class="flex header_yohaku">
        <img src="img/sweettail_logo_white.png" alt="サイトロゴ" class="logo" href="/sweet-tail.com/index.php"/>
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
    <div>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header"><a class="navbar-brand" href="user_touroku_list.php">ユーザー情報登録</a></div>
                <div class="navbar-header"><a class="navbar-brand" href="user_login.php">ログイン</a></div>
                <div class="navbar-header"><a class="navbar-brand" href="user_logout.php">ログアウト</a></div>
            </div>
        </nav>
        </div>
    <!-- Head[End] -->

   <div>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="/sweet-tail.com/user_touroku_index.php">新規会員登録はこちら</a>
                </div>
            </div>
        </nav>
        </div>
    <!-- lLOGINogin_act.php は認証処理用のPHPです。 -->
    <form name="form1" action="user_login_act.php" method="post">
        ID:<input type="text" name="lid" />
        PW:<input type="password" name="lpw" />
        管理者:<input type="hidden" name="kanri_flg" value="0">
                <input type="checkbox" name="kanri_flg" value="1">
        <input type="submit" value="LOGIN" />
    </form>

    <a href="index.php">TOPページに戻る</a>
</body>

</html>
