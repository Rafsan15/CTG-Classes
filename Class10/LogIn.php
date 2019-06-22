<?php
/**
 * Created by PhpStorm.
 * User: ctbd
 * Date: 6/22/2019
 * Time: 6:51 PM
 */

include "Connection.php";
include "Form.php";
$form=new Form();
$conn= new Connection();
if(isset($_POST['LogIn'])) {
    $email=$_POST['Email'];
    $password=$_POST['Password'];
    if ($email=="" || $password==""  ) {
        echo "Please Enter All Fields";
    } else {
        $conn->LogIN($email,$password);
        $data=$conn->GetMessages();
        $form->Messages($data);

    }
}
else{


}
if(isset($_POST['LogInBtn'])) {
    $form->LogInPage();
}
else{


}
