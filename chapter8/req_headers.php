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
    <!-- $_SERVER -->
    <?php
        foreach($_SERVER as $key => $value){
            if(mb_stripos($key, 'HTTP_') === 0){
    ?>
        <?= e($key) ?><br />
        <?= e($value) ?>
    <?php

            }
        }
    ?>
    
    <!-- 結果:
    HTTP_HOST
    localhost:8000 HTTP_CONNECTION
    keep-alive HTTP_CACHE_CONTROL
    max-age=0 HTTP_UPGRADE_INSECURE_REQUESTS
    1 HTTP_USER_AGENT
    Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.121 Safari/537.36 HTTP_ACCEPT
    text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8 HTTP_ACCEPT_ENCODING
    gzip, deflate, br HTTP_ACCEPT_LANGUAGE
    ja-JP,ja;q=0.9,en-US;q=0.8,en;q=0.7 -->
</body>
</html>