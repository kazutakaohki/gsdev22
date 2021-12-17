$("#add").on("click", function () {
  const key = $("#key").val();
  console.log(key);

  const value = $("#value").val();
  console.log(value);

  localStorage.setItem(key, value);

  const html = `
    <tr>
        <th>${key}</th>
        <td>${value}</td>
        <td id="delete"><button>削除</button></td>

    </tr>
    `;

  // htmlに表示
  $("#list").append(html);
});

//ページ読み込み：保存データ取得表示

for (let i = 0; i < localStorage.length; i++) {
  const key = localStorage.key(i);
  const value = localStorage.getItem(key);
  //   一覧表示
  const html = `
          <tr>
              <th>${key}</th>
              <td>${value}</td>
              <td id="delete"><button>削除</button></td>

          </tr>
          `;

  // htmlに表示

  $("#list").append(html);
}

// 削除
$("tr").on("click", function () {
  const vvv = $(this).children("th").text();
  console.log(vvv, "thisをチェック");

  localStorage.removeItem(vvv);

  $(this).empty();
});

$("delete").on("click", function () {
  alert("sakujo");
});
