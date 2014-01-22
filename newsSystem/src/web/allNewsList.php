<?php
include("../server/connect.php");
$sql = "SELECT `xwdm`,`bt`,`sj` FROM `xw` ORDER BY `sj` DESC";
$resource = mysql_query($sql);
//新闻内容数组，包括新闻代码，新闻标题，时间
$i = 0;
while($row = mysql_fetch_array($resource))
{
	$newsArr[$i]["xwdm"] = $row["xwdm"];
	$newsArr[$i]["bt"] = $row["bt"];
	$newsArr[$i]["sj"] = $row["sj"];
	$i++;
}
//print_r($newsArr);
$total_news = count($newsArr);//新闻总数量
//print($total_news);
//每页显示数据
$pageSize = 5;
//当前页数
$page = 0;

if($_GET["page"])
{
	$page = $_GET["page"];
}
else
{
	$page = 0;
}
//页面总数
$pageCount = 0;
if($total_news == 0)
{
	$pageCount = 0;
}
else if($total_news < $pageSize)
{
	$pageCount = 1;
}
else if(($total_news % $pageSize) > 0)
{
	$pageCount = ceil($total_news / $pageSize);
}
else if(($total_news % $pageSize) == 0)
{
	$pageCount = $total_news / $pageSize;
}
$pageInfo = "共" . $total_news . "条新闻  第" . ($page + 1) . "页 共" . $pageCount .  "页  ";
if($page == 0)
{
	$pageInfo .= "首页  上一页";
	$pageInfo .= "<a href='$_SERVER[PHP_SELF]?page=".($page + 1)."'>下一页</a>  ";
	$pageInfo .= "<a href='$_SERVER[PHP_SELF]?page=".($pageCount - 1)."'>尾页</a>  ";
}
else
{
	$pageInfo .= "<a href='$_SERVER[PHP_SELF]?page=0'>首页</a>  ";
	$pageInfo .= "<a href='$_SERVER[PHP_SELF]?page=".($page -1)."'>上一页</a>  ";
	if($page < ($pageCount - 1))
	{
		$pageInfo .= "<a href='$_SERVER[PHP_SELF]?page=".($page + 1)."'>下一页</a>  ";
		$pageInfo .= "<a href='$_SERVER[PHP_SELF]?page=".($pageCount - 1)."'>尾页</a>  ";
	}
	else
	{
		$pageInfo .="下一页  尾页";
	}
}
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>全部新闻</title>
</head>
<body>
	<h1>全部新闻</h1>
	<ul>
		<!-- 这里插入数据库数据 -->
	<?php
	$sql = "SELECT `xwdm`,`bt`,`sj` FROM `xw` ORDER BY `sj` DESC LIMIT " . $page * $pageSize . "," . $pageSize;
	$resource = mysql_query($sql) or die (mysql_error());
	while($row = mysql_fetch_array($resource))
	{
		echo "<li>" . $row["bt"] . "</li>";
	}
	?>
	</ul>
	<?php
	
	
	print($pageInfo);
	?>
	<p><a href="lastNewsList.php">最新新闻</a></p>
</body>
</html>
