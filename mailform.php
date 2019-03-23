<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
            mb_language("Japanese");
            mb_internal_encoding("UTF-8");

            $email = "test1@example.com";
            $to = $_POST['to'];
            $title = $_POST['title'];
            $body = $_POST['body'];
            $header = "From: $email\nReply-To: $email\n";

            if(mb_send_mail($to, $title, $body, $header)){
                echo 'メールを送信しました！';
            } else {
                echo 'メール送信できませんでした！';
            }
        ?>
    </body>
</html>