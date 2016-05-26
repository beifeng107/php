<?php
require("class/mysql_class.php");
if (!empty($_GET['vote'])) {
	$voteid=$_GET['vote'];
	$res1=$db->select('ve_vote','*',"id=$voteid");
	$res2=$db->select('ve_xvote','*',"vote_id=$voteid");
	$row=$db->arr_res($res1);
}
?>
<form method="post" action="votes_chk.php">
	<table>
		<tr><th>主题:<?php echo $row['title']?></th><td>投票结果</td></tr>
		<?php 
		while ($r=$db->arr_res($res2)) {
			$opt=$r['option'];
			$optid=$r['id'];
			echo "<tr>";
			echo "<td><input type='radio' name='votes' value='$optid' /> $opt</td>";
			echo "<td>$r[votes]票</td>";
			echo "</tr>";
		}
		?>
	</table>
	<input type="hidden" name="hid" value="<?php echo $row['id']?>" />
	<input type="submit" name="submit" value="提交" />
</form>