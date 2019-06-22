<?php
/**
 * Created by PhpStorm.
 * User: Rafsan
 * Date: 5/4/2019
 * Time: 3:32 PM
 */

include "Gorib.php";
include "Test.php";
class MyStatus implements Gorib
{

  public  function lowMoney($amount)
    {
       echo "<br>I have only <strong>".$amount."</strong> taka";
    }

   public function homeLess()
    {
        echo "<br>I am Homeless";
    }
}