<?php
include("../server/connect.php");
if($_GET["xwdm"])
{
	$xwdm = $_GET["xwdm"];
	$sql="SELECT `bt`,`sj`,`rydm`,`nr` FROM `xw` WHERE xwdm = $xwdm";
	$resource = mysql_query($sql) or die (mysql_error());
	$row = mysql_fetch_array($resource);
	
	//人员代码检索
	$rydmSql = "SELECT `xm` FROM `ry` WHERE rydm = " . $row["rydm"];
	$ryRes = mysql_query($rydmSql) or die (mysql_error());
	$ryRow = mysql_fetch_array($ryRes);
}
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>新闻</title>
</head>
<body>
	<?php
	echo "<h1>". $row["bt"] . "</h1>";
	echo "<p><strong>作者：</strong>" . $ryRow["xm"] . "  <strong>发稿时间：</strong>" . $row["sj"] . "</p>"; 
	echo "<hr/>";
	echo "<p>" . $row["nr"] . "</p>";
	?>
	<hr/>
	<a href="allNewsList.php">返回新闻列表</a>
</body>
</html>
