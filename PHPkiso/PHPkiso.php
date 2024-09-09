<?php
echo "lesson1";
echo "\n";

$HW = "Hello World";
echo $HW;
echo "\n";

$WEL = "Welcome";
$MYname = "YuuyaYamada";

echo $WEL." ".$MYname;
echo "\n";

$apple = 200;
$mikan = 100;

echo $apple * 3 + $mikan * 4;
echo "\n";

$color = ["red","blue","green"];
echo $color[1];
echo "\n";

$syain = [
    "佐藤"=>["年齢"=>"36歳","職業"=>"営業"],
    '田中'=>["年齢"=>"23歳","職業"=>"事務"], 
    '吉田'=>["年齢"=>"54歳","職業"=>"社長"]
];

//配列の種類を聞く

print_r($syain["田中"]["年齢"]);

