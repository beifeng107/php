<?php
class mysql{
	private $host;
	private $username;
	private $pwd;
	private $database;
	private $conn;

	function __construct($host,$username,$pwd,$database){
		$this->conn=mysql_connect($host,$username,$pwd);
		mysql_query("SET character_set_connection=utf8, character_set_results=utf8, character_set_client=binary");
		mysql_select_db($database,$this->conn);
	}

	function execute($sql){
		return mysql_query($sql,$this->conn);
	}

	function arr_res($res){
		return mysql_fetch_array($res,$this->conn);
	}

	function num_res($res){
		return mysql_num_rows($res,$this->conn);
	}

	function select($table,$colume,$condition){
		return $this->execute("SELECT $colume FROM $table WHERE $condition");
	}

	function insert($table,$colume,$value){
		return $this->execute("INSERT INTO $table ($colume) VALUES ($value)");
	}

	function update($table,$colume,$value,$condition){
		return $this->execute("UPDATE $table SET $colume = $value WHERE $condition");
	}

	function delete($table,$condition){
		return $this->execute("DELETE FROM $table WHERE $condition");
	}

	function __destruct(){
		mysql_close($this->conn);
	}
	

}
?>