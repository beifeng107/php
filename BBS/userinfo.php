<?php

//session_start();
include("conn/conn.php");
if (!empty($_SESSION["username"]) and !empty($_SESSION["userid"])) {
	$sql="select * from tb_user where id=$_SESSION[userid]";
	$res=mysql_query($sql);
	$row=mysql_fetch_array($res);
	?>
	<table>
		<tr>
			<td>欢迎您:</td>
			<td><?php echo $_SESSION["username"]?>&nbsp&nbsp</td>
			<td>今天是:</td>
			<td><?php echo date("Y年m月d日")?>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
			<td><a href="addleave.php">发布新贴</a></td>
			<td><a href="logout.php">退出</a></td>
			<td><a href="usersetting.php?id=<?php echo $_SESSION['userid']?>"><img onerror="this.src='images/default.jpg'" width="60px" src="images/<?php echo $rows['face']?>.jpg"/></a></td>
		</tr>
	</table>
	<?php
}

?>