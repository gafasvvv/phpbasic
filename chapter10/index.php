<?php
    require_once 'EliteBusinessPerson.php';
    require_once 'CrazyBusinessPerson.php';
    require_once 'Foreigner.php';

    //コンストラクタなしの場合
    // $person = new Person();
    // $person->lastName = '斎藤';
    // $person->firstName = '匠';
    // $person->show();

    //スーパークラスPerson
    //コンストラクタがある場合
    $person = new Person('かんな', 'はしもと');
    $person->introduce();

    //インターフェイスで作成したクラスを呼び出し！
    $person = new BusinessPerson('だいすけ', 'みやがわ');
    $person->introduce();

    //継承元PersonクラスのサブクラスBusinessPerson
    $person = new BusinessPerson('SIer', '大手');
    $person->work();

    //BusinessPersonクラスのメソッドのオーバーライド
    $person = new EliteBusinessPerson('Web', 'ベンチャー');
    $person->work();

    //スーパークラスのBusinessPersonクラスのWorkメソッドをオーバーライド
    $person = new CrazyBusinessPerson('Web', 'スタートアップ');
    $person->work();

    $person = new Foreigner('クリス', 'トーマス', 'ジョンソン');
    $person->introduce();

    $person = new BusinessPerson('SIer', '大手');
    $person->introduce();