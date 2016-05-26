<?php
session_start();
if (empty($_SESSION['un'])) {
	echo '<script>alert("没有登录，请先登录");location.href="login.php"</script>';
}
?>