<?php

/*
　リクエスト情報・・・クライアントからサーバに送信される情報のこと
　HTTP・・・サーバとクライアントがお互いの通信をするときのプロトコルのこと
　
*/
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>PHP</title>
</head>
<body>
    <!-- $_POST -->
    <form method="POST" action="post2.php">
        <label for="name">名前</label>
        <input id="name" type="text" name="name" size="15"/>
        <input id="java" type="checkbox" name="arch[]" value="Java" />
        <label for="java">Java</label>
        <input id="ruby" type="checkbox" name="arch[]" value="Ruby" />
        <label for="ruby">Ruby</label>
        <input id="php" type="checkbox" name="arch[]" value="PHP" />
        <label for="php">PHP</label>
        <input id="python" type="checkbox" name="arch[]" value="Python" />
        <label for="python">Python</label>
        <input type="submit" value="送信" />
    </form>
</body>
</html>