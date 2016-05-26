<?php
require("class/mysql_class.php"); 
if (!empty($_POST['votes']) and !empty($_POST['hid'])) {
	$optid=$_POST['votes'];
	$db->update('ve_xvote','votes','votes+1',"id=$optid");
	echo "<script>alert('投票成功');location.href='show_vote.php?vote=$_POST[hid]'</script>";
}
?>