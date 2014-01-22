<?php
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>后台登陆</title>
</head>
<body>
	<h1>后台登陆</h1>
	<form action="../server/dealLogin.php" method="post">
		账号：<input type="text" name="user"/><br/><br/>
		密码：<input type="text" name="psw"/><br/><br/>
		<input type="submit" value="登陆" name="login" />
	</form>
	<p>测试账号：admin</p>
	<p>测试密码：111</p>
</body>
</html>
