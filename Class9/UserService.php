<?php
/**
 * Created by PhpStorm.
 * User: ctbd
 * Date: 5/18/2019
 * Time: 5:19 PM
 */

class UserService
{
    private $conn;

    public function __construct($conn)
    {
        $this->conn=$conn;
    }

    function InsertRow($model)
    {
        try{
            $statement= $this->conn->prepare("INSERT INTO user (Name,Email,Password) VALUES (:name,:email,:password)");
            $statement->execute(
                array(
                    ':name'=> $model->GetName(),
                    ':email'=>$model->GetEmail(),
                    ':password'=>$model->GetPassword()

                )
            );

        }
        catch (Exception $ex){
            echo "<br>Error in Inserting Data";
        }
    }

    function GetByEmail($email)
    {
        try{
            $query= "SELECT * FROM user where Email='".$email."'";
            $result = $this->conn->prepare($query);
            $result->execute();
//            print_r($result->fetch());
            return $result->fetch();
        }
        catch(Exception $ex){
            echo "Invalid<br>";
        }
    }
}