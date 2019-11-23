<?php
require "shopdb.php";
$sname=$_POST["sname"];

try{
Shopcheck($sname);
}
catch(PDOException $e)
{
    echo $e->getMessage();
}



?>
