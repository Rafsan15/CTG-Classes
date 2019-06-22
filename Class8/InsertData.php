<?php
/**
 * Created by PhpStorm.
 * User: ctbd
 * Date: 5/11/2019
 * Time: 3:59 PM
 */

class InsertData
{
    public function __construct()
    {
        $this->Datas();
        echo "aasd";
    }

    private function Datas()
    {
        $a=$_POST['Name'];
        echo $a;
    }
}