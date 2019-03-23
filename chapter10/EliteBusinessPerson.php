<?php

    require_once 'BusinessPerson.php';

    class EliteBusinessPerson extends BusinessPerson{

        //BusinessPersonクラスのメソッドのオーバーライド
        public function work(){
            print "<p>{$this->type}系の{$this->company}企業でバリバリ働いています！</p>";
        }
    }