<?php
//【重要】
/**
 * DB接続のための関数をfuncs.phpに用意
 * require_onceでfuncs.phpを取得
 * 関数を使えるようにする。
 */

session_start();
require_once("funcs.php");
loginCheck();

$pdo = db_conn();



//２．データ登録SQL作成
$stmt = $pdo->prepare('SELECT * FROM st_user_table');
$status = $stmt->execute();

//３．データ表示
$view = '';
if ($status === false) {
    sql_error($stmt);

} else {
    while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
        //GETデータ送信リンク作成
        // <a>で囲う。
        $view .= '<p>';
        $view .= '<a href="user_touroku_re.php?id=' . $result['id'] . '">';
        $view .= $result['id'] . '：' . $result['username']. '：' . $result['lid']. '：' . $result['lpw']. '：' . $result['kanri_flg'];
        $view .= '</a>';

        $view .= '<a href="user_delete.php?id=' . $result['id'] . '">';
        $view .= "[削除]";
        $view .= '</a>';

        $view .= '</p>';
    }
}
?>


<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ユーザー登録・修正・削除</title>
    <link rel="stylesheet" href="css/range.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        div {
            padding: 10px;
            font-size: 16px;
        }
    </style>
</head>

<body id="main">
    <!-- Head[Start] -->
    <header>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="user_touroku_index.php">ユーザー登録・修正・削除</a>
                </div>
            </div>
        </nav>
    </header>
    <!-- Head[End] -->

    <!-- Main[Start] -->
    <div>
        <div class="container jumbotron">
            <a href="user_touroku_re.php"></a>
            <?= $view ?>
        </div>
    </div>
    <!-- Main[End] -->
    <a href="index.php">TOPページに戻る</a>
</body>

</html>
