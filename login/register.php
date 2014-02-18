<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<style type="text/css">
	div
	{
		display: block;
	}
	.register
	{
		width: 400px;
		height: 460px;
	}
	.columnDiv
	{
		width: 410px;
		margin-bottom: 20px;
		float: left;
	}
	.coluTit
	{
		width: 80px;
		display: block;
		float: left;
		font-size: 14px;
		color: #444;
		text-align: right;
		line-height: 35px;
	}
	.coluCont
	{
		width: 205px;
		display: block;
		float: left;
	}
	.genInput
	{
		width: 198px;
		height: 33px;
		border: 1px solid #d3d3d3;
		background-color: #f1f1f1;
		line-height: 33px;
	}
	.prompt-error
	{
		display: inline-block;
		color: #db0000;
		border-color: #ffdfdf;
		border: 1px solid #ddd;
		padding: 0 5px 0 20px;
		line-height: 29px;
		height: 29px;
		font-size: 12px;
		vertical-align: middle;
		background: #ffe7e7 url(http://assets.91118.com/img/member/register/v2/prompt.png) no-repeat;
		margin-left: 10px;

	}
	.prompt-ok
	{
		display: inline-block;
		background: #ffe7e7 url(http://assets.91118.com/img/member/register/v2/prompt.png) no-repeat 0 -42px;
		color: #5a8f00;
		border: 1px solid #ddd;
		padding: 0 5px 0 20px;
		line-height: 29px;
		height: 29px;
		font-size: 12px;
		vertical-align: middle;
		margin-left: 10px;
	}
	.nextStep
	{
		background: url(http://assets.91118.com/img/Web_Main/Reg/NextStep.png);
		width: 150px;
		float: left;
		height: 45px;
		text-indent: -99999px;
	}
	.nextStep:hover
	{
		background: url(http://assets.91118.com/img/Web_Main/Reg/NextStep_over.png);
	}
	.loginBtn
	{
		display:block;
		float:left;
		width:40px;
		margin-top:22px;
	}
	
	</style>
	<script>

	</script>
</head>
<body>
	<form action="register_chk.php" method="post">
		<div class="register">
			<div class="columnDiv">
				<span class="coluTit">登陆账号：</span>
				<span class="coluCont">
					<input type="text" name="userName" class="genInput">
				</span>
				<div class="prompt-error">登陆账号不为空</div>
			</div>
			<div class="columnDiv">
				<span class="coluTit">密码：</span>
				<span class="coluCont">
					<input type="password" class="genInput" name="pwd">
				</span>
				<div class="prompt-ok">输入正确</div>
			</div>
			<div class="columnDiv">
				<span class="coluTit">确认密码：</span>
				<span class="coluCont">
					<input type="password" class="genInput" name="user2Pwd">
				</span>
			</div>
			<div class="columnDiv">
				<span class="coluTit">提示问题：</span>
				<span class="coluCont">
					<input type="text" class="genInput" name="question">
				</span>
			</div>
			<div class="columnDiv">
				<span class="coluTit">问题答案：</span>
				<span class="coluCont">
					<input type="text" class="genInput" name="answer">
				</span>
			</div>
			<div class="columnDiv">
				<span class="coluTit">&nbsp;</span>
				<span class="coluCont">
					<input type="submit" name="submit" value="注册" class="nextStep"/>
					<!--<a href="#" class="nextStep">注册</a>--!>
				</span>
				<a class="loginBtn" href="login.php">登陆</a>
			</div>
		</div>
	</form>
</body>
</html>
