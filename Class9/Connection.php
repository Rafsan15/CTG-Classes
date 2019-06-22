<?php
/**
 * Created by PhpStorm.
 * User: ctbd
 * Date: 5/18/2019
 * Time: 5:18 PM
 */

class Connection
{
    private $conn;

    public function __construct()
    {
        $this->conn=new PDO("mysql:host=localhost;dbname=Ctgclass7","root","");
    }

    public function GetConnection(){return $this->conn;}
}