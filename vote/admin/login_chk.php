<?php
require('../class/mysql_class.php');

if (!empty($_POST['username']) and !empty($_POST['password'])) {
	$un=$_POST['username'];
	$pwd=$_POST['password'];
	$res=$db->select('admin','*',"username='$un' and password='$pwd'");
	if ($db->num_res($res)==1) {
		session_start();
		$_SESSION['un']=$un;
		echo '<Script>location.href="main.php"</Script>';
	} else {
		echo "<Script> alert('登录错误'); history.back();</Script>";
	}

} else {
	echo "<Script> alert('登录错误'); history.back();</Script>";
}