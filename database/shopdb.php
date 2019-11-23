<?php
require"db.php";

function Shopcheck($sname)
     {
       $servername = "localhost";
       $dbname = "gouwu";
        $conn = new PDO("mysql:host=$dbservername;dbname=$dbname", dbusername, dbpassword);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        $sth = $conn->prepare("SELECT * FROM `goods` WHERE `goodsname`=:goodsname)");
        $sth->bindParam(':goodsname', $sname);
        $sth->execute();
        $result = $sth->setFetchMode(PDO::FETCH_ASSOC);
         foreach ($result as $value){
         echo $value;
            }
        }
function Salercheck($slname)
     {
       $servername = "localhost";
       $dbname = "gouwu";
        $conn = new PDO("mysql:host=$dbservername;dbname=$dbname", dbusername, dbpassword);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        $sth = $conn->prepare("SELECT * FROM `goods` WHERE `shopname`=:slname)");
        $sth->bindParam(':slname', $slname);
        $sth->execute();
        $result = $sth->setFetchMode(PDO::FETCH_ASSOC);
        foreach ($result as $value){
         echo $value;
            }
      }
?>
