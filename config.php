<?php
defined("DB_SERVER") ? null : define("DB_SERVER", "localhost");
defined("DB_USER") ? null : define("DB_USER", "user");
defined("DB_PASS") ? null : define("DB_PASS", "");
defined("DB_NAME") ? null : define("DB_NAME", "studycase");
defined("DB_CHARSET") ? null : define("DB_CHARSET", "utf8mb4");
?>

<?php

class PDODatabase{
	public $connection;
	function __construct(){
		$this->open_connection();
	}
	public function open_connection(){
		$dsn ="mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET;
		try{
			$this->connection = new PDO($dsn, DB_USER, DB_PASS);
			$this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch(PDOException $e){
			throw new PDOException($e->getMessage(), (int)$e->getCode());
		}
	}
	public function close_connection(){
		try{
			$this->connection = null;
		} catch(PDOException $e){
			die($e->getMessage());
		}
	}
	public function query($sql){
		try{
			$query = $this->connection->query($sql);
			$result = $query->fetchAll();
		} catch(PDOException $e){
			$result = $e->getMessage();
		}
		return $result;
	}
}
$db = new PDODatabase;
?> 