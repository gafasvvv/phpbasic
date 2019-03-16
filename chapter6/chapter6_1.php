<?php

    //ユーザ定義関数
    //スクリプトの外部化では、require_onceを使用する
    function getRectangleArea(float $length,float $width,float $height): float{
        return $length * $width * $height;
    }
    $area1 = getRectangleArea(5, 8, 10);
    print "四角形の面積は{$area1}です。<br />";
    //結果 四角形の面積は400です。

    // 「...」演算子による引数のアンパック
    //配列を個々の値に展開できる
    print getRectangleArea(...[4, 6, 8]);
    //結果 192

    //可変関数とは、$変数名()で呼び出せる関数のこと
    $name = 'getRectangleArea';
    $area2 = $name(4, 9, 2);
    print "四角形の面積は{$area2}です。<br />";
    //結果 四角形の面積は72です。

    /*スコープとは、スクリプトの中での変数の有効範囲のこと
    　グローバルスコープは、スクリプト全体から参照でき、ローカルスコープは、定義された関数の中でのみ参照できる
    　グローバル変数は、グローバルスコープを持つ変数で、ローカル変数は、ローカルスコープを持つ変数
    　関数内でグローバル変数を利用するglobal命令 global $x
    　静的変数 static命令 static $y　関数の初回呼び出し時にのみ初期化され、その後、関数の処理が終了しても維持される。ローカル変数である。
    */

?>