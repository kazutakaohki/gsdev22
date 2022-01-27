<?php

/**
 * １．PHP
 * [ここでやりたいこと]
 * まず、クエリパラメータの確認 = GETで取得している内容を確認する
 * イメージは、select.phpで取得しているデータを一つだけ取得できるようにする。
 * →select.phpのPHP<?php ?>の中身をコピー、貼り付け
 * ※SQLとデータ取得の箇所を修正します。
 */

require_once('funcs.php');

$id = $_GET['id'];

// DBに接続

$pdo = db_conn();

//２．データ登録SQL作成
$stmt = $pdo->prepare('SELECT * FROM st_spot_table WHERE id = :id');
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$status = $stmt->execute();

//３．データ表示
$view = '';
if ($status === false) {
    // ここを修正
    sql_error($stmt);
} else {
    //データが取得できたら。
    $view = $stmt->fetch();
}
var_dump($view);
?>
<!--
２．HTML
以下にindex.phpのHTMLをまるっと貼り付ける！
(入力項目は「登録/更新」はほぼ同じになるから)
※form要素 input type="hidden" name="id" を１項目追加（非表示項目）
※form要素 action="update.php"に変更
※input要素 value="ここに変数埋め込み"
-->
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>データ登録</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        div {
            padding: 10px;
            font-size: 16px;
        }
    </style>
</head>

<body>
    <header>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header"><a class="navbar-brand" href="spot_toukou_list.php">データ一覧</a></div>
            </div>
        </nav>
    </header>

    <!-- method, action, 各inputのnameを確認してください。  -->
    <form method="POST" action="spot_update.php">
        <div class="jumbotron">
            <fieldset>
            <legend>詳細画面</legend>
            <ul>
                <li>
                <label for="namae">スポット名：</label>
                <input type="text" name="name" value=<?= $view['name'] ?>>
                </li>
                <li>
                <label for="address">住　　　所：</label>
                <input type="text" name="address" value=<?= $view['address'] ?>>
                </li>
                <li>
                <label for="tel">電　　　話：</label>
                <input type="text" name="tel" value=<?= $view['tel'] ?>>
                </li>
                <li>
                <label for="category">カテゴリー：</label>
                <select name="category">
                            <option value="<?= $view['category'] ?>"><?= $view['category'] ?></option>
                            <option value="">カテゴリーを選択</option>
                            <option value="食事">食事</option>
                            <option value="遊び">遊び</option>
                            <option value="宿泊">宿泊</option>
                            <option value="自然">自然</option>
                    <option value="ショップ">ショップ</option>
                    <option value="その他">その他</option>
                 </select>
                 </li>
                 </ul>
            </fieldset>

            <fieldset>
                <legend>3.おすすめ情報を登録する</legend>
                <ul>
                <li>
                <label for="star">おすすめ度：</label>
                <select type="text" name="star" >
                            <option value="<?= $view['star'] ?>"><?= $view['star'] ?></option>
                            <option value="">★の数を選択</option>
                            <option value="★">★</option>
                            <option value="★★">★★</option>
                            <option value="★★★">★★★</option>
                            <option value="★★★★">★★★★</option>
                            <option value="★★★★★">★★★★★</option>
                        </select>
                        </li>
                <li>
                <label for="comment">コメント　: </label>
                <textarea type="text" name="comment" cols="30" rows="10"><?= $view['comment'] ?></textarea>
                </li>
                <li>
                <input type="hidden" name="id" value=<?= $view['id'] ?>><br>
        </li>
        </ul>
                <input type="submit" value="送信">
            </fieldset>
        </div>
    </form>
    <a href="index.php">TOPページに戻る</a>
</body>

</html>