<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>お出かけスポット情報登録</title>
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
                <div class="navbar-header"><a class="navbar-brand" href="select.php">お出かけスポット情報登録</a></div>
            </div>
        </nav>
    </header>
    <!-- Head[End] -->

    <!-- Main[Start] -->
    <form method="post" action="insert.php">
        <div class="jumbotron">
            <fieldset>
                <legend>1.画像を登録する</legend>
                <label>画像：<input type="text" name="pic"></label><br>

                <input type="submit" value="送信">
            </fieldset>

            <fieldset>
            <legend>2.スポット情報を登録する</legend>
                <ul>
                <li>
                <label for="namae">スポット名：</label>
                <input type="text" name="name">
                </li>
                <li>
                <label for="address">住　　　所：</label>
                <input type="text" name="address">
                </li>
                <li>
                <label for="tel">電　　　話：</label>
                <input type="text" name="tel">
                </li>
                <li>
                <label for="category">カテゴリー：</label>
                <select name="category">
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
                <select type="text" name="star">
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
                <textarea type="text" name="comment" id="comment" cols="30" rows="10"></textarea>
                </li>
                <li>
        </li>
        </ul>
            </fieldset>
            <input type="submit" value="登録">
        </div>
    </form>
    <!-- Main[End] -->


</body>

</html>


<!-- ↓ スポット情報登録フォームサンプル -->
