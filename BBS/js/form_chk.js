function regFormChk() {
	var regForm=document.getElementById("reg_form");
	if (regForm.username.value=="") {
		alert("用户名不能为空");
		regForm.username.focus();
		return false;
	}

	if (regForm.password.value=="") {
		alert("密码不能为空");
		regForm.password.focus();
		return false;
	}

	if (regForm.repassword.value=="") {
		alert("重复密码不能为空");
		regForm.repassword.focus();
		return false;
	}

	if (regForm.realname.value=="") {
		alert("真实姓名不能为空");
		regForm.realname.focus();
		return false;
	}

	if (regForm.email.value=="") {
		alert("邮箱地址不能为空");
		regForm.email.focus();
		return false;
	}

	if (regForm.tel.value=="") {
		alert("联系电话不能为空");
		regForm.tel.focus();
		return false;
	}

	if (regForm.qq.value=="") {
		alert("QQ号码不能为空");
		regForm.qq.focus();
		return false;
	}

	if (regForm.address.value=="") {
		alert("联系地址不能为空");
		regForm.address.focus();
		return false;
	}

	if (regForm.password.value != regForm.repassword.value) {
		alert("密码不一致");
		regForm.repassword.focus();
		return false;
	}

    var mailpatt= /\w+@\w+\.(com)$/;
    if (!mailpatt.test(regForm.email.value)) {
    	alert("邮箱格式不正确");
		regForm.email.focus();
		return false;
    }

    var telpatt= /\d{3,4}-\d{7,8}$|1[3,5,8]\d{9}$/;
    if (!telpatt.test(regForm.tel.value)) {
		alert("电话号码格式不正确");
		regForm.tel.focus();
		return false;
	}

	var qqpatt= /^[^0]\d{6,9}$/;
	if (!qqpatt.test(regForm.qq.value)) {
		alert("QQ号码格式不正确");
		regForm.qq.focus();
		return false;
	}

}

function changeFace(){
	var regForm=document.getElementById("reg_form");
	var facenum=regForm.face.value;
    regForm.img.src="images/"+facenum+".jpg";
}