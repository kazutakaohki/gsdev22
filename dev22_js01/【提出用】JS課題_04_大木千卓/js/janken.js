$("#gu_pic").on("click", function () {
  $("#me").html('<img src="./img/gu.png">');
});

$("#cho_pic").on("click", function () {
  $("#me").html('<img src="./img/choki.png">');
});

$("#par_pic").on("click", function () {
  $("#me").html('<img src="./img/pah.png">');
});

$("#gu_pic").on("click", function () {
  var humanGu = 1;
  var comp = Math.floor(Math.random() * 3 + 1);

  if (comp == 1) {
    $("#pc").html('<img src="./img/gu.png">');
    $("#result").text("あいこです");
  } else if (comp == 2) {
    $("#pc").html('<img src="./img/choki.png">');
    $("#result").text("あなたの勝ちです");
  } else if (comp == 3) {
    $("#pc").html('<img src="./img/pah.png">');
    $("#result").text("あなたの負けです");
  }
});

$("#cho_pic").on("click", function () {
  var humaCho = 2;
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

$("#par_pic").on("click", function () {
  var humaPar = 3;
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

// test
