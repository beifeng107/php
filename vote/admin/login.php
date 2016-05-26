<script>
function chk_form(){
	var loginForm=document.getElementById("loginform");
	if (loginForm.username.value=="") {
		alert("用户名不能为空");
		loginForm.username.focus();
		return false;
	}

	if (loginForm.password.value=="") {
		alert("密码不能为空");
		loginForm.password.focus();
		return false;
	}
}
</script>

<form id="loginform" method='post' action='login_chk.php'>
		<table>
			<tr>
				<td>用户名</td>
				<td><input type='text' name='username'/></td>
				<td>密码</td>
				<td><input type='password' name='password'/></td>
				<td><input type='submit' name='submit' onclick="return chk_form()" value='登录'/></td>
			</tr>
		</table>
</form>