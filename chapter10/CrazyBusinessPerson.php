<?php

    require_once 'BusinessPerson.php';

    class CrazyBusinessPerson extends BusinessPerson {

        //スーパークラスのBusinessPersonクラスのWorkメソッドをオーバーライド
        public function work(){
            //スーパークラスのBusinessPersonクラスのWorkメソッドを呼びせて
            //独自の処理を追加できる！
            print '朝から晩まで';
            parent::work();
        } 
    }