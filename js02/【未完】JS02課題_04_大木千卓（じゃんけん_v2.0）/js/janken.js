// 自分が選んだ「手」を下に画像表示する

$("#gu_pic").on("click", function () {
  $("#me").html('<img src="./img/gu.png">');
});

$("#cho_pic").on("click", function () {
  $("#me").html('<img src="./img/choki.png">');
});

$("#par_pic").on("click", function () {
  $("#me").html('<img src="./img/pah.png">');
});

//　グーを選んだ場合

$("#gu_pic").on("click", function () {
  var comp = Math.floor(Math.random() * 3 + 1);

  if (comp == 1) {
    $("#pc").html('<img src="./img/gu.png">');
    $("#result").text("あいこです");
    const value = $("#result").val();
    console.log(value);
  } else if (comp == 2) {
    $("#pc").html('<img src="./img/choki.png">');
    $("#result").text("あなたの勝ちです");
    const value = $("#result").val();
    console.log(value);
  } else if (comp == 3) {
    $("#pc").html('<img src="./img/pah.png">');
    $("#result").text("あなたの負けです");
    const value = $("#result").val();
    console.log(value);
  }
});

// チョキを選んだ場合

$("#cho_pic").on("click", function () {
  var comp = Math.floor(Math.random() * 3 + 1);

  if (comp == 1) {
    $("#pc").html('<img src="./img/gu.png">');
    $("#result").text("あなたの負けです");
  } else if (comp == 2) {
    $("#pc").html('<img src="./img/choki.png">');
    $("#result").text("あいこです");
  } else if (comp == 3) {
    $("#pc").html('<img src="./img/pah.png">');
    $("#result").text("あなたの勝ちです");
  }
});

// パーを選んだ場合

$("#par_pic").on("click", function () {
  var comp = Math.floor(Math.random() * 3 + 1);
  if (comp == 1) {
    $("#pc").html('<img src="./img/gu.png">');
    $("#result").text("あなたの勝ちです");
  } else if (comp == 2) {
    $("#pc").html('<img src="./img/choki.png">');
    $("#result").text("あなたの負けです");
  } else if (comp == 3) {
    $("#pc").html('<img src="./img/pah.png">');
    $("#result").text("あいこです");
  }
});

//データの保存
localStorage.setItem("data1", "hoge");
localStorage.setItem("data2", "fuga");

for (var i = 0; i < localStorage.length; i++) {
  console.log(localStorage.key(i));
}

//結果
// data1;
// data2;
