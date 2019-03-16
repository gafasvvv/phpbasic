<?php

    require_once './vendor/autoload.php';
    $s = new Smarty();
    $s->template_dir = './templates/';
    $s->compile_dir = './templates_c/';
    $s->assign([
        'greeting' => 'おはよう！',
        'message' => '明日は梅田駅に１１時集合だよ！',
        ]);
    $s->display('smarty_basic.tpl');

?>