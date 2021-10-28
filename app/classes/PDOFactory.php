<?php

class PDOFactory
{

	private $db="mysql:dbname=simplegame;host=localhost:8080;charset=utf8";
	private $login="root";
	private $password="example";
	

	private $pdo;


	public function __construct(){

		if($this->pdo==null){	
			$this->pdo = new PDO($this->db,$this->login,$this->password);
			$this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			$this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
			$this->pdo->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, 'SET NAMES utf8');
		}
	}

}
