<?php
     
     include('../config/Functions.php');
     include('../config/Formates.php');
     class Category{
             private $db;
             private $fm;
   
             public function __construct(){
                  $this->db=new Functions();
                  $this->fm=new Formates();
             }
          public function addCategory($data){
              echo $cat=$data['cat'];
              echo $slug=strtolower($cat);
               $squery="SELECT * FROM tbl_category where  catSlug='$slug'";
               $sexicute=$this->db->insert($squery);
              
               if($sexicute->num_rows>0){
                    $msg="<span class='msgr'>Category Already Exits</span>";
                    return $msg;
               }else{
                    $query="INSERT INTO tbl_category(catName,catSlug) values('$cat','$slug')";
                    $exicute=$this->db->insert($query);
                    if($exicute){
                         $msgs="<span class='msgs'>New Category Add Success</span>";
                         return $msgs;
                    }else{
                         return false;
                    }
               }
          }
          public function getAllCat(){
               $query="SELECT * FROM tbl_category";
               $exicute=$this->db->select($query);
               if($exicute){
                    return $exicute;
               }else{
                    return false;
               }
          }
          public function editcat($data,$id){
               $cat=$data['cat'];
               $status=$data['status'];
               $slug=strtolower($cat);
             
               $query="UPDATE tbl_category set catName='$cat',catSlug='$slug',status='$status' where id='$id'";
               $exicute=$this->db->insert($query);
               if($exicute){
                    $_SESSION['msgs']="<span class='msgs'> Category Update Success</span>";
                    header('Location:Category-List.php');
               }else{
                    return false;
               }
          }
          public function deleteCat($id){
               $query="DELETE FROM tbl_category where id='$id'";
               $exicute=$this->db->delete($query);
               if($exicute){
                    $msgs="<span class='msgs'> Category Delete Success</span>";
                         return $msgs;
               }else{
                    return false;
               }
          }
            
     }