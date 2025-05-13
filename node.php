<?php
// 1、定义常量Province，值为“Hunan”，输出该常量的值。

use function Pest\Laravel\get;

const province="Hunan";
echo province;
echo "<br>";
// 2、定义变量a=1、b=2、c=3，输出a+b*c的值。
$a=1;$b=2;$c=3;
echo ($a+$b)*$c;
echo "<br>";
// 3、长方形的长为10，宽为5，求长方形的周长和面积。
$chang=10;$kuan=5;
echo '周长为'.($chang*2+$kuan*2).'面积为'.$chang*$kuan;
echo "<br>";
// 4、定义变量x=10，y=15，比较它们的值大小，输出值大的变量。
$x=10;$y=15;
if($x>$y)echo $x;
else echo $y;
echo "<br>";
// 5、计算2+4+6+...+100 的和，请分别使用 while、do while、for循环语句实现。
$a=2;$b=0;
while($a<=100){
    $b+=$a;
    $a+=2;
}
echo $b;
echo "<br>";
$b=0;$a=0;
do{
    $b+=$a;
    $a+=2;
}while($a<=100);
echo $b;
echo "<br>";
$b=0;
for($a=0;$a<=100;$a+=2){
    $b+=$a;
}
echo $b;
echo "<br>";
?>
