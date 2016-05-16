<?php

$conn=mysql_connect("localhost","root","111111");
mysql_query("SET character_set_connection=utf8, character_set_results=utf8, character_set_client=binary");
mysql_select_db("bbs",$conn);

?>