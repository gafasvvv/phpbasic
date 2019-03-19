<?php
    require_once './database.php';

    try {
        $db = getDb();
        $stt = $db->prepare('INSERT INTO book(title, price) VALUES (:title, :price)');
        $stt->bindValue(':title', $_POST['title']);
        $stt->bindValue(':price', $_POST['price']);
        $stt->execute();
        //処理成功時はフォームにリダイレクト！
        header('Location: http://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']).'/insert_form.php');
    } catch(PDOException $e) {
        print "エラーメッセージ:{$e->getMessage()}";
    };
?>