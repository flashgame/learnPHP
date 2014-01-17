<?php
include("connect.php");
$sql="INSERT INTO `xw` (`xwdm`,`bt`,`sj`,`rydm`,`ztdm`,`nr`) VALUES ('','$_POST[title]',now(),'01','01','$_POST[content]')";

if($_POST['submit'])
{
	echo $_POST['title'];
	echo $_POST['content'];
	mysql_query($sql) or die(mysql_error());
}

include("close.php");
?>

<!doctype html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <title>添加新闻</title>
</head>
<body>
        <h1>添加新闻</h1>
        <form action="addNews.php" method="post">
                标题：<input type="text" name="title"/><br />
                内容：<br />
                <textarea rows="10" cols="50" name="content"></textarea><br />
                <input type="submit" value="提交" name="submit"/>
        </form>
</body>
</html>
