<?php

    //可変長引数の関数
    function sum1(float ...$args): float {
        //結果を格納するための変数
        $result = 0;
        //取得した引数を順に加算処理
        foreach($args as $arg){
            $result += $arg;
        }
        return $result;
    }
    print sum1(6, 5, 9);

    function replaceContents(string $path, string ...$args): string {
        //指定されたパスからファイルを読み込み
        $data = file_get_contents($path);
        //可変長引数を順番に処理し、{0},{1},・・・と置き換え
        for($i = 0; $i < count($args); $i++){
            $data = str_replace('{'.($i).'}', $args[$i], $data);
        }
        return $data;
    }
    print replaceContents('data.dat', 'りょうすけ', '2019年3月18日');
    // 結果 
    // りょうすけさま
    // ニュース2019年3月18日号をお届けします。
    // 本日は、りょうすけ様にお勧めの書籍を紹介いたします。

    //複数の戻り値
    function max_min(float ...$args): array {
        //最大値と最小値の順で配列を生成
        return [max($args), min($args)];
    }
    $result = max_min(29, 49, 89, 78, 97);
    print_r($result);//Array ( [0] => 97 [1] => 29 )

    //list命令は関数から返された配列の内容を変数に振り分ける
    list($max, $min) = max_min(49, 38, 78);
    print "最大値は{$max}で最小値は{$min}";//最大値は78で最小値は38

    //再帰関数
    //以下は自然数5の階乗
    function factorial(int $num): int {
        if($num !== 0){
            return $num * factorial($num - 1);
        }
        //再帰関数では終了点を作ること！無限ループになってしまうため！
        return 1;
    }
    print factorial(5);
    //結果 5 * 4 * 3 * 2 * 1 = 120

    //高階関数とは、関数そのものを引数として渡したり、あるいは戻り値として返したりするための関数
    //my_array_walkを定義する
    function my_array_walk(array $array, callable $func){
        //配列$arrayの内容を順に処理
        foreach($array as $key => $value){
            //$funcで指定された関数の呼び出し
            $func($value, $key);
        }
    }
    //配列を処理するためのユーザ定義関数
    //これはコールバック関数(呼び出し先の関数の中で呼び出される関数のこと)
    function showItem($value, $key){
        print "{$key}:{$value}<br />";
    }
    $data1 = ['A', 'B', 'C', 'D'];
    my_array_walk($data1, 'showItem');//$funcにセットされているのは、showItem関数！

    //無名関数とは、その名の通り名前を持たない関数のことで、クロージャとも呼ぶ
    //無名関数によってコードが短くなり、
    //高階関数とコールバック関数をひとつの文で指定できるようになり、コードが読みやすい！！！便利！！！
    //上記の関数を無名関数で書き換えたものが以下である
    my_array_walk($data1,
        function($value, $key){
            print "{$key}:{$value}<br />";
        }
    );
    //結果
    // 1:B
    // 2:C
    // 3:D

    $result1 = 0;
    function sum2(float $value, int $key){
        global $result1;     //グローバル変数を定義
        $result1 += $value;  //配列の値を$resultに加算
    }
    $data2 = [100, 50, 30, 20];
    my_array_walk($data2, 'sum2');
    print "合計値: {$result1}";//結果 合計値: 200

    $data3 = [80, 60, 30, 20];
    $result2 = 0;
    //親スコープの変数を引き継ぐ use命令
    my_array_walk($data3, function(float $value, int $key) use(&$result2){
        $result2 += $value;
    });
    print "合計値: {$result2}";//結果 合計値: 190 

    //ポイント：高階関数によって共通機能はそのままに個別の処理内容だけを自由に差し替えられる！！！

    function hoge() {
        $data = [100, 75, 40, 30];
        $result = 0;

        my_array_walk($data, function(float $value, int $key) use(&$result){
            $result += $value;
        });

        print "合計値: {$result}";
    }
    hoge();//結果 合計値: 245

    // ジェネレータ
    //yield命令は、return命令とは違い処理を一時停止し、再度呼び出された時にその時点から処理が再開される！
    
