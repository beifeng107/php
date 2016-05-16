<?php

include("conn/conn.php");
if (isset($_POST["submit"])) {
	$username=$_POST["username"];
    $password=$_POST["password"];
    $repassword=$_POST["repassword"];
    $realname=$_POST["realname"];
    $sex=$_POST["sex"];
    $email=$_POST["email"];
    $tel=$_POST["tel"];
    $qq=$_POST["qq"];
    $face=$_POST["face"];
    $address=$_POST["address"];
    
    $date=date("Y-m-d H:i:s");
    $ip=$_SERVER["REMOTE_ADDR"];

	$chksql="select * from tb_user where userName='$username'";
	$res=mysql_query($chksql);
    if (mysql_fetch_array($res)) {
    	echo "<script>alert('用户名已经被注册');history.go(-1);</script>";
    } else {
    	$regsql="insert into tb_user (userName,userPwd,realName,email,qq,tel,ip,address,face,regTime,sex,userType)
    	         values('$username','$password','$realname','$email','$qq','$tel','$ip','$address','$face','$date','$sex',0)";
    	mysql_query($regsql);
    	if (mysql_affected_rows($conn) == -1) {
    		echo "<Script> alert('注册失败'); location.href='index.php';</Script>";
    	} else {
    		echo "<Script> alert('注册成功'); location.href='index.php';</Script>";
    	}
    	

    }

} else {
	# code...
}

mysql_close($conn);
?>