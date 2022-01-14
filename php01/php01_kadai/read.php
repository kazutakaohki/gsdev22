<link rel="stylesheet" href="style.css">
<html>



<head>
    <meta charset="utf-8">

    <title>登録済みスポットリスト</title>
</head>

<body>


<table>
    <tr>
    <th>登録日</th>
    <th>スポット名</th>
    <th>住所</th>
    <th>電話</th>
    <th>カテゴリー</th>
    <th>おすすめ度</th>
    <th>コメント</th>
    </tr>
<?php
$file = fopen("./data/data.txt","r");        
while(!feof($file)){
    $line = fgets($file);
    if (trim($line) != null){
        list($date,$name,$address,$tel,$category,$star,$comment) = explode("\t",$line);
        print "<tr>\n";
        print "<td>$date</td><td>$name</td><td>$address</td><td>$tel</td>";
        print "<td>$category</td><td>$star</td><td>$comment</td>\n";
        print "</tr>\n";
    }
}
fclose($file);
?>
</table>







<ul>
        <li><a href="index.php">index.php</a></li>
    </ul>

</body>

</html>