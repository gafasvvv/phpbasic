<?php

    /*
    * 正規表現(PCRE)とは・・・「曖昧な文字列のパターンを表現するための記法」
    * 例) 郵便番号 [0-9]{3}-[0-9]{4}
    * 目的
    * 　HTMLやテキストファイルなどの散文的なデータを、ある定型的な形で抽出し、データとしての洗練度を向上させること
    *   /~/で正規表現は囲む必要がある
    */
    
    //正規表現で文字列を検索する preg_match関数
    $str1 = '私の携帯番号は、0239-38-2846、郵便番号は869-5894です！';

    if(preg_match('/([0-9]{2,4})-([0-9]{2,4})-([0-9]{4})/', $str1, $data1)){
        print "電話番号: {$data1[0]}<br />";
        print "市外局番: {$data1[1]}<br />";
        print "市内局番: {$data1[2]}<br />";
        print "加入者番号: {$data1[3]}<br />";
    }
    /*
    *  結果: 
    *  電話番号: 0239-38-2846
    *  市外局番: 0239
    *  市内局番: 38
    *  加入者番号: 2846
    */

    //すべてのマッチ文字列を取得する preg_match_all関数
    $str2 = '私の携帯番号は、0239-38-2846、友達の携帯番号は、0256-56-1846、郵便番号は869-5894です！';

    if(preg_match_all('/([0-9]{2,4})-([0-9]{2,4})-([0-9]{4})/', $str2, $data2,PREG_SET_ORDER)){
        foreach($data2 as $item){
            // 取得結果をマッチ順で取得
            //PREG_SET_ORDERはマッチした塊ごとに生成される
            print "電話番号: {$item[0]}<br />";
            print "市外局番: {$item[1]}<br />";
            print "市内局番: {$item[2]}<br />";
            print "加入者番号: {$item[3]}<hr />";
        }
    }
    /*
        電話番号: 0239-38-2846
        市外局番: 0239
        市内局番: 38
        加入者番号: 2846
        ---------------------
        電話番号: 0256-56-1846
        市外局番: 0256
        市内局番: 56
        加入者番号: 1846
    */

//正規表現で文字列を置換する preg_replace関数
$msg = <<<EOD
Wantedly: https://www.wantedly.com/
<br />
Laravelドキュメント:　https://readouble.com/laravel/5.5/
<br />
EOD;
print preg_replace('|http(s)?://([\w-]+\.)+[\w-]+(/[\w- ./?%&=]*)?|',
'<a href="$0">$0</a>', $msg);
/*
    Wantedly: https://www.wantedly.com/ 
    Laravelドキュメント:　https://readouble.com/laravel/5.
*/

$today = '2019-03-18';
$result = preg_split('|[/.\-]|', $today);
print "{$result[0]}年{$result[1]}月{$result[2]}日";
//結果: 2019年03月18日



?>