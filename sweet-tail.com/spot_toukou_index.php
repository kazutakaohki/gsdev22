<!DOCTYPE html>
<html lang="ja">

<head>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>お出かけスポット情報登録</title>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <script src="js/index.js"></script>
    
</head>

<body>

    <!-- Head[Start] -->
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

    <div>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <p>お出かけスポット情報投稿</p>
                <div class="navbar-header"><a class="navbar-brand" href="spot_toukou_list.php">登録スポットリスト（会員のみ）</a></div>
            </div>
        </nav>
    </div>
    <!-- Head[End] -->

    <!-- Main[Start] -->
    <form method="post" action="spot_insert.php">
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

    <a href="index.php">TOPページに戻る</a>


</body>

</html>
