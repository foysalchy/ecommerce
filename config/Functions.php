<?php
     include('config.php');
     class Functions{
          public $host=	DB_HOST;
		public $user=	DB_USER;
		public $pass=	DB_PASS;
          public $name= 	DB_NAME;
          
          public $link;
          public $error;

          public function __construct(){
               $this->dbConnect();
          }
          public function dbConnect(){
               $this->link= new mysqli($this->host,$this->user,$this->pass,$this->name);
               if(!$this->link){
                    $this->error="CONNECTION LOST".$this->link->connect_error;
                    
                    return false;
               }
          }
          public function insert($query){
               $exicute=$this->link->query($query) or die(mysqli_error($this->link));
               if($exicute){
                    return $exicute;
               }else{
                    return false;
               }
          }
          public function select($query){
               $exicute=$this->link->query($query) or die(mysqli_error($this->link));
               if($exicute->num_rows>0){
                    return $exicute;
               }else{
                    return false;
               }
          }
          public function delete($query){
               $exicute=$this->link->query($query) or die(mysqli_error($this->link));
               if($exicute){
                    return $exicute;
               }else{
                    return false;
               }
          }
          public function update($query){
               $exicute=$this->link->query($query) or die(mysqli_error($this->link));
               if($exicute){
                    return $exicute;
               }else{
                    return false;
               }
          }

     }