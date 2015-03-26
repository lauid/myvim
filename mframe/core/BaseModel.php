<?php
class BaseModel{
	//protected static $link;
	protected $link;
	public function __construct(){
		global $config;
		$dbconf = $config['db'];
		$this->link = mysql_connect($dbconf['host'], $dbconf['username'], $dbconf['password']);	
		mysql_select_db($dbconf['database'], $this->link);
		mysql_query('SET NAMES'. $dbconf['charset']);
	}
	public function __destruct(){
		mysql_close($this->link);
	}

	private function _checkSql($sql=''){
		//verify
		return $sql;
	}
	public function lastAffectRows(){
		return mysql_affected_rows($this->link);
	}

	public function query($sql=''){
		return mysql_unbuffered_query($this->_checkSql($sql));
		#return mysql_query($this->_checkSql($sql));
	}

	public function fetch_array($sql=''){
		$result = $this->query($sql);
		#$return mysql_fetch_array($res);
		$rows = array();
		while($row = mysql_fetch_array($result, MYSQL_ASSOC)){
			$rows[]=$row;
		}
		return $rows;
	}

	#---------------------------------------------------38LINE
	public static function first()
	{
		$connection = mysql_connect("localhost","root","liugaohua");
		if (!$connection) {
			die('Could not connect: ' . mysql_error());
		}

		mysql_set_charset("UTF8", $connection);

		mysql_select_db("test", $connection);

		$result = mysql_query("SELECT * FROM articles");

		$rows = array();
		while($row = mysql_fetch_array($result, MYSQL_ASSOC)){
			$rows[]=$row;
		}

		mysql_close($connection);
		return $rows;
	}
}
