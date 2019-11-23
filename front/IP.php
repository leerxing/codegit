<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>个人信息</title>
</head>
<body>

<div id="photo" style="background-color:#E0FFFF;height:35%;width:96%;float:left;">
<img src="leerxing/图片/摄像头/123321.jpeg" alt="user photo" width="304" height="228"></div>

<div id="message" style="background-color:#E0FFFF;height:60%;width:96%;float:left;">
<?php
session_start();
echo "用户名：".$_SESSION["yhname"];
?>
<br>

    <script>
        function change(){
            window.location= "IPchange.php";
        }
    </script>
<button type="button" target="_blank" onclick="change()">修改</button>





</div>
</body>

