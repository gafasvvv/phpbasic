<?php

    //演算子とは・・・与えられた変数やリテラルに対して、あらかじめ決められた処理を行う記号

    //代数演算子
        $a = 10;
        $b = $a++; //後置演算
        print $a; //結果: 11
        print $b; //結果: 10

    /* 
        ・比較演算子
        ・a == b  ：左辺と右辺が等しい　true
        ・a === b ：左辺と右辺が等しいかつ型が同じ true(等価演算子)
        ・a != b  ：左辺と右辺が等しくない　true
        ・a !== b ：左辺と右辺が等しくないかつ型が違う　true
        ・a <= b  ：左辺が右辺以下　true
        ・a >= b  ：左辺と右辺以上　true
        ・条件式 ? 式1 : 式2 : 条件式がtrueのときは式1で条件式がfalseのときは式2（条件演算子）
        ・a ?? b   : 左辺がnullでなければその値、左辺がnullなら右辺の値、左辺も右辺もnullならnull（null合体演算子）

        ・論理演算子 $aがtrue,$bがfalse
        $a && $b  //論理積　false
        $a and $b //論理積　false
        $a || $b  //論理和　true
        $a or $b  //論理和　true
        $a xor $b //排他的論理和　左右の式がいずれかがtrueで、かつ双方ともtrueではない場合にtrue
        !$a　     //否定 false

    */
    //条件演算子 ?:
    $score1 = 98;
    $score2 = 60;
    print $score1 > $score2 ? "おめでとう！" : "残念！"; //結果: おめでとう！

    //条件演算子の省略構文 ?:
    //式1がtrueに変換できるなら式1、そうでなければ式2
    $message1 = '';
    $message2 = 'おやすみ';
    print $message1 ?: $message2;//結果: おやすみ

    //null合体演算子 ??
    print 15 ?? 10;//結果: 15
    print null ?? 10;//結果: 10
    print null ?? null;//結果: null

    //条件演算子を列挙する場合
    print 'おはよう' ? 'Hello' : 'Bye' ? 'OK' : 'NG';

?>