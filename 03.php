<?php

$name = "takuya";
if ($name = "takuya"){
    echo "私はtakuyaです";
}else {
    echo "takuyaではありません";
}


$total = 0;
for ($i = 0; $i <= 10000; $i++){
    $total += $i;
}
echo $total;

$fruits = array("appale","orange","banana","water","strawberry");
foreach($fruits as $fruits){
    echo $fruits;
    echo "\n";
}

$start = 1;
$end = 100;
 for ($i = $start; $i < $end; $i++){
    if ($i % 5 == 0) {
        echo $i;
    }
 }