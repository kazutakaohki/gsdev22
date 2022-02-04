<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>ユーザー登録</title>
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

    <!-- Main[Start] -->
    <form method="post" action="user_insert.php">
        <div class="jumbotron">
            <fieldset>
                <legend>1.画像を登録する</legend>
                <label>画像：<input type="file" name="pic"></label><br>

                <input type="submit" value="送信">
            </fieldset>

            <fieldset>
            <legend>2.ユーザー情報を登録する</legend>
                <ul>
                <li>
                <label for="usernamae">名前：</label>
                <input type="text" name="username">
                </li>
                <li>
                <label for="lid">ログインＩＤ：</label>
                <input type="text" name="lid">
                </li>
                <li>
                <label for="lpw">ログインＰＷ：</label>
                <input type="text" name="lpw">
                </li>
                <li>
                <label for="kanri_flg">管理者権限：</label>
                <input type="hidden" name="kanri_flg" value="0">
                <input type="checkbox" name="kanri_flg" value="1">
                 </li>
                 </ul>
            </fieldset>


            <input type="submit" value="登録">
        </div>
    </form>
    <!-- Main[End] -->

    <a href="index.php">TOPページに戻る</a>


</body>

</html>
