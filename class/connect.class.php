<?php

class Dbh{
	private $host 	= 	DB_HOST;
	private $user 	= 	DB_USER;
	private $pass 	= 	DB_PASS;
	private $dbName = 	DB_NAME;
	
	public function connect(){
		$dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbName;
		$pdo = new PDO($dsn, $this->user, $this->pass);
		$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
		return $pdo;
	}
}

?>