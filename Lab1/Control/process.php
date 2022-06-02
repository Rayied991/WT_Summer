<?php
$number1=$_POST["num1"];
$number1=(float)$number1;
$number2=$_POST["num2"];
$number2=(float)$number2;
$add=$_POST["Calculator"];
$Sub=$_POST["Calculator"];
$Mul=$_POST["Calculator"];
$Div=$_POST["Calculator"];
// $Per=$_POST["Calculator"];

if($add=="+"){
    echo $number1+$number2;
}
if($add=="-"){
    if($number1>$number2){
        echo $number1-$number2;
    }
   else{
        echo $number2-$number1;
    }
}
if($add=="*"){
    echo $number1*$number2;
}
if($add=="/"){
    echo $number1/$number2;
}
/*if($Per=="%"){
    echo $number1%$number2;
}
*/
?>