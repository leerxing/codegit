<?php
require"db.php";

try {       $servername = "localhost";
            $dbname = "gouwu";
$conn = new PDO("mysql:host=$dbservername;dbname=$dbname", dbusername, dbpassword);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
   echo "连接成功";
}
catch (PDOException $e) {
    echo $e->getMessage();
    exit;
}

function Text()
    {

echo "sss";
    }
Text();

function Signup($nname, $password)
    {   

       $servername = "localhost";
       $dbname = "gouwu";
        $conn = new PDO("mysql:host=$dbservername;dbname=$dbname", dbusername, dbpassword);
        $sth = $conn->prepare("INSERT INTO `consumer`
                                    (`username`,`password`)
                                    VALUES (:nname,:password)");
        $sth->bindParam(':nname', $nname);
        $password = md5($password);
        $sth->bindParam(':password', $password);
        $sth->execute();
        echo "注册成功";
    }




 function Login($yhname, $password)
{   
       $servername = "localhost";
       $dbname = "gouwu";
    $conn = new PDO("mysql:host=$dbservername;dbname=$dbname", dbusername, dbpassword);
    $sth = $conn->prepare("SELECT * FROM `consumer` WHERE `username`=:yhname");
    $sth->bindParam(':yhname', $yhname);
    $sth->execute();
    $fetch = $sth->fetch(PDO::FETCH_ASSOC);
    if (empty($fetch))
        throw new Exception("账号不存在");
    if ($fetch["password"] != md5($password))
        throw new Exception("密码错误");
    unset($fetch["password"]);
     $_SESSION["yhname"] =$yhname;
    return $fetch;
    echo $_SESSION["yhname"];
}




function Modifyinformation($nname1, $npwd,$npwd1)
    {  
       $servername = "localhost";
       $dbname = "gouwu";

        if($npwd==$npwd1){
        $conn = new PDO("mysql:host=$dbservername;dbname=$dbname", dbusername, dbpassword);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        $sth = $conn->prepare("UPDATE consumer SET username=?,password=?
    WHERE username='$yhname'");
        $sth->bindParam(1, $nname1);
        $password = md5($npwd);
        $sth->bindParam(2, $npwd);
        $sth->execute();
        echo "信息修改成功";
        header("refresh:3,url='main.php'");
      }
      else {echo "请确保两次输入密码相同";
}
    }

?>

