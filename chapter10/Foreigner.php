<?php
    require_once 'Person.php';

    class Foreigner extends Person {
        //新たに追加したmiddleNameプロパティ
        public $middleName;

        //スーパークラスのコンストラクタをオーバーライド
        public function __construct(string $firstName, string $middleName, string $lastName){
            //スーパークラスのコンストラクタの呼び出し
            parent::__construct($firstName, $lastName);
            //独自のmiddleNameプロパティの初期化
            $this->middleName = $middleName;
        }

        public function introduce(){
            print "私の名前は、{$this->lastName}・{$this->middleName}・{$this->firstName}";
        }
    }