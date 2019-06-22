<?php
/**
 * Created by PhpStorm.
 * User: ctbd
 * Date: 6/22/2019
 * Time: 6:40 PM
 */

include "Connection.php";

$conn= new Connection();
if(isset($_POST['SubmitBtn'])) {
    $msg=$_POST['Message'];
    if ($msg=="") {
        echo "Please Enter a Message";
    } else {
        $conn->SaveMessage($msg);
    }
}