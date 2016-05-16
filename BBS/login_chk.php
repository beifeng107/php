<?php

session_start();
include("conn/conn.php");
if (isset($_POST["submit"])) {
	$username=$_POST["username"];
	$password=$_POST["password"];
	$sql="select * from tb_user where userName='$username' and userPwd='$password'";
	$res=mysql_query($sql);
    $row=mysql_fetch_array($res);
    if($row) {
    	$_SESSION["userid"] = $row["id"];
    	$_SESSION["username"] = $row["userName"];
    	$_SESSION["usertype"] = $row["userType"];
    	echo "<script>location.href='index.php'</script>";
    } else {
    	echo "<Script> alert('登录错误'); history.back();</Script>";
    }
} else {
	echo "<Script> alert('登录错误'); location.href='index.php';</Script>";
}

mysql_close($conn);
?>