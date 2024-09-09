<?php
echo "lesson4\n";
for ($i = 1; $i <= 100; $i++) {
    if($i % 10 == 0){
        echo $i , "\n";
    }
}
echo "\n";
$A = 0;
for ($i = 1; $i <= 100; $i++) {
    if($i % 2 == 0){
        $A = $A + $i;
    }
}
echo $A,"\n";

echo "\n";
for ($i = 1; $i <= 100; $i++) {
    if($i % 3 == 0){
        if($i % 5 == 0){
            echo "fizzbuzz\n";
        }
        echo "fizz\n";
    }else if($i % 5 == 0){
        echo "buzz\n";
    }else{
        echo $i,"\n";
    }
}
echo "\n";
echo "数値を五つ入力してください\n";
echo "一つ目\n";
$A = trim(fgets(STDIN));
echo "二つ目\n";
$B = trim(fgets(STDIN));
echo "三つ目\n";
$C = trim(fgets(STDIN));
echo "四つ目\n";
$D = trim(fgets(STDIN));
echo "五つ目\n";
$E = trim(fgets(STDIN));
echo "五つの中から一番大きい値を出力します\n";
$ans = 0;
$ans1 = 0;
if($A > $B){
    $ans = $A;
}else{
    $ans = $B;
}
if($C > $D){
    $ans1 = $C;
}else{
    $ans1 = $D;
}
if($ans1 > $E){
    $ans1 = $ans1;
}else{
    $ans1 = $E;
}
if($ans > $ans1){
    echo "一番大きい数は",$ans,"です";
}else{
    echo "一番大きい数は",$ans1,"です";
}

echo "\n";
echo "\n";

echo "文章を入力してください\n";
echo "回文かどうか判別します\n";
$kaibun = trim(fgets(STDIN));


echo $kaibun ,"の回文は",strrev($kaibun),"\n";

if($kaibun === strrev($kaibun)){
    echo "入力された文は回文です";
}else{
    echo "入力された文は回文ではありません";
}




?>