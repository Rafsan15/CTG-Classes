<?php
/**
 * Created by PhpStorm.
 * User: ctbd
 * Date: 4/6/2019
 * Time: 3:31 PM
 */

$fname=$_POST["FName"];
$lname=$_POST["LName"];
$num1=$_POST["Num1"];
$num2=$_POST["Num2"];
//echo "Welcome ". $fname." ".$lname;
//function add($num1, $num2){
//    echo"<br/> Addition is :".($num1+$num2);
//}
function mul($num1, $num2){
    echo"<br/> Multiplication is :".($num1*$num2);
}
mul($num1, $num2);

