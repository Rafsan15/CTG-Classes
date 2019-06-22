<?php
/**
 * Created by PhpStorm.
 * User: ctbd
 * Date: 5/11/2019
 * Time: 3:45 PM
 */

class Connection
{
    public $conn;
    public function __construct(){
        $this->conn=new PDO("mysql:host=localhost;dbname=Ctg219-oop","root","");
    }
    public function InsertData($name, $model,$price){
        try{
            $statement= $this->conn->prepare("INSERT INTO car (Name,Model,Price) VALUES (:name,:model,:price)");
            $statement->execute(
                array(
                    ':name'=> $name,
                    ':model'=>$model,
                    ':price'=>$price
                )
            );
            echo"<br>Successful";
        }
        catch (Exception $ex){
            echo "<br>Error in Inserting Data";
        }
    }


    public function GetAll()
    {
        try{
            $query= "SELECT * FROM car";
            $result = $this->conn->prepare($query);
            $result->execute();
            return $result->fetchAll();
        }
        catch(Exception $ex){
            echo "Invalid<br>";
        }
    }
    public function GetById($id){
        try{
            $query= "SELECT * FROM car where id=".$id;
            $result = $this->conn->prepare($query);
            $result->execute();
            return $result->fetch();
        }
        catch(Exception $ex){
            echo "Invalid<br>";
        }
    }
    public function DeleteRow($id){
        try{
            $query= "DELETE FROM car where id=".$id;
            $result = $this->conn->prepare($query);
            $result->execute();

        }
        catch(Exception $ex){
            echo "Invalid<br>";
        }
    }
}