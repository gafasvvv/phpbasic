<?php

    //継承元　スーパークラス
    //クラス
    class Person {
        //プロパティ
        protected $firstName;
        protected $lastName;

        //コンストラクタ・・・プロパティの初期化など
        public function __construct(string $firstName, string $lastName){
            $this->firstName = $firstName;
            $this->lastName = $lastName;
        }

        //メソッド
        //自己紹介
        public function introduce(){
            print "私の名前は、{$this->lastName}{$this->firstName}";
        }
    }