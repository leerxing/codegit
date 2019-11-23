<?php
require "shopdb.php";
$slname=$_POST["slname"];


try{
Salercheck($slname);
}
catch(PDOException $e)
{
    echo $e->getMessage();
}
?>

