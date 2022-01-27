<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>ユーザー情報登録</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        div {
            padding: 10px;
            font-size: 16px;
        }
    </style>
</head>

<body>

    <!-- Head[Start] -->
    <header>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header"><a class="navbar-brand" href="user_toukou_list.php">ユーザー情報登録</a></div>
            </div>
        </nav>
    </header>
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
