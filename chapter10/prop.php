<?php
    require_once 'Person.php';

    //コンストラクタなしの場合
    // $person = new Person();
    // $person->lastName = '斎藤';
    // $person->firstName = '匠';
    // $person->show();

    //コンストラクタがある場合
    $person = new Person('かんな', '橋下');
    $person->show();

    //静的メソッドはインスタンスを生成せずにクラスから直接呼び出せるメソッドのこと！
    //これに対してインスタンスメソッドはオブジェクト経由で呼び出すインスタンスメソッド！
    print '四角形の面積：'.Area::square(10, 5).'cm^2';

    //クラス定数　参照するには「::」演算子を使う！
    print '円周率は'.Area::PI.'<br />';
    print '円の面積は'.Area::circle(20).'cm^2';