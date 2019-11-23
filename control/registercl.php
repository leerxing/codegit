<?php
$nname=$_POST["nname"];
$password=$_POST["npwd"];
echo $nname;
echo $password;
require "userDB.php";
Signup($nname,$password);

header("Location:login.php");

?>

