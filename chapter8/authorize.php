<?php

    // 強制的にログイン認証ダイアログを表示させて確認！
    if(!isset($_SERVER['PHP_AUTH_USER'])){
        header('HTTP/1.1 401 Unauthorized');
        header('www-Authenticate: Basic realm="SelfPHP"');
        print 'この画面へのアクセスは認められません！';
        die();
    } else {
        if($_SERVER['PHP_AUTH_USER'] === 'admin_user' &&
            $_SERVER['PHP_AUTH_PW'] === 'admin_pass'){
                print '認証成功しました！';
        } else {
            print 'ユーザー名またはパスワード間違っています！';
        }
    }