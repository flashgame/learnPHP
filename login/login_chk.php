<?php
include_once('connect.php');
$name = $_POST['userName'];
$pwd = $_POST['pwd'];
echo 'The userName and pwd is :',$name,$pwd,'<br/>';
//返回数值-关系
//4-账号不存在
//3-登陆次数
//2-登陆次数
//1-登陆次数
//0-账号未激活
//-1-登陆成功
if(!empty($name) and !empty($pwd))
{
	$sql = "SELECT `name`,`count`,`active` from `user` where name = '".$name."'";
	$active = $conn->getFields($sql,2);
	$count = $conn->getFields($sql,1);
	//var_dump($active);
	if($active == '')
	{
		$reback = 4;
	}
	else if($active == 0)
	{
		$reback = 0;//用户未激活;
	}
	else if($count >= 3)
	{
		$reback = 3;//用户登陆次数超过3次
	}
	else
	{
		$sql .= "and password = '".$pwd."'";
		$num = $conn->getRowsNum($sql);
		if($num == 0 or $num === '')
		{
			$num = $conn->uidRst("UPDATE `user` SET `count` = ".($count + 1)." WHERE `name` = '".$name."'");
			$reback = $count + 1;
			echo 'pwd is wrong';
		}
		else
		{
			//登陆成功
			if($count != 0)
			{
				$num = $conn->uidRst("UPDATE `user` SET `count` = '".$name."'");
			}
			$reback = -1;
		}
	}
	echo $reback;
}
?>
