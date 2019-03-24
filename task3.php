<?php

//アルゴリズムの練習
function drawAsterisk($size, $isReverse) {
    $result = '';
    /**
     * for文を使ってresultに*を連結して作成してください。
     */
    for($i=0; $i<$size; $i++){
        if($isReverse){
            for($j=0; $j<$size-$i; $j++){
                $result .= "*";
            }
        } else {
            for($j=0; $j<=$i; $j++){
                $result .= "*";
            }
        }
        $result .= '<br />';
    }
    print $result;
}

drawAsterisk(10, false);
drawAsterisk(10, true);

/*　実行結果
    *
    **
    ***
    ****
    *****
    ******
    *******
    ********
    *********
    **********
    **********
    *********
    ********
    *******
    ******
    *****
    ****
    ***
    **
    *
*/