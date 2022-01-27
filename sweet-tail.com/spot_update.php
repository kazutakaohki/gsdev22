<?php
require_once('funcs.php');

//PHP:コード記述/修正の流れ
//1. insert.phpの処理をマルっとコピー。
//   POSTデータ受信 → DB接続 → SQL実行 → 前ページへ戻る
//2. $id = POST["id"]を追加
//3. SQL修正
//   "UPDATE テーブル名 SET 変更したいカラムを並べる WHERE 条件"
//   bindValueにも「id」の項目を追加
//4. header関数"Location"を「select.php」に変更



//1. POSTデータ取得
$id = $_POST['id'];
$name   = $_POST['name'];
$address  = $_POST['address'];
$tel    = $_POST['tel'];
$category = $_POST['category'];
$star = $_POST['star'];
$comment = $_POST['comment'];


//2. DB接続します
$pdo = db_conn();

//３．データ登録SQL作成
$stmt = $pdo->prepare('UPDATE
                        st_spot_table
                    SET
                        name = :name,
                        address = :address,
                        tel = :tel,
                        category = :category,
                        star = :star,
                        comment = :comment,
                        date = sysdate()
                    WHERE
                        id = :id;
                    ');
// 数値の場合 PDO::PARAM_INT
// 文字の場合 PDO::PARAM_STR
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$stmt->bindValue(':name', $name, PDO::PARAM_STR);
$stmt->bindValue(':address', $address, PDO::PARAM_STR);
$stmt->bindValue(':tel', $tel, PDO::PARAM_STR);
$stmt->bindValue(':category', $category, PDO::PARAM_STR);
$stmt->bindValue(':star', $star, PDO::PARAM_STR);
$stmt->bindValue(':comment', $comment, PDO::PARAM_STR);
$status = $stmt->execute(); //実行

//４．データ登録処理後
if ($status === false) {
    sql_error($stmt);
} else {
    redirect('spot_toukou_list.php');
}
