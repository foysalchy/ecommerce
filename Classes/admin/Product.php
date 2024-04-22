<?php
     
     class Product{
          private $db;
          private $fm;

          public function __construct(){
               $this->db=new Functions();
               $this->fm=new Formates();
          }
          public function addSlider($data,$file){
               $link=$data['link'];

               $fileName=$file['img']['name'];
               $fileTemp=$file['img']['tmp_name'];
               $explode=explode('.',$fileName);
               $extention=strtolower(end($explode));
               $uniqe=substr(md5(time()),0,10).'.'.$extention;
               $folder="../uploads/".$uniqe;
               move_uploaded_file($fileTemp,$folder);

               $query="INSERT INTO tbl_slider(images,link) values('$folder','$link')";
               $exicute=$this->db->insert($query);
               if($exicute){
                    $msgs="<span class='msgs'> New Slider Add Success</span>";
                    return $msgs;
                }else{
                     return false;
                }

          }
          public function getAllSlider(){
               $query="SELECT * from tbl_slider";
               $exicute=$this->db->select($query);
               if($exicute){
                    return $exicute;
                }else{
                     return false;
                }
          }
          public function deleteSlider($id){
               $query="DELETE FROM tbl_slider where id='$id'";
               $exicute=$this->db->delete($query);
               if($exicute){
                    
                    $msgs="<span class='msgs'> Slider Delete Success</span>";
                         return $msgs;
               }else{
                    return false;
               }
          }
          public function updateSlider($data,$file,$img,$id){
               $link=$data['link'];
             
               $fileName=$file['img']['name'];
               $fileTemp=$file['img']['tmp_name'];
               $explode=explode('.',$fileName);
               $extention=strtolower(end($explode));
               $uniqe=substr(md5(time()),0,10).'.'.$extention;
               $folder="../uploads/".$uniqe;
               move_uploaded_file($fileTemp,$folder);
               if(empty($fileName)){
                    $folder=$img;
               }

               $query="UPDATE tbl_slider set images='$folder',link='$link' where id='$id'";
               $exicute=$this->db->insert($query);
               if($exicute){
                    $_SESSION['msgs']="<span class='msgs'> Slider Update Success</span>";
                    header('Location:Slider-List.php');
               }else{
                    return false;
               }
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