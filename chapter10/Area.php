<?php

    class Area{
        //静的メソッド
        public static function square(float $width, float $length): float {
            return $width * $length;
        }

        //クラス定数　参照するには「::」演算子を使う！
        //クラスに関連する定数をまとめて管理できるのがいいところ！
        const PI = 3.14;
        public static function circle(float $radius): float {
            return pow($radius, 2) * self::PI;
        }
    }
    //静的メソッドはインスタンスを生成せずにクラスから直接呼び出せるメソッドのこと！
    //これに対してインスタンスメソッドはオブジェクト経由で呼び出すインスタンスメソッド！
    print '四角形の面積：'.Area::square(10, 5).'cm^2';

    //クラス定数　参照するには「::」演算子を使う！
    print '円周率は'.Area::PI.'<br />';
    print '円の面積は'.Area::circle(20).'cm^2';