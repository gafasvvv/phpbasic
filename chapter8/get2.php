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
    <p>名前：<?=e($_GET['name']) ?></p>
    <!-- http://localhost:8000/chapter8/get2.php?name=test -->
</body>