<html>

<head>
    <meta charset="utf-8">
    <style>
        .menu {
            background-color: #2FA6E9;
        }

    </style>
</head>

<body>
    <div class="menu">
        <h3>menu</h3>
        <ul>
            <li>PHPファイルとJS/CSSの動きを知る。</li>
        </ul>
    </div>

    <?php
    
    echo '<p class="red"> css test </p>';
    echo '<p id="test"> JS test </p>';
    ?>

<style>
    .red{
        color: red;
    }
</style>

<script>
    // $("#test")
    let test = document.getElementById("test");
    console.log(test);
</script>

</body>

</html>