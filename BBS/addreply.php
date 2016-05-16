<?php

 session_start();
 include("conn/conn.php");

if (!empty($_SESSION["userid"]) and isset($_POST["replycontent"])) {
	$leaveid=$_POST["hlid"];
	$userid=$_SESSION["userid"];
    $content=$_POST["replycontent"];
	$date=date("Y-m-d H:i:s");
	$replysql="insert into tb_replyword (userId,createTime,content,leaveId) values($userid,'$date','$content',$leaveid)";
    $res=mysql_query($replysql);
    if (mysql_affected_rows()==-1){
    	echo "<Script> alert('评论失败'); history.go(-1);</Script>";
    } else {
    	echo "<Script> alert('评论成功');location.href='showleave.php?leaveid=$leaveid';</Script>";
    }
} else {
    echo "<Script> alert('评论失败'); history.go(-1);</Script>";
}


?>