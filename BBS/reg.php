<html>
<head>
	<script src="js/form_chk.js"></script>
</head>
<body>
	<form id="reg_form" method="post" action="reg_chk.php">
		用户名：<input type="text" name="username"/><br/>
		密 码：<input type="password" name="password"><br/>
		重复密码：<input type="password" name="repassword"><br/>
		真实姓名：<input type="text" name="realname"><br/>
		性别：<select name="sex"><option>男</option><option>女</option></select><br/>
		E-mail：<input type="text" name="email"><br/>
		联系电话：<input type="text" name="tel"><br/>
		QQ：<input type="text" name="qq"><br/>
		头像选择：<select name="face" onchange="changeFace()">
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
				</select><img name="img" src="images/1.jpg" width="50px"/><br/>
        联系地址：<input type="text" name="address"><br/>
        <input type="submit" name="submit" onclick="return regFormChk()" value="注册">
        <input type="reset" name="reset" value="重写"><br/>
	</form>
</body>
</html>