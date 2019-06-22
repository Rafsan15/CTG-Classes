<?php
include 'Avengers.php';
include 'IronMan.php';
include 'Thanos.php';
include 'Thor.php';
include 'CaptainAmerica.php';
include 'Hulk.php';

$ironMan=new IronMan();
$ironMan->SayMyName("Iron Man","Richest");
$thor=new Thor();
$thor->SayMyName("Thor","Lighting");
$hulk=new Hulk();
$hulk->SayMyName("Hulk","Strongest");
$captain=new CaptainAmerica();
$captain->LetsFight();
$thanos=new Thanos();
$thanos->SayMyName("Thanos","BadAss");


?>