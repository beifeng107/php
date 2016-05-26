<?php
require("../class/mysql_class.php");
include("session_chk.php"); 

if (!empty($_GET['vote'])) {
	$voteid=$_GET['vote'];
	$res=$db->select('ve_vote','*',"id=$voteid");
	$row=$db->arr_res($res);
}

if (!empty($_POST["options"])) {
	$options=$_POST["options"];
    $opt_arr=explode("|",$options);
    foreach ($opt_arr as $opt) {
    	$db->insert('ve_xvote','option,vote_title,vote_id',"'$opt','$_POST[title]',$_POST[hid]");
    }
	echo "<script>alert('添加成功');location.href='vote_manage.php';</script>";
}

?>
<script type="text/javascript">
	function chk_form(){
		var voteform=document.getElementById("addopts");
		if (voteform.options.value=="") {
			alert('选项内容不能为空');
			return false;
		}
	}
</script>
<form method="post" action="add_options.php" id="addopts">
	<input type="hidden" name="hid" value="<?php echo $voteid?>"/><br>
	<input type="text" name="title" value="<?php echo $row['title']?>" readonly="true"/><br>
	<textarea name="options" rows="20" cols="50"/></textarea><br>
	<input type='submit' name='submit' onclick="return chk_form()" value='提交'/>
</form>