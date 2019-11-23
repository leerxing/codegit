<?php
$q = isset($_GET["q"]) ? intval($_GET["q"]) : '';

if(empty($q)) {
    echo '请选择一个网站';
    exit;
}
try {
    require"db.php";
       $servername = "localhost";
       $dbname = "gouwu";
    $conn = new PDO("mysql:host=$dbservername;dbname=$dbname", dbusername, dbpassword);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sth = $conn->prepare("SELECT goodsname FROM goods ORDER BY stock asc LIMIT 10");
    $result = $sth->fetchAll();
    foreach ($result as $row) {
    echo $row['goodsname'] . "\n";

    }

}
catch(PDOException $e)
{
    echo $e->getMessage();
}
?>

