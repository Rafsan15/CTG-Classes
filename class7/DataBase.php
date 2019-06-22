<?php
/**
 * Created by PhpStorm.
 * User: ctbd
 * Date: 5/4/2019
 * Time: 5:50 PM
 */

$pdo= new PDO("mysql:host=localhost;dbname=Ctg219-OOP","root","");

if($pdo){

}else{
    echo "<br>Not Connected";
}