<?php
//1　引数に数値を指定して実行すると、数値を2倍にして返す関数を作成してください
echo "1の答え　";
function double($original) {
    return $original * 2;
}
echo double(10);
echo "\n";

//2 $a と $b を仮引数に持ち、　$a と $b　を足した結果を返す関数を作成してください
echo "2の答え　";
$result2 = 0;
function add($a, $b) {
    return $a + $b;
}
echo add(2,10);
echo "\n";

//3 $arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すとその要素をすべてかけた結果を返す関数を作成してください
echo "3の答え　";
function f($arr) {
    $c1 = 1;
    foreach($arr as $c) {
        $c = $c * $c1;
        $c1 = $c;
    }
    return $c1;
    echo "\n";
}
echo f($array = [1,3,5,7,9]);
echo "\n";

//4 4.【応用】　下記のプログラムは、配列の中で1番大きい値を返す max_array という関数を実装しようとしています。途中の部分を完成させてください
echo "4の答え　";
function max_array($arr){
  // とりあえず配列の最初の要素を一番大きい値とする
  $max_number = $arr[0];
  foreach($arr as $a){
    // ここで配列の中の1番大きい値を探したい
    if ($a >= $max_number) {
        $max_number = $a;
    }
  }
  return $max_number;
}
echo max_array($array = [1,9,5,7,3]);
echo "\n";
echo "配列は次の通りです";
echo "\n";
print_r ($array);
echo "\n"; 

//5 下記のビルトイン関数の用途、使い方を調べて実際に使ってみてください
echo "5の答え";
echo "\n";
//strip_tags
$text = '<p>Test paragraph.</p><!-- Comment --> <a href="#fragment">Other text</a>';
echo strip_tags($text);
echo "\n";
//array_push
$stack = array("orange", "banana");
array_push($stack, "apple", "raspberry");
print_r($stack);
//array_merge
$array1 = array(11,12,13);
$array2 = array(21,22,23);
$test = array_merge($array1,$array2);
print_r($test);

//time, mktime
date_default_timezone_set('Asia/Tokyo');
$week = array( "日", "月", "火", "水", "木", "金", "土" );
echo "2023年3月10日は".$week[date("w",mktime(0, 0, 0, 3, 10, 2023))]."曜日です";
echo "\n";

//date
var_dump(date_default_timezone_get());
var_dump(date('Y-m-d H:i:s'));