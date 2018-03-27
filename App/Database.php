<?php
	namespace App;
	use \PDO ;
	class Database
	{
		private $db_name;
		private $db_user;
		private $db_host;
		private $db_pass;
		private $pdo;
		public function __construct($db_name, $db_user ='root',$db_pass ='', $db_host='localhost')
		{
			$this->db_name =$db_name;
			$this->db_user =$db_user;
			$this->db_pass =$db_pass;
			$this->db_host =$db_host;
		}
		private function getPDO()
		{
			if($this->pdo=== null)
			{
				$pdo = new PDO('mysql:dbname=blog;host=localhost','root','');
				$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$this->pdo= $pdo;
			}
			return $this->pdo;
		}
		public function query($statement,$className)
		{
			$req= $this->getPDO()->query($statement);
			$datas = $req->fetchAll(PDO::FETCH_CLASS, $className);
			return $datas;
		}

		public function prepare($statement,$values,$className, $one= false)
		{
			$req= $this->getPDO()->prepare($statement);
			$req->execute ($values);
			$req->setFetchMode(PDO::FETCH_CLASS,$className);
				if($one){
					$datas= $req->fetch();
				}else{
					$datas= $req->fetchAll();
				}
			return $datas;
		}
	}