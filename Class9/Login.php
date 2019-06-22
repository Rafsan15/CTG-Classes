<?php
/**
 * Created by PhpStorm.
 * User: ctbd
 * Date: 5/18/2019
 * Time: 5:27 PM
 */

include "Connection.php";
include "UserService.php";
include "User.php";
$conn=new Connection();
$userservice= new UserService($conn->GetConnection());
$user= new User();
if(isset($_POST['Submit'])){
    $user->SetName($_POST['Name']);
    $user->SetEmail($_POST['Email']);
    $user->SetPassword($_POST['Password']);
    $userservice->InsertRow($user);
}
if(isset($_POST['Login'])){

    $info=$userservice->GetByEmail($_POST['Email']);
    if($info['Password']==$_POST['Password']){
        echo "Welcome";
    }
}