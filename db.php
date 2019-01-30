<?php

class database

{

private $con;

public function connect (){

    include_once 'constants.php';

    $this->con=new mysqli(HOST,USER,PASS,DB);
    if ($this->con){

        return $this->con;
    }
    return"Database connection fail";


}

}

$db=new database();
$db->connect();