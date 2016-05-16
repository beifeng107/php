<?php

//session_start();
if (!empty($_SESSION["username"])) {
	?>
	<table>
		<tr>
			<td>欢迎您:</td>
			<td><?php echo $_SESSION["username"]?>&nbsp&nbsp</td>
			<td>今天是:</td>
			<td><?php echo date("Y年m月d日")?>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
			<td><a href="addleave.php">发布新贴</a></td>
			<td><a href="logout.php">退出</a></td>
		</tr>
	</table>
	<?php
}

?>