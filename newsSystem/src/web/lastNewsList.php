<?php
include("../server/connect.php");
$sql = "SELECT `xwdm`,`bt`,`sj` FROM `xw` ORDER BY `sj` DESC LIMIT 0,10";
$resource = mysql_query($sql) or die(mysql_error());
/*
while ($row = mysql_fetch_array($resource))
{
	printf("bt:%s sj:%s <br />",$row["bt"],$row["sj"]);
}
*/
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>最新新闻</title>
</head>
<body>
	<h1>最新新闻</h1>
	<ul>
	<?php
	while($row = mysql_fetch_array($resource))
	{
		echo "<li><a href='showNews.php?xwdm=" . $row["xwdm"] . "'>" .$row["bt"] . "</a></li>";	
	}
	?>
	</ul>
	<a href="allNewsList.php">全部新闻</a>
	<a href="login.php">登陆后台</a>
</body>
</html>
