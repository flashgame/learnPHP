<?php
include("connect.php");
if($_POST["login"])
{
	$user = $_POST["user"];
	$psw = $_POST["psw"];
	//echo $user . "    " . $psw;
	$sql = "SELECT * FROM `ry` WHERE zh='" . $user . "'";
	$res = mysql_query($sql) or die (mysql_error());
	$arr = mysql_fetch_array($res);
	//var_dump($arr);
	if($arr)
	{
		//存在账号,判断密码
		if($arr["mm"] == $psw)
		{
			echo "账号密码正确，登陆成功";
		}
		else
		{
			echo "密码错误";
		}
	}
	else
	{
		echo "账号不存在哦，亲！！";
	}
}
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
</body>
</html>
