<?php

    //クラス
    class Person {
        //プロパティ
        public $firstName;
        public $lastName;

        //コンストラクタ・・・プロパティの初期化など
        public function __construct(string $firstName, string $lastName){
            $this->firstName = $firstName;
            $this->lastName = $lastName;
        }

        //メソッド
        public function show(){
            print "<p> 私の名前は{$this->lastName}{$this->firstName}</p>";
        }
    }

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