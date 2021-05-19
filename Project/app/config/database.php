<?php

class Database {
	private $dbHost = 'localhost';
	private $dbName = 'projektas';
	private $dbUserName = 'root';
	private $dbPassword = '';
	public $conn;

	public function getConnection ()
	{
		$this->conn = null;
		try {
		$this->conn = new PDO("mysql:host=" . $this->dbHost . "; dbname=" . $this->dbName, $this->dbUserName, $this->dbPassword);
		} catch (PDOException $exception) {
		echo "Connection problems/errors:" . $exception->getMessage();
		}
		return $this->conn;
	}
}


