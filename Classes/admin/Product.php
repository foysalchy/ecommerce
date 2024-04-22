<?php
     
     class Product{
          private $db;
          private $fm;

          public function __construct(){
               $this->db=new Functions();
               $this->fm=new Formates();
          }
         
          public function addCupon($data){
              $code= $data['code'];
               $dis =$data['dis'];
               $query="INSERT into tbl_cupon(code,discount) values('$code','$dis')";
               $exicute=$this->db->insert($query);
               if($exicute){
                    $_SESSION['msgs']="<span class='msgs'> Cupon Create Success</span>";
               }else{
                    return false;
               }
          }
          public function getCupon(){
              
                $query="SELECT * from tbl_cupon";
                $exicute=$this->db->insert($query);
                if($exicute){
                    return $exicute;
                }else{
                     return false;
                }
           }
        
          public function updateCupon($data,$id){
               $code= $data['code'];
                $dis =$data['dis'];
                $query="UPDATE tbl_cupon set code='$code',discount='$dis' where id='$id'";
                $exicute=$this->db->insert($query);
                if($exicute){
                     $_SESSION['msgs']="<span class='msgs'> Cupon Update Success</span>";
                     header('Location:cupon-list.php');
                }else{
                     return false;
                }
           }
         
     }