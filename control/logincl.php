<?php
session_start();

$yhname =$_POST["yhname"];
$pwd =$_POST["pwd"];

require "userDB.php";
try{
Login($yhname,$pwd);
}
catch(Exception $e)
{
    echo 'Message: ' .$e->getMessage();
}
?>


