<?php

session_start();
include("conn/conn.php");

if (!empty($_GET["leaveid"])) {
	$leaveid=$_GET["leaveid"];
	$sql="select a.*,b.userName,b.face from tb_leaveword as a,tb_user as b where a.userId=b.id and a.id=$leaveid";
	$res=mysql_query($sql);
	$row=mysql_fetch_array($res);

}
?>
<table border="1">
	<tr><th width="100">主题</th><td width="700"><?php echo $row["title"]?></td></tr>
	<tr><td width="100" align="center"><img onerror="this.src='images/default.jpg'" width="60px" src="images/<?php echo $row['face']?>.jpg"/><br/><?php echo $row["userName"]?></td><td width="700"><p><?php echo $row["content"]?></p><p align="right"><font face="verdana" size="2">----<?php echo $row["createTime"]?></font></p></td></tr>
<?php

$replysql="select a.*,b.userName,b.face from tb_replyword as a,tb_user as b where a.userId=b.id and a.leaveId=$leaveid";
$ret=mysql_query($replysql);
while ($rows=mysql_fetch_array($ret)) {
	?>
		<tr><td width="100" align="center"><img onerror="this.src='images/default.jpg'" width="60px" src="images/<?php echo $rows['face']?>.jpg"/><br/><?php echo $rows["userName"]?></td><td width="700"><p><?php echo $rows["content"]?></p><p align="right"><font face="verdana" size="2">----<?php echo $rows["createTime"]?></font></p></td></tr>
	<?php
}
?>
</table>
<?php
if (!empty($_SESSION["userid"])) {
	?>
	<hr>
	<form action="addreply.php" method="post">
		<input type="hidden" name="hlid" value="<?php echo $leaveid?>">
		<table>
		<tr><th width="100">评论内容</th><td><textarea rows="10" cols="50" name="replycontent"></textarea></td></tr>
		</table>
		<input type="submit" name="submit" value="评论">
	</form>
	<?php
}
?>