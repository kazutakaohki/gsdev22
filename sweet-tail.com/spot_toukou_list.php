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
$stmt = $pdo->prepare('SELECT * FROM st_spot_table');
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
        $view .= '<a href="spot_toukou_re.php?id=' . $result['id'] . '">';
        $view .= $result['id'] . '：' . $result['name']. '：' . $result['address']. '：' . $result['tel']. '：' . $result['category']. '：' . $result['star']. '：' . $result['comment'];
        $view .= '</a>';

        $view .= '<a href="spot_delete.php?id=' . $result['id'] . '">';
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
    <title>フリーアンケート表示</title>
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
                    <a class="navbar-brand" href="spot_toukou_index.php">データ登録</a>
                </div>
            </div>
        </nav>
    </header>
    <!-- Head[End] -->

    <!-- Main[Start] -->
    <div>
        <div class="container jumbotron">
            <a href="spot_toukou_re.php"></a>
            <?= $view ?>
        </div>
    </div>
    <!-- Main[End] -->
    <a href="index.php">TOPページに戻る</a>
</body>

</html>