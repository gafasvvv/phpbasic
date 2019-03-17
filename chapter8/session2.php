<?php
    session_start();
    $_SESSION['name'] = $_POST['name'];
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Session</title>
</head>
<body>
     セッション保存しました！
</body>
</html>