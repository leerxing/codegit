<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>商品查询</title>
</head>
<body>

<div id="querysystem" style="background-color:#F5DEB3;height:800px;width:72%;float:left;">
<form action="shopcheckcl.php" method="post">
<br><br>
商品名: <input type="text" name="shopname"><input type="submit" value="查询">
</form><br><br>
<form action="salercheckcl.php" method="post">
商家名: <input type="text" name="businessname"><input type="submit" value="查询">
	</form>
</div>
<div id="commodityrankings " style="background-color:#F5DEB3;height:800px;width:24%;float:left;">
<h1>人气商品排行榜</h1>


<script>
function RankingList(str)
{
	var xmlhttp;
	if (str=="")
{
		document.getElementById("txtHint").innerHTML="";
		return;
}
	if (window.XMLHttpRequest)
	{
		xmlhttp=new XMLHttpRequest();
	}
	else
	{
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function()
	{
		if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
			document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
		}
	}
	xmlhttp.open("GET","rl.php?q="+str,true);
	xmlhttp.send();
}
</script>

<form>
<select name="users" onchange="showSite(this.value)">
<option value="">选择一个系列:</option>
<option value="1">商品</option>
<option value="2">商家</option>
</select>
</form>
<br>
<div id="txtHint"><b>信息显示在这里……</b></div>

</div>

</body>
</html>
