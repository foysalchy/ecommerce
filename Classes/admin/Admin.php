<?php
        include('../config/Functions.php');
        include('../Classes/admin/Session.php');
        include('../config/Formates.php');
        Session::acheckLogin();
        class Admin{
             private $db;
             private $fm;
   
             public function __construct(){
                  $this->db=new Functions();
                  $this->fm=new Formates();
             }
             public function login($data){
                  $email = mysqli_real_escape_string($this->db->link,$this->fm->validation($data['email']));
                  $pass = mysqli_real_escape_string($this->db->link,$this->fm->validation(md5($data['password'])));
                  if(empty($email) || empty($pass)){
                       $msg="<span class='msgr'>USER OR PASSWORD MUST NOT BE EMPTY</span>";
                       return $msg;
                  }else{
                       $query="SELECT * FROM tbl_admin WHERE email='$email' AND password='$pass'" ;
                       $exicute=$this->db->select($query);
                       if($exicute){
                            $value=$exicute->fetch_assoc();
                            Session::set('alogin',true);
                            Session::set('adminId',$value['id']);
                            Session::set('admin',$value['adminName']);
                            Session::set('adminEmail',$value['email']);
                            Session::set('adminPass',$value['pass']);
                            header('Location:dashboard.php');
                       }else{
                            $msg="<span class='msgr'>USER OR PASSWORD INCORRECT</span>";
                            return $msg;
                       }
   
                  }
             }
          }