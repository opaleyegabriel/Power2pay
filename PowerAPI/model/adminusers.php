<?php
    class Reward{
        private $conn;
        private $table= 'tbl_admin_users';

        public $id;
        public $username;
        public $pwd;
        public $lockstatus;
        


        public function __construct($db){
            $this->conn= $db;
        }

        //getting an admin user(1 user) from database
        public function readsingle(){
          $query= 'SELECT * FROM
              '. $this->table.'
              WHERE username=?
              AND pwd=?
              LIMIT 0,1 
          ';
      
          //Prepare Statement
          $stmt=$this->cnn->prepare($query);
      
          //Bind ID
          $stmt->bindParam(1,$this->username);
          $stmt->bindParam(1,$this->pwd);
      
          //Execute query
          $stmt->execute();
      
          $row=$stmt->fetch(PDO::FETCH_ASSOC);
      
          //Set Properties
          $this->id=$row['id'];
          $this->username=$row['username'];
          $this->pwd=$row['pwd'];
          $this->lockstatus=$row['lockstatus'];
          
      
        }
    
      
}
