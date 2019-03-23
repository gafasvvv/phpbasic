<?php
    // //継承元をインポート
    require_once 'Person.php';

    // //スーパークラスをただ単に継承しているサブクラスを作成
    class BusinessPerson extends Person {
        
        //プロパティ
        protected $type;
        protected $company;

        //コンストラクタ・・・プロパティの初期化など
        public function __construct(string $type, string $company){
            $this->type = $type;
            $this->company = $company;
        }

        //どんな仕事なのか
        public function work(){
            print "<p>{$this->type}系の{$this->company}企業で働いています！</p>";
        }

    }

    // require_once 'IPerson.php';
    // class BusinessPerson implements IPerson {

    //     //プロパティを定義
    //     private $firstName;
    //     private $lastName;

    //     //コンストラクタでプロパティを定義
    //     public function __construct(string $firstName, string $lastName){
    //         $this -> firstName = $firstName;
    //         $this -> lastName = $lastName;
    //     }

    //     //IPerson::getAreaメソッドを実装
    //     public function introduce(){
    //         print "私の名前は、{$this->lastName}{$this->firstName}";
    //     }
    // } 

