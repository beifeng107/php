<?php

include("conn/conn.php");
$sql="select a.*,b.userName from tb_leaveword as a,tb_user as b where a.userId=b.id order by a.createTime DESC";
$res1=mysql_query($sql);

$pagesize=5;
$count=mysql_num_rows($res1);
$pages=ceil($count/$pagesize);

if (!empty($_GET["page"])) {
	$nowpage=$_GET["page"];
} else {
	$nowpage=1;
}
$pagesql="select a.*,b.userName from tb_leaveword as a,tb_user as b where a.userId=b.id order by a.createTime DESC limit ".($nowpage-1)*$pagesize.",$pagesize";

$res=mysql_query($pagesql);

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
		$title=iconv_substr($row["title"],0,20);
		echo "<tr>
		      <td width='400'><a target='_blank' href='showleave.php?leaveid=$row[id]'>$title</a></td>
		      <td>$row[userName]</td>
		      <td>$time</td>
		      </tr>";
	}
	?>
	<tr>
		<td>
			共<?php echo $pages ?>页&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<?php
				echo "当前第".$nowpage."页&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
				if ($nowpage>1) {
				 	$lastpage=$nowpage-1;
				 	echo "<a href='index.php?page=$lastpage'>上一页</a>&nbsp&nbsp";
			 	}
			 	
				if ($nowpage!=$pages) {
				 	$nextpage=$nowpage+1;
				 	echo "<a href='index.php?page=$nextpage'>下一页</a>";
			 	} 

			?>
		</td>
	</tr>
</table>

