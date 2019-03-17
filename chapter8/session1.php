<?php
    //セッションがクッキーとは違う点！
    //・データがサーバー側で管理されていること
    //・ネットワーク上を実データが流れない
    require_once './Encode.php';
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Session</title>
</head>
<body>
    <!-- $_SESSION -->
    <form method="POST" action="session2.php">
        <label for="name">名前</label>
        <input id="name" type="text" name="name" size="15"
            value="<?=e($_SESSION['name'] ?? '')?>"/>
        <input type="submit" value="送信" />
    </form>
</body>
</html>