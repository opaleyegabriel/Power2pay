<?php
	class Database{
		//DB Params
		private $host='localhost';

		//private $db_name='cfrmtsjr_land';
		private $db_name='dreamcit_power2pay';

		//private $db_name='yeasaorg_power2pay_coop';
		//private $username='cfrmtsjr_land';
		private $username='dreamcit_root';
		//private $username='yeasaorg_root';

		//private $password ='Olabode@01';
		private $password ='Olabode@001';


		//private $password='olabode@01';

		private $conn;

		//DB Connect
		public function connect(){
			$this->conn=null;
			try{
				$this->conn= new PDO('mysql:host='.$this->host.';dbname='.$this->db_name,$this->username,$this->password);
				$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			}
			catch(PDOException $e){
				echo 'Connection Error: '.$e->getMessage();
			}
			return $this->conn;
		}
	}
