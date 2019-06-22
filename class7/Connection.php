<?php
/**
 * Created by PhpStorm.
 * User: ctbd
 * Date: 5/4/2019
 * Time: 6:08 PM
 */

class Connection
{
    public $conn;

    public function __construct(){
        $this->conn=new PDO("mysql:host=localhost;dbname=Ctg219-OOP","root","");
    }

    public function InsertData($name, $power,$is_died){

        try{
            $statement= $this->conn->prepare("INSERT INTO avengers (Name,Power,Is_Dies) VALUES (:name,:power,:is_died)");
//          $sql="Insert into Avengers (Name,Power,Is_Dies) values ('".$name."','".$power."','".$is_died."')";

            $statement->execute(
                array(
                    ':name'=> $name,
                    ':power'=>$power,
                    ':is_died'=>$is_died
                )
            );
            echo"<br>Successful";
        }
        catch (Exception $ex){
            echo "<br>Error in Inserting Data";
        }


    }
}