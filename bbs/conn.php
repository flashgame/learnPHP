<?php
	header("Content-Type:text/html;charset=utf-8");
	$conn = mysql_connect("localhost","root","") or die ("数据库连接错误");
	mysql_select_db("bbs",$conn);
	mysql_query("set names 'utf8'");
	/*		
	print "connect success";
	//mysql_set_charset("utf8");
	//mysql_select_db("bbs") or die ("不能连接bbs数据库");
	$query = "SELECT * FROM message";
	$result = mysql_query($query) or dir (mysql_error());

	print "<table>\n";
	while($conn = mysql_fetch_array($result,MYSQL_ASSOC))
	{
		print "\t<tr>\n";
		foreach($conn as $col_value)
		{
			print "\t\t<td>$col_value</td>\n";
		}
	}
	print "</table>\n";
	mysql_free_result($result);
	mysql_close($conn);
	*/	
?>
