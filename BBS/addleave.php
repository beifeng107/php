<?php

session_start();
include("conn/conn.php");
if (isset($_POST["title"]) and isset($_SESSION["userid"])) {
	$userid=$_SESSION['userid'];
	$title=$_POST["title"];
	$content=$_POST["content"];
	$date=date("Y-m-d H:i:s");

	$addsql="insert into tb_leaveword (userId,createTime,title,content) values ($userid,'$date','$title','$content')";
	mysql_query($addsql);
	if (mysql_affected_rows($conn)==-1) {
		echo "<Script> alert('发布失败'); location.href='index.php';</Script>";
	} else {
		echo "<Script> alert('发布成功'); location.href='index.php';</Script>";
	}
	
} 
mysql_close($conn);
?>
<form method="post" action="addleave.php">
标题：<input type="text" name="title" size="50"/><br/><br/>
内容：<textarea name="content" rows="20" cols="50"/></textarea><br>
<input type="submit" name="submit" value="发布">
<input type="reset" name="reset" value="重写">
</form>