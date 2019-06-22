<?php
/**
 * Created by PhpStorm.
 * User: ctbd
 * Date: 5/18/2019
 * Time: 5:30 PM
 */

class User
{
    private $Id;
    private $Name;
    private $Email;
    private $Password;

    public function SetId($id){$this->Id=$id;}
    public function SetName($name){$this->Name=$name;}
    public function SetEmail($model){$this->Email=$model;}
    public function SetPassword($price){$this->Password=$price;}

    public function GetId(){return $this->Id;}
    public function GetName(){return $this->Name;}
    public function GetEmail(){return $this->Email;}
    public function GetPassword(){return $this->Password;}
}