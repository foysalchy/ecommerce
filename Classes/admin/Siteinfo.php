<?php
     class Siteinfo{
             private $db;
             private $fm;
   
             public function __construct(){
                  $this->db=new Functions();
                  $this->fm=new Formates();
             }
          public function logo($file){
              
               $fileName=$file['img']['name'];
               $fileTemp=$file['img']['tmp_name'];
               $explode=explode('.',$fileName);
               $extention=strtolower(end($explode));
               $uniqe=substr(md5(time()),0,10).'.'.$extention;
               $folder="../uploads/".$uniqe;
               move_uploaded_file($fileTemp,$folder);
             
               $query="UPDATE tbl_logo set logo='$folder' where id='1'";
               $exicute=$this->db->insert($query);
               if($exicute){
                    $msgs="<span class='msgs'> Logo Update Success</span>";
                    return $msgs;
               }else{
                    return false;
               }
          }
           public function front_logo($file){
              
               $fileName=$file['front']['name'];
               $fileTemp=$file['front']['tmp_name'];
               $explode=explode('.',$fileName);
               $extention=strtolower(end($explode));
               $uniqe=substr(md5(time()),0,10).'.'.$extention;
               $folder="../uploads/".$uniqe;
               move_uploaded_file($fileTemp,$folder);
             
               $query="UPDATE tbl_logo set front='$folder' where id='1'";
               $exicute=$this->db->insert($query);
               if($exicute){
                    $msgs="<span class='msgs'> Logo Update Success</span>";
                    return $msgs;
               }else{
                    return false;
               }
          }
          public function getLogo(){
               $query="SELECT * from tbl_logo";
               $exicute=$this->db->select($query);
               if($exicute){
                    return $exicute;
                }else{
                     return false;
                }
          }
          public function social($data){
               $fb=$data['fb'];
               $twitter=$data['twitter'];
               $insta=$data['insta'];
               $drib=$data['drib'];
               $skype=$data['skype'];
               $whats=$data['whats'];
               $query="UPDATE tbl_social set link='$fb',link2='$twitter',link3='$insta',link4='$drib',link5='$skype',link6='$whats' where id='1'";
               $exicute=$this->db->insert($query);
               if($exicute){
                    $msgs="<span class='msgs'> Category Update Success</span>";
                    return $msgs;
               }else{
                    return false;
               }
          }
          public function getSocial(){
               $query="SELECT * from tbl_social";
               $exicute=$this->db->select($query);
               if($exicute){
                    return $exicute;
                }else{
                     return false;
                }
          }
          public function getFeatures(){
               $query="SELECT *  from tbl_features";
               $exicute=$this->db->select($query);
               if($exicute){
                    return $exicute;
                }else{
                     return false;
                }
          }
          public function cmDetails(){
               $query="SELECT *  from tbl_company";
               $exicute=$this->db->select($query);
               if($exicute){
                    return $exicute;
                }else{
                     return false;
                }
          }
          public function cmDetailsInsert($data)
          {
               $email=$data['email'];$mobile=$data['mobile'];$address=$data['address'];
                $bank=$data['bank']; $accs=$data['accs']; $ifsc=$data['ifsc']; $holder=$data['holder'];
               $gst=$data['gst'];
               $cin=$data['cin'];
               $name=$data['com'];
               $sintro=$data['sintro'];
               $query="UPDATE tbl_company set bankName='$bank',bankAcc='$accs',ifsc='$ifsc',holder='$holder',email='$email',mobile='$mobile',address='$address',gst='$gst',cin='$cin',comName='$name',sintro='$sintro' where id='1'";
               $exicute=$this->db->update($query);
               if($exicute){
                    $msgs="<span class='msgs'> Details Update Success</span>";
                    return $msgs;
               }else{
                    return false;
               }
          }
          public function features($data,$file){
               $title=$data['title'];
               $des=$data['des'];
               $title2=$data['title2'];
               $des2=$data['des2'];
               $title3=$data['title3'];
               $des3=$data['des3'];

               $sql="SELECT * from tbl_features where id='1'";
               $ex=$this->db->select($sql);
               if($vl=$ex->fetch_assoc()){
                    $icon1=$vl['icon'];
                    $icon3=$vl['icon2'];
                    $icon2=$vl['icon3'];
               }

               $fileName=$file['img']['name'];
               $fileTemp=$file['img']['tmp_name'];
               $explode=explode('.',$fileName);
               $extention=strtolower(end($explode));
               $uniqe=substr(md5(time()),0,10).'.'.$extention;
               $folder="../uploads/".$uniqe;
               move_uploaded_file($fileTemp,$folder);
               if(empty($fileName)){
                    $folder=$icon1;
               }


               $fileName2=$file['img2']['name'];
               $fileTemp2=$file['img2']['tmp_name'];
               $explode2=explode('.',$fileName2);
               $extention2=strtolower(end($explode2));
               $uniqe2=substr(md5(time()),0,7).'.'.$extention2;
               $folder2="../uploads/".$uniqe2;
               move_uploaded_file($fileTemp2,$folder2);
               if(empty($fileName2)){
                    $folder2=$icon2;
               }

               $fileName3=$file['img3']['name'];
               $fileTemp3=$file['img3']['tmp_name'];
               $explode3=explode('.',$fileName3);
               $extention3=strtolower(end($explode3));
               $uniqe3=substr(md5(time()),0,5).'.'.$extention3;
               $folder3="../uploads/".$uniqe3;
               move_uploaded_file($fileTemp3,$folder3);
               if(empty($fileName3)){
                    $folder3=$icon3;
               }

               $query="UPDATE tbl_features set icon='$folder',title='$title',des='$des',icon2='$folder2',title2='$title2',des2='$des2',icon3='$folder3',title3='$title3',des3='$des3'";
               $exicute=$this->db->insert($query);
               if($exicute){
                    $msgs="<span class='msgs'> Features Update Success</span>";
                    return $msgs;
               }else{
                    return false;
               }
          }
          public function footerinfo($data){
               $des=mysqli_real_escape_string($this->db->link,$this->fm->validation($data['des']));
               $query="UPDATE tbl_copyright set des='$des'";
               $exicute=$this->db->insert($query);
               if($exicute){
                    $msgs="<span class='msgs'> Update Success</span>";
                    return $msgs;
               }else{
                    return false;
               }

          }
          public function getfooterinfo(){
               $query="SELECT *  from tbl_copyright";
               $exicute=$this->db->select($query);
               if($exicute){
                    return $exicute;
                }else{
                     return false;
                }
          }

  
            
     }