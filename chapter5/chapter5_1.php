<?php

    /*
    組み込み関数について
    ・関数とは・・・引数を与えることによって決められた処理を行い、
    　その結果（戻り値）を返す仕組み
    */
    
    mb_internal_encoding('UTF-8');
    $book_name = 'Laravel';

    //文字列関連の組み込み関数
    //文字列の長さを取得
    print mb_strlen($book_name);

    //文字列を小文字に変換する
    print strtolower($book_name);

    //文字列を大文字に変換する
    print strtoupper($book_name);

    //部分文字列を取得する(4文字目から2文字取得)
    print mb_substr($book_name, 3, 2);

    //部分文字列を置換する
    $content  = '  にわにわにわとりがいっぱいいる！';
    print str_replace('にわ', 'ニワ', $content, $cnt);
    print $cnt;

    //文字列を特定の区切り文字で分割する
    print_r (explode('a', $book_name));

    //特定の文字位置を検索する( 先頭文字が0)
    print mb_strpos($book_name, 'a');

    ///配列関係の組み込み関数
    //配列の要素数を取得する
    $data1 = ['京都', '大阪', ' 奈良'];
    print count($data1);//3

    //配列の内容を連結する
    $array1 = [1, 2, 3];
    $array2 = [4, 5, 6];
    $result1 = array_merge($array1, $array2);

    print_r($result1);//[]
    //配列の内容を連結する(値の上書きされる)
    $array3 = ['りんご' => '赤', 'バナナ' => '黄'];
    $array4 = ['りんご' => '緑','メロン' => '緑', 'グレープフルーツ' => '白'];
    $result2 = array_merge($array3, $array4);
    print_r($result2);
    //結果 Array ( [りんご] => 緑 [バナナ] => 黄 [メロン] => 緑 [グレープフルーツ] => 白 )

    //配列の内容を連結する(値の上書きされず配列で表示される)
    $array5 = ['りんご' => '赤', 'バナナ' => '黄'];
    $array6 = ['りんご' => '緑','メロン' => '緑', 'グレープフルーツ' => '白'];
    $result3 = array_merge_recursive($array5, $array6);
    print_r($result3);
    //結果 Array ( [りんご] => Array ( [0] => 赤 [1] => 緑 ) [バナナ] => 黄 [メロン] => 緑 [グレープフルーツ] => 白 ) 

    //配列の各要素を結合する
    $data2 = ['PHP', 'Ruby', 'Python'];
    print implode(',', $data2);//PHP,Ruby,Python

    //配列の末尾に要素を追加する
    $data3 = [1, 2, 3];
    print array_push($data3, 4, 5);// 要素数5
    print_r ($data3);//Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 )

    //配列の末尾の要素を削除する
    $data4 = [1, 2, 3];
    print array_pop($data4);//削除するもの 3
    print_r ($data4);//Array ( [0] => 1 [1] => 2 )

    //配列の先頭から要素を削除する
    $data5 = [1, 2, 3];
    print array_shift($data5);//　1
    print_r ($data5);//Array ( [0] => 2 [1] => 3 )

    //配列の先頭に要素を追加する
    $data6 = [1, 2, 3];
    print array_unshift($data6, 4, 5);// 5
    print_r($data6);//Array ( [0] => 4 [1] => 5 [2] => 1 [3] => 2 [4] => 3 )

    /*
    　・スタックとキュー
        スタックとは、後入れ先出しまたは先入れ後出しと呼ばれる構造のこと。
        これは、array_push関数で末尾に追加し、array_pop関数で末尾から削除することで実現できる。

        キューとは、先入れ先出しと呼ばれる構造のこと。
        これは、array_push関数で末尾に追加し、array_shift関数で先頭から要素を取り出すことで実現できる。
        これらは実践的なアプリケーションを構築していく中で頻繁に登場する用語である。
    */
    
    //配列の複数要素を置換する
    $data7 = ['A', 'B', 'C', 'D', 'E', 'F'];
    print_r (array_splice($data7, 2, 2, ['G', 'H']));//結果 Array ( [0] => C [1] => D )
    print_r ($data7);
    //結果 Array ( [0] => A [1] => B [2] => G [3] => H [4] => E [5] => F )

    //配列の複数要素を置換する
    $data8 = ['A', 'B', 'C', 'D', 'E', 'F'];
    print_r (array_splice($data8, -2, -2, ['G', 'H']));//結果 Array ( ) 
    print_r ($data8);
    //結果 Array ( [0] => A [1] => B [2] => C [3] => D [4] => G [5] => H [6] => E [7] => F )

    //配列の複数の要素を削除
    $data9 = ['A', 'B', 'C', 'D', 'E', 'F'];
    print_r (array_splice($data9, 3));//結果 Array ( [0] => D [1] => E [2] => F ) 
    print_r ($data9);
    //結果 Array ( [0] => A [1] => B [2] => C )

    // 配列に新たな要素を挿入する
    $data10 = ['A', 'B', 'C', 'D', 'E', 'F'];
    print_r (array_splice($data10, 2, 3, ['G', 'H']));//結果 Array ( [0] => C [1] => D [2] => E )
    print_r ($data10);
    //結果  Array ( [0] => A [1] => B [2] => G [3] => H [4] => F )

    //配列から特定範囲の要素を取得する
    $data11 = ['A', 'B', 'C', 'D', 'E', 'F'];
    print_r (array_slice($data11, 2, 3));
    //結果 Array ( [0] => C [1] => D [2] => E )

    //配列から特定範囲の要素を取得した結果、インデックス番号を引き継ぐ
    $data12 = ['A', 'B', 'C', 'D', 'E', 'F'];
    print_r (array_slice($data12, 2, 3, true));
    //結果 Array ( [2] => C [3] => D [4] => E )

    //配列から特定範囲の要素を指定した位置から末尾まで取得
    $data13 = ['A', 'B', 'C', 'D', 'E', 'F'];
    print_r (array_slice($data13, 2));
    //結果 Array ( [0] => C [1] => D [2] => E [3] => F )

    //配列内容を検索する
    $language = ['PHP', 'Ruby', 'Python', 'MySQL'];
    var_dump(array_search('Python', $language));
    //結果 int(2)  要素を見つかった位置を返す

    //配列に特定の要素が存在するか確認する
    if(!array_search('Java', $language)){
        print '見つかりません！';
    }//結果 見つかりません！

    //配列の内容を並び替える
    $sport = ['Tennis', 'Basketball', 'Soccer'];
    sort($sport, SORT_STRING);//通常配列のみ
    print_r($sport);
    //結果 昇順 Array ( [0] => Basketball [1] => Soccer [2] => Tennis ) 

    $sport = ['Tennis', 'Basketball', 'Soccer'];
    rsort($sport, SORT_STRING);//通常配列のみ
    print_r($sport);
    //結果 降順 Array ( [0] => Tennis [1] => Soccer [2] => Basketball )
    
?>