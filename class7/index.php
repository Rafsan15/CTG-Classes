<?php
/**
 * Created by PhpStorm.
 * User: Rafsan
 * Date: 5/4/2019
 * Time: 3:31 PM
 */

include "MyStatus.php";
include "Connection.php";
//$status=new MyStatus();
//$status->lowMoney(50);
//$status->homeLess();

$connection= new Connection();
//$connection->InsertData("Captain America","Intelligent","No");
$connection->InsertData("Iron Man","Rich","Yes");
$connection->InsertData("Thor","Strom Breaker","No");