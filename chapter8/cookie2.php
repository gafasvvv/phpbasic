<?php
    //setcookie関数はすべての出力に先立って指定する必要がある！
    //$name(クッキー名) $value(値) $expire(有効期限)を指定！
    //クッキーの問題点！
    //データがクライアント側で保存されるので、クライアントが改ざんしたり削除したりできてしまう！
    //クッキーはネットワーク上で受け渡しをするので、実データがネットワークに流れてしまう！
    //クッキーよりもセキュアなセッションを使うべきである
    setcookie('name', $_POST['name'], time() + (60 * 60 * 24 * 90));
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Cookie</title>
</head>
<body>
    クッキー保存完了！
</body>
</html>