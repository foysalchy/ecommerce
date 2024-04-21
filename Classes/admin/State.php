<?php
     class State{
             private $db;
             private $fm;
   
             public function __construct(){
                  $this->db=new Functions();
                  $this->fm=new Formates();
             }
          public function addState($data){
               $State=$data['State'];
               $slug=strtolower($State);
               $squery="SELECT * FROM tbl_state where  stateSlug='$slug'";
               $sexicute=$this->db->insert($squery);
              
               if($sexicute->num_rows>0){
                    $msg="<span class='msgr'>State Already Exits</span>";
                    return $msg;
               }else{
                    $query="INSERT INTO tbl_state(stateName,stateSlug) values('$State','$slug')";
                    $exicute=$this->db->insert($query);
                    if($exicute){
                         $msgs="<span class='msgs'>New State Add Success</span>";
                         return $msgs;
                    }else{
                         return false;
                    }
               }
          }
          public function addcountry($data){
               $country=$data['country'];
               $slug=strtolower($country);
               $squery="SELECT * FROM tbl_country where  countrySlug='$slug'";
               $sexicute=$this->db->insert($squery);
              
               if($sexicute->num_rows>0){
                    $msg="<span class='msgr'>country Already Exits</span>";
                    return $msg;
               }else{
                    $query="INSERT INTO tbl_country(countryName,countrySlug) values('$country','$slug')";
                    $exicute=$this->db->insert($query);
                    if($exicute){
                         $msgs="<span class='msgs'>New country Add Success</span>";
                         return $msgs;
                    }else{
                         return false;
                    }
               }
          }
          public function getAllState(){
               $query="SELECT * FROM tbl_state";
               $exicute=$this->db->select($query);
               if($exicute){
                    return $exicute;
               }else{
                    return false;
               }
          }
          public function getAllcountry(){
               $query="SELECT * FROM tbl_country";
               $exicute=$this->db->select($query);
               if($exicute){
                    return $exicute;
               }else{
                    return false;
               }
          }
          public function editState($data,$id){
               $State=$data['State'];
               $slug=strtolower($State);
             
               $query="UPDATE tbl_state set stateName='$State',stateSlug='$slug' where id='$id'";
               $exicute=$this->db->insert($query);
               if($exicute){
                    
                    $_SESSION['msgs']="<span class='msgs'> State Update Success</span>";
                    header('Location:State-List.php');
               }else{
                    return false;
               }
          }
          public function editcountry($data,$id){
               $country=$data['country'];
               $slug=strtolower($country);
             
               $query="UPDATE tbl_country set countryName='$country',countrySlug='$slug' where id='$id'";
               $exicute=$this->db->insert($query);
               if($exicute){
                    
                    $_SESSION['msgs']="<span class='msgs'> country Update Success</span>";
                    header('Location:Country-List.php');
               }else{
                    return false;
               }
          }
          public function deleteState($id){
               $query="DELETE FROM tbl_state where id='$id'";
               $exicute=$this->db->delete($query);
               if($exicute){
                    
                    $msgs="<span class='msgs'> State Delete Success</span>";
                         return $msgs;
               }else{
                    return false;
               }
          }
          public function deletecountry($id){
               $query="DELETE FROM tbl_country where id='$id'";
               $exicute=$this->db->delete($query);
               if($exicute){
                    
                    $msgs="<span class='msgs'> Country Delete Success</span>";
                         return $msgs;
               }else{
                    return false;
               }
          }
            
     }