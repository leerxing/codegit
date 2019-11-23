<?php
session_start();
require "userDB.php";

$nyhname=$_POST["nname1"];
$npwd=$_POST["npwd"];
$npwd1=$_POST["npwd1"];
Modifyinformation($nyhnam,$npwd,$npwd1)


?>

