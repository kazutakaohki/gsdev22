<!DOCTYPE html>
<html lang="ja">
  <!-- 最初の設定は終わっています　必要な方は触ってください -->

  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Sweet-Tail</title>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <script src="js/index.js"></script>
  </head>
  <!-- 最初の設定は終わっています　必要な方は触ってください -->

  <body class="all">
    <!-- ヘッダー　ここから -->

    <header>
      <div class="flex header_yohaku">
        <img src="img/sweettail_logo_white.png" alt="サイトロゴ" class="logo" />
        <nav>
          <ul class="flex">
            <li class="header_list"><a href="#kensaku">検索する</a></li>
            <li class="header_list"><a href="/sweet-tail.com/spot_toukou_index.php">投稿する</a></li>
            <li class="header_list"><a href="#mypage">マイページ</a></li>
            <li class="header_list"><a href="/sweet-tail.com/user_toukou_index.php">ユーザー登録</a></li>
            <li class="header_list"><a href="#login">ログイン</a></li>
          </ul>
        </nav>
      </div>
    </header>

    <!-- ヘッダー　ここまで -->

    <main>
      <!-- TOP画像 ここから-->

      <section id="top">
        <img src="img/img_top.png" alt="TOP画像" class="top_img" />
      </section>

      <!-- TOP画像　ここまで -->

      <!-- 検索する ここから -->

      <section id="kensaku" class="search">
        <div class="kensaku_wrapper">
          <input
            type="text"
            placeholder="キーワードでお出かけスポットを検索する"
            class="input"
          />
          <p class="update">検索</p>
        </div>
        <div class="kensaku_wrapper">
          <input
            type="text"
            placeholder="現在地周辺のスポットを検索する"
            class="input"
          />
          <p class="update">検索</p>
        </div>
        <ul class="kensaku_btn">
          <div class="kensaku_pics">
            <li>
              <img src="img/area.png" alt="エリアで検索" />
              <div class="kensaku_item">エリアで検索</div>
            </li>
          </div>

          <div class="kensaku_pics">
            <li>
              <img src="img/genre.png" alt="ジャンルで検索" />
              <div class="kensaku_item">ジャンルで検索</div>
            </li>
          </div>

          <div class="kensaku_pics">
            <li>
              <img src="img/jouken.png" alt="条件指定で検索" />
              <div class="kensaku_item">条件指定で検索</div>
            </li>
          </div>
        </ul>
      </section>

      <!-- 検索する ここまで -->
    </main>

    <!-- Google Map エリアここから -->
    <input
      id="pac-input"
      class="controls"
      type="text"
      placeholder="Search Box"
    />
    <div id="map"></div>

    <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
    <script
      src="https://maps.googleapis.com/maps/api/js?key=YOUR API KEY&callback=initAutocomplete&libraries=places&v=weekly"
      async
    ></script>
    <!-- Google Map エリアここまで -->

    <!-- フッター　ここから -->
    <footer class="footer text-center">
      <small class="copyrights"
        >copyrights 2022 Sweet-Tail All RIghts Reserved.</small
      >
      <!-- フッター　ここまで -->
    </footer>
  </body>
</html>
