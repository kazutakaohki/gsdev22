<link rel="stylesheet" href="style.css">

<html>

<head>
    <meta charset="utf-8">

    <title>スポット登録</title>
</head>

<body>


<p>1.写真を登録する</p>

<p>2.スポット情報を登録する</p>
    <form action="spot_touroku.php" method="post">
        <ul>
        <li>
        <label for="namae">スポット名：</label>
        <input type="text" name="namae">
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
    </form>
<p>3.おすすめ情報を登録する</p>
<form action="spot_touroku.php" method="post">
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
        <input type="submit" value="登録">
        </li>
        </ul>
    </form>
    <ul>
        <li><a href="index.php">index.php</a></li>
    </ul>
</body>

</html>
