<?php
     
     class Pages{
          private $db;
          private $fm;

          public function __construct(){
               $this->db=new Functions();
               $this->fm=new Formates();
          }
          public function selectAbout(){
               $query="select * from tbl_page where type='1'";
               $exicute=$this->db->select($query);
               if($exicute){
                    return $exicute;
               }else{
                    return false;
               }
          }
          public function updateAbout($data,$file){
               $query1="SELECT * FROM tbl_page where type='1'";
               $exicute1=$this->db->select($query1);
               while($value=$exicute1->fetch_assoc()){
                
               $title=$data['title'];
               $title2=$data['title2'];
               $title3=$data['title3'];
               $des=$data['description'];
               $des2=$data['description2'];
               $des3=$data['description3'];

               $fileName1=$file['img1']['name'];
               $fileTemp1=$file['img1']['tmp_name'];
               $explode1=explode('.',$fileName1);
               $extention1=strtolower(end($explode1));
               $uniqe1=substr(md5(time()),0,6).'.'.$extention1;
               $folder1="../uploads/".$uniqe1;
               if(empty($fileName1)){
                    $folder1=$value['img'];
               }
                move_uploaded_file($fileTemp1,$folder1);

               $fileName2=$file['img2']['name'];
               $fileTemp2=$file['img2']['tmp_name'];
               $explode2=explode('.',$fileName2);
               $extention2=strtolower(end($explode2));
               $uniqe2=substr(md5(time()),0,7).'.'.$extention2;
               $folder2="../uploads/".$uniqe2;
               if(empty($fileName2)){
                    $folder=$value['img2'];
               }
               move_uploaded_file($fileTemp2,$folder2);

               
               $fileName3=$file['img3']['name'];
               $fileTemp3=$file['img3']['tmp_name'];
               $explode3=explode('.',$fileName3);
               $extention3=strtolower(end($explode3));
               $uniqe3=substr(md5(time()),0,10).'.'.$extention3;
               $folder3="../uploads/".$uniqe3;
               if(empty($fileName3)){
                    $folder=$value['img3'];
               }
                     move_uploaded_file($fileTemp3,$folder3);
               

               $query="UPDATE tbl_page set title='$title',title2='$title2',title3='$title3',description='$des',description2='$des2',description3='$des3',img='$folder1',img2='$folder2',img3='$folder3' where id='1'";
               $exicute=$this->db->insert($query);
               if($exicute){
                    
                    $msgs="<span class='msgs'>Page Update Success</span>";
                    return $msgs;
               }else{
                    return false;
               }
          }
          }
          
     }