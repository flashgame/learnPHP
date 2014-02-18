<?php
include('connect.php');
//$reback = '0';
//$name = $_POST['userName'];
//$pwd = $_POST['pwd'];
//$question = $_POST['question'];
//$answer = $_POST['answer'];
//如果有特殊字符，如逗号，换行等，在插入数据库之前，最好要做一下字符串处理。
$sql = "INSERT INTO `user` (name,password,question,answer,active) VALUES ('".$_POST['userName']."','".$_POST['pwd']."','".$_POST['question']."','".$_POST['answer']."',1)"; 
$num = $conn->uidRst($sql);
if($num == 1)
{
	$reback = "1";
}
echo $reback;
?>
