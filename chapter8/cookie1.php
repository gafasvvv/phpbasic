<?php
    //Cookieとは、クライアント側で保存可能なテキストのこと。
    //HTTPは状態の保存できないステートレスなプロトコルである。
    require_once './Encode.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Cookie</title>
</head>
<body>
    <!-- $_COOKIE -->
    <form method="POST" action="cookie2.php">
        <label for="name">名前</label>
        <input id="name" type="text" name="name" size="15"
            value="<?=e($_COOKIE['name'] ?? '')?>"/>
        <input type="submit" value="送信" />
    </form>
</body>
</html>