<?php
session_start();
?>
<table>
	<tr><td>bbs</td></tr>
	<?php
	if (!empty($_SESSION["userid"]) and !empty($_SESSION["username"])){
		echo "<tr>";
		include("userinfo.php");
		echo "</tr>";
	} else {
		echo "<tr>";
		include("login.php");
		echo "</tr>";
	}
	?>
</table>
<?php
include("main.php");
?>