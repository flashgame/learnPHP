<?php
	include("conn.php");
	if($_POST['submit'])
	{
		//print "$_POST[user],$_POST[title],$_POST[content]";
		$sql = "INSERT INTO message (id,user,title,content,lastdate) VALUES ('','$_POST[user]','$_POST[title]','$_POST[content]',now())";
		mysql_query($sql) or die (mysql_error());
		//echo "数据插入成功";
	}
	include("head.php");
?>
<form action="add.php" method="post">
	用户：<input type="text" size="10" name="user" /><br>
	标题：<input type="text" name="title" /><br>
	内容: <textarea name="content" cols="60" rows="9"></textarea><br>
	<input type="submit" name="submit" value="发布留言" />		
</form>
