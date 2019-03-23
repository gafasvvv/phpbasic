<?php
    require_once 'Mail.php';

    $m = new Mail();

    $m->to = 'ryosuke.sugihara.0613@gmail.com';
    $m->subject = 'テストメール';
    $m->message = 'おはよう！';
    $m->From = 'admin@example.com';
    $m->X_Mailer = 'MyMail 1.0';
    $m->X_Priority = 1;
    $m->X_MSMail_Priority = 'High';
    $m->send();