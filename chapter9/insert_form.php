<?php
    require_once './database.php';
    require_once './Encode.php';
    $db = getDb();
?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Database</title>
</head>
<body>
    <form method="POST" action="insert_process.php">
        <label for="title">本の名前</label>
        <input id="title" type="text" name="title" size="30" />
        <label for="price"> 値段</label>
        <input id="price" type="text" name="price" size="11" />
        <input type="submit" value="送信" />
    </form>
</body>
</html>