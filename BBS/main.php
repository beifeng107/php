<?php

include("conn/conn.php");
$sql="select a.*,b.userName from tb_leaveword as a,tb_user as b where a.userId=b.id order by a.createTime DESC";
$res=mysql_query($sql);

?>
<table border="0">
	
	<tr><th>标题</th><th>发布者</th><th>发布时间</th></tr>
	<?php
	while($row=mysql_fetch_array($res)){
		$nowdate=date("Y-m-d");
		$tmp=strtotime($row['createTime']);
		$createDate=date("Y-m-d",$tmp);
		$time="";
		if ($nowdate==$createDate) {
			$time=date("H:i",$tmp);
		} else {
			$time=date("m-d",$tmp);
		}
		
		echo "<tr>
		      <td width='400'><a target='_blank' href='showleave.php?leaveid=$row[id]'>$row[title]</a></td>
		      <td>$row[userName]</td>
		      <td>$time</td>
		      </tr>";
	}
	?>
</table>