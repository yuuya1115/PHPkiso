<?PHP

echo "lesson2";
echo "\n";
echo "[ please input int A]\n";
echo "\n";
$A = trim(fgets(STDIN));
echo "[ please input int B]\n";
echo "\n";
$B = trim(fgets(STDIN));
echo "大きい数字を出力します".$A."と".$B;
echo "\n";

if($A >= $B) {
    if($A === $B){
        echo"same int";
    }
    echo $A;
}else if ($A <= $B){
    echo $B;
}
echo "\n";
echo "\n";

echo "[ please input int ]\n";
echo "偶数か奇数か判別します\n";
$C = trim(fgets(STDIN));
if($C % 2 == 0){
    echo "入力された値は偶数です";
}else if($C % 2 == 1){
    echo "入力された値は奇数です";
}else{
    echo "数値を入力してください";
}
echo "\n";
echo "\n";
echo "点数を1から100で入力してください\n";
$D = trim(fgets(STDIN));
if($D == 100){
    echo "AA";
}else if($D >= 90){
    echo "A";
}else if($D >= 80){
    echo "B";
}else if($D >= 70){
    echo "C";
}else if($D >= 60){
    echo "D";
}else if($D <= 60){
    echo "E";
}else{
    echo "数値を入力してください";
}

echo "\n";
echo "数値を入力してください\n";
echo "正負を判定します\n";
$E = trim(fgets(STDIN));
if($E == 0){
    echo "数値はゼロです";
}else if($E > 0){
    echo "数値は正の数です";
}else if($E < 0){
    echo "数値は負の数です";
}else{
    echo "数値を入力してください";
}
echo "\n";
echo "年齢を入力してください\n";
echo "バス賃を判定します\n";
$F = trim(fgets(STDIN));
if ($F >= 0 && $F <= 5){
    echo "無料\n";
}else if($F >= 6 && $F <= 12){
    echo "200円\n";
}else if($F >= 13 && $F <= 70){
    echo "500円\n";
}else if($F >= 70){
    echo "無料\n";
}else{
    echo "数値を入力してください";
}

?>
