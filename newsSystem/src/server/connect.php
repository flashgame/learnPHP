<?php
$conn = mysql_connect("localhost","user_xwxt","user_xwxt") or die("DataBase can't connect");
$db = mysql_select_db("xwxt",$conn) or die("db is connect error:".mysql_error());
mysql_query("set names 'utf8'");
