<?php
    require_once './Encode.php'
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>PHP</title>
</head>
<body>
    <p>名前：<?=e($_POST['name']) ?></p>
    <p>選択したのは<?=e(implode(',', $_POST['arch'])) ?>です。</p>
</body>