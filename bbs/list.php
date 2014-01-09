<?php
	include("conn.php");
	include("head.php");
	$sql= "SELECT * FROM message order by id desc";
	$query=mysql_query($sql) or die (mysql_error());
	while($row=mysql_fetch_array($query))
	{
?>
	<table width="500" border="0" cellpadding="5" cellspacing="1" bgcolor="#add3ef">
		<tr bgcolor="#eff3ff">
		<td>标题：<?php echo $row[title] ?>&nbsp&nbsp&nbsp&nbsp&nbsp用户名：<?php echo $row[user] ?></td>
		</tr>
		<tr bgcolor="#ffffff">
		<td>内容：<?php echo $row[content] ?> </td>
		</tr>
	</table>
<?php
	}
?>
