<?php 
require("../class/mysql_class.php");
include("session_chk.php");
$res=$db->select('ve_vote','*','1=1');
?>
<table border="1">
	<caption>投票主题管理</caption>
	<tr><td colspan="4"><a href="add_vote.php">添加主题</a></td></tr>
	<tr><th>主题</th><th>发布人</th><th>发布时间</th><th>操作</th></tr>
	<?php
	while ($row=$db->arr_res($res)) {
		echo '<tr>';
		echo "<td>$row[title]</td>";
		echo "<td>$row[createuser]</td>";
		echo "<td>$row[createtime]</td>";
		echo "<td><a href=''>删除</a><a href='add_options.php?vote=$row[id]'>添加选项</a></td>";
		echo '</tr>';
	}
	?>
</table>