<?php
//1.引数に数値を指定して実行すると、数値を2倍にして返す関数を作成してください。
function suma($arg){
    return $arg * 2;
}

//echo suma(5);


//2.$a と $b を仮引数に持ち、　$a と $b　を足した結果を返す関数を作成してください。
function sumb($a,$b){
    return $a + $b;
}

//echo sumb(1,2);


//3.$arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すとその要素をすべてかけた結果を返す関数を作成してください。
function sumc($arr){
    $result = 0;
    for($i = 1; $i <=$arr; $i++ ){
        $result += $i;
    }
    return $result;
}

echo sumc(array(1,3,5,7,9);


//4.【応用】　次のプログラムは、配列の中で1番大きい値を返す max_array という関数を実装しようとしています。途中の部分を完成させてください。


//5.次のビルトイン関数の用途、使い方を調べて実際に使ってみてください。
$string = "<h1>test</h1>";
echo  strip_tags($string) ."\n";

$string = array("1","2","3");
array_push($string,"4","5");
print_r($string);

$string1 = ["a","b"];
$string2 = ["c","d"];
$string = array_merge($string1,$string2);
print_r($string);

$timestamp = time();
echo $timestamp;
 
$tm = mktime(23,23,23,07,06,2020);
var_dump($tm);

echo date('Y//m/d');

