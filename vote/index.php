<?php
require("class/mysql_class.php");
$res=$db->select('ve_vote','*','1=1');
?>
<a href="admin/login.php">管理员登录</a><br>
<table>
	<tr><th>编号</th><th>主题</th><th>分布时间</th><th>操作</th></tr>
	<?php
	while ($row=$db->arr_res($res)) {
		echo '<tr>';
		echo "<td>$row[id]</td>";
		echo "<td>$row[title]</td>";
		echo "<td>$row[createtime]</td>";
		echo "<td><a href='show_vote.php?vote=$row[id]'>投票</a></td>";
		echo '</tr>';
	}
	?>
</table>