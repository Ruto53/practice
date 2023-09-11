<?php 
//設問1.
//以下の変数を宣言しなさい。
$number = 5;
$text = "ああああ";
$flag = true;
$test = null;
?>

<?php
//設問2.
//設問1で宣言した変数を全て出力しなさい。
echo $number.PHP_EOL;//PHP用の改行コード
echo $text.PHP_EOL;
var_dump ($flag);
var_dump($test);
?>

<?php 
//設問3.
//次の変数2つを宣言しなさい
$number1 = 10;
$number2 = 5;

//以上、2つの変数を用いて次の結果を 変数に代入し、出力しなさい。
$a = $number1 + $number2;//加算(足し算)
$b = $number1 - $number2;//減算(引き算)
$c = $number1 * $number2;//乗算(掛け算)
$d = $number1 / $number2;//除算(割り算)
$e = $number1 % $number2;//剰余算(割り算の余り)

echo $a.PHP_EOL;
echo $b.PHP_EOL;
echo $c.PHP_EOL;
echo $d.PHP_EOL;
echo $e.PHP_EOL;
?>

<?php 
//設問4.
//time()関数を利用すると、1970年1/1 00:00:00から現在まで何秒たったかの値を取得出来る。
//取得した値によって以下の出し分けをif文を使って行いなさい。

$time = time();
if($time %2 == 0){
    echo "偶数です";
}else{
    echo "奇数です";
}
?>

<?php
//設問5.
//設問4の内容をswitch文で行いなさい
switch($time %2){
    case 0:
    echo "偶数です";
    break;

    default:
    echo "奇数です";
    break;
}
?>

<?php
//設問6.
//1以上10以下の数字をfor文を使って出力しなさい。
for($i = 1 ; $i <= 10 ; $i ++){
    echo $i.PHP_EOL;
}
?>

<?php
//設問7.
//100未満の自然数の内、3の倍数の数字のみをfor文を使って出力しなさい。
for($i = 1 ; $i < 100 ; $i ++){
    if($i % 3 == 0){
        echo $i.PHP_EOL;
    }
}
?>

<?php
//設問8.
//1000から2000までの自然数で、1007のみfor文を使って出力させなさい。
for($i = 1000 ; $i < 2000 ; $i ++){
    if($i == 1007){
        echo $i;
        break;
    }
}
?>

<?php
//設問9.
//for文を複数用いて、以下の出力結果を再現しなさい。
for($i = 1 ; $i <= 3 ; $i ++){
    for($j = 0 ; $j < 1 ; $j ++){
        echo str_repeat($j,$i).PHP_EOL;//$jを$i回出力
    }
}
?>

<?php 
//設問10.
//int型の1、2、3の3つの値を格納した配列を宣言しなさい。
$numbers = array(1, 2, 3);
?>

<?php
//設問11.
//設問10で宣言した配列の最後にint型の4を追加しなさい。
$numbers[] = 4;
?>

<?php  
//設問12.
//設問10で宣言した配列のキーが0の値を出力しなさい。
echo $numbers[0].PHP_EOL;
?>

<?php
//設問13.
//設問10で宣言した配列の内容を、for文を使って全て出力しなさい。
for($i = 0 ; $i < count($numbers) ; $i++){
    echo $numbers[$i].PHP_EOL;
}
?>

<?php
//設問14.
//設問10で宣言した配列の内容を、foreach文を使って全て出力しなさい。
foreach($numbers as $number){
    echo $number.PHP_EOL;
}
?>