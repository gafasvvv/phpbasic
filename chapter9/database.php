<?php

    function getDb(){
        //データベースへの接続
        $dsn = 'mysql:dbname=phpbasic;host=127.0.0.1;charset=utf8';
        $user = 'root';
        $password = 'password';

        try{
            $db = new PDO($dsn, $user, $password);
            print 'データベースに接続できましたよ！';
        } catch(PDOException $e) {
            print "接続エラー: {$e->getMessage()}";
        }finally {
            $db  = null;
        }
    }