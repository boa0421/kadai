<?php
// 引数に数値を指定して実行すると、数値を2倍にして返す関数を作成してください

function w($num) {
    $num *= 2;
    return $num;
}
echo w(3);
echo "\n";

// $a と $b を仮引数に持ち、　$a と $b　を足した結果を返す関数を作成してください。

function f($a, $b){
    $result = $a + $b;
    return $result;
}
echo f(1,2);
echo "\n";

// $arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すとその要素をすべてかけた結果を返す関数を作成してください。

function multiplication($arr) {
    $result = 1;
    foreach($arr as $a) {
        $result *= $a;
    }
    return $result;
}
echo multiplication(array(1,3,5,7,9));
echo "\n";

// 次のプログラムは、配列の中で1番大きい値を返す max_array という関数を実装しようとしています。途中の部分を完成させてください。

function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする
    $max_number = $arr[0];
    foreach($arr as $a){
        if ($max_number < $a) {
            $max_number = $a;
        }
    }
    return $max_number;
}
echo max_array(array(2,1,5));
echo "\n";

// .次のビルトイン関数の用途、使い方を調べて実際に使ってみてください。

// 1.strip_tags
// 2.array_push
// 3.array_merge
// 4.time, mktime
// 5.date


// 1.strip_tags  HTMLタグを取り除く
// 使い方がよく分かりませんでした。
$text = '<p>Test paragraph.</p><!-- Comment --> <a href="#fragment">Other text</a>';
echo strip_tags($text);
echo "\n";

echo strip_tags($text, '<p><a>');

// 2.array_push  配列に要素を追加する

$stack = array("orange", "banana");
array_push($stack, "apple", "raspberry");
print_r($stack);
echo "\n";

// 3.array merge  配列を結合する

$array1 = [1, 2, 3];
$array2 = [10, 20, 30];
$array3 = [100, 200, 300];
$array = array_merge($array1, $array2, $array3);
print_r($array);
echo "\n";

// 4.time,mktime  現在のUnixタイムスタンプを取得する

echo time();
echo "\n";

// 5.date  日時

echo date( "Y年m月d日 H時i分s秒" ) ;
echo "\n";
?>