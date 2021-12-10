// ここからコードを書きます🤗

// alert(111);

// 演習1
console.log("初めてのジャバスクリプト");

// 演習2
console.log(3 + 5, "1問目");
console.log(2000 - 1800, "2問目");
console.log("18＋5", "3問目");

// 変数

const ohki = "大木";
const name = "おおき";
const num = 1;

console.log(ohki, "4問目");
console.log(name, "5問目");
console.log(num, "6問目");

// 演習4
const point = 90;

if (point > 80) {
  console.log("素晴らしい！おめでとうございます！");
} else {
  console.log("もっと頑張りましょう");
}

// 演習（ランダム関数）

// <button id="aa">ボタン</button>
$("#aa").on("click", function () {
  const random = Math.floor(Math.random() * 5);
  console.log(random, "ランダムな数字");

  if (random === 0) {
    $("h1").html("大吉");
    $("h1").css("color", "red");
    console.log("大吉");
  } else if (random === 1) {
    $("h1").html("凶");
    $("h1").css("color", "black");
    console.log("凶");
  } else if (random === 2) {
    $("h1").html("小吉");
    $("h1").css("color", "green");
    console.log("小吉");
  } else if (random === 3) {
    $("h1").html("中吉");
    $("h1").css("color", "orange");
    console.log("中吉");
  } else if (random === 4) {
    $("h1").html("ミラクル");
    $("h1").css("color", "blue");
    console.log("ミラクル");
  }
});
