<?php
$num1=20;
echo var_dump($num1)."<br>";
$num1="34440";
echo var_dump($num1)."<br>";
$num1=34.566;
echo var_dump($num1)."<br>";
$num1=true;
echo var_dump($num1)."<br>";
function display()
{
static $num2=5;
echo $num2++."<br>";
}
echo $num2++."<br>";
echo $num2++."<br>";
display();
display();
?>