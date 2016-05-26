<?php
require("../class/mysql_class.php");
include("session_chk.php"); 

if (!empty($_POST["title"])) {
	$title=$_POST["title"];
	$date=date("Y-m-d H:i:s");
	$user=$_SESSION['un'];

	$db->insert('ve_vote','title,createtime,createuser',"'$title','$date','$user'");
	echo "<script>alert('添加成功');location.href='vote_manage.php';</script>";
}
?>
<script type="text/javascript">
	function chk_form(){
		var voteform=document.getElementById("addvote");
		if (voteform.title.value=="") {
			alert('主题不能为空');
			return false;
		}
	}
</script>
<form method="post" action="add_vote.php" id="addvote">
	<input type="text" name="title"/>
	<input type='submit' name='submit' onclick="return chk_form()" value='提交'/>
</form>