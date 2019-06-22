<?php
/**
 * Created by PhpStorm.
 * User: ctbd
 * Date: 5/11/2019
 * Time: 3:30 PM
 */

include "Entry.php";
include "Connection.php";
$entry= new Entry();
//
//if(isset($_POST['Submit'])){
    $conn=new Connection();
//    $conn->InsertData($_POST['Name'],$_POST['Model'],$_POST['Price']);
    $data=$conn->GetAll();
    $databyid=$conn->GetById(1);
    $entry->ShowData($data);
    echo $databyid['Name'];
    $conn->DeleteRow(2);
//}
