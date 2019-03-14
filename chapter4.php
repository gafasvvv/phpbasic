<?php

    //if文（条件分岐）
    //単純分岐（簡単な自動販売機）
    $money = 120;
    if ($money > 100){
        print 'お買い上げありがとうございます！';
    } else {
        print 'お金が足りません！';
    }
    //結果: お買い上げありがとうございます！
    
    //多岐分岐(大学の成績結果)
    $result = 78;
    if ($result >= 90){
        print '秀';
    } elseif ($result >= 80){
        print '優';
    } elseif ($result >= 70){
        print '良';
    } elseif ($result >= 60){
        print '可';
    } else {
        print '落第';
    }
    //結果: 良

    //入れ子構造(ネスト)
    //関西人かどうか判定
    $birth = '関東';
    $sex = '男性';
    if($birth == '関西'){
        if($sex == '男性'){
            print  $birth.'の'.$sex;
        }else{
            print $birth.'の'.$sex;
        }
    } else {
        print '関西人ではないぞ！';
    }
    //結果: 関西人ではないぞ！

    //switch構文
    //関西or関東？？？
    $birth = '神奈川';
    switch ($birth){
        case '大阪':
        case '滋賀':
        case '京都':
        case '和歌山':
        case '兵庫':
        case '奈良':
        print '関西出身';
        break;
        case '東京':
        case '千葉':
        case '神奈川':
        case '茨城':
        case '群馬':
        case '栃木':
        case '埼玉':
        print '関東出身';
        break;
    }
    //結果: 関東出身

    //foreach文(指定された配列/連想配列の要素を要素を取り出して先頭から順番に処理する。)
    $fruits = [
        'バナナ' => 98,
        'りんご' => 198,
        'みかん' => 298,
        'いちご' => 398,
        'メロン' => 598,
    ];
    foreach($fruits as $key => $value){
        print "{$key}は{$value}円です。";
    }
    //結果: バナナは98円です。りんごは198円です。みかんは298円です。いちごは398円です。メロンは598円です。

    //for文を使った九九表
    print "<br />";
    for ($i=1; $i<=9; $i++ ){
        print $i;
    }
    print "<br />";
    for ($i=2; $i<=18; $i+=2){
        print $i;
    }
    print "<br />";
    for ($i=3; $i<=27; $i+=3){
        print $i;
    }
    print "<br />";
    for ($i=4; $i<=36; $i+=4){
        print $i;
    }
    print "<br />";
    for ($i=5; $i<=45; $i+=5){
        print $i;
    }
    print "<br />";
    for ($i=6; $i<=54; $i+=6){
        print $i;
    }
    print "<br />";
    for ($i=7; $i<=63; $i+=7){
        print $i;
    }
    print "<br />";
    for ($i=8; $i<=72; $i+=8){
        print $i;
    }
    print "<br />";
    for ($i=9; $i<=81; $i+=9){
        print $i;
    }

?>