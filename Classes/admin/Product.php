<?php
     
     class Product{
          private $db;
          private $fm;

          public function __construct(){
               $this->db=new Functions();
               $this->fm=new Formates();
          }
          public function addProduct($data,$file){
              $title       =    $data['title'];
              $description =    mysqli_real_escape_string($this->db->link,$this->fm->validation($data['description']));;
              
              $bv       =    $data['bv'];
              $hsn       =    $data['hsn'];
              $catid       =    $data['catid'];
              $size1       =    $data['size1'];
              $size2       =    $data['size2'];
              $size3       =    $data['size3'];
              $size4       =    $data['size4'];
              $size5       =    $data['size5'];
              $size6       =    $data['size6'];
              $rprice      =    $data['rprice'];
              $dprice      =    $data['dprice'];
              $gst      =    $data['gst'];
              $cgst      =    $data['cgst'];
              if(empty($dprice)){
               $dprice=$rprice;
              }
              $Quantity    =    $data['Quantity'];
              if(empty($Quantity)){
                  $Quantity='0';
              }
              $position    =    $data['position'];


              $fileName=$file['img1']['name'];
              $fileTemp=$file['img1']['tmp_name'];
              $explode=explode('.',$fileName);
              $extention=strtolower(end($explode));
              $uniqe=substr(md5(time()),0,10).'.'.$extention;
              $folder="../uploads/".$uniqe;
              if(empty($fileName)){
                   $folder=0;
              }else{
               move_uploaded_file($fileTemp,$folder);
              }
              $fileName2=$file['img2']['name'];
              $fileTemp2=$file['img2']['tmp_name'];
              $explode2=explode('.',$fileName2);
              $extention2=strtolower(end($explode2));
              $uniqe2=substr(md5(time()),0,10).'.'.$extention2;
              $folder2="../uploads/".$uniqe2;
              if(empty($fileName2)){
                   $folder2=0;
              }else{
                    move_uploaded_file($fileTemp2,$folder2);
              }
              $fileName3=$file['img3']['name'];
              $fileTemp3=$file['img3']['tmp_name'];
              $explode3=explode('.',$fileName3);
              $extention3=strtolower(end($explode3));
              $uniqe3=substr(md5(time()),0,10).'.'.$extention3;
              $folder3="../uploads/".$uniqe3;
              if(empty($fileName3)){
                   $folder3=0;
              }else{
                    move_uploaded_file($fileTemp3,$folder3);
              }
              $fileName4=$file['img4']['name'];
              $fileTemp4=$file['img4']['tmp_name'];
              $explode4=explode('.',$fileName4);
              $extention4=strtolower(end($explode4));
              $uniqe4=substr(md5(time()),0,10).'.'.$extention4;
              $folder4="../uploads/".$uniqe4;
              if(empty($fileName4)){
                   $folder4=0;
              }else{
               move_uploaded_file($fileTemp4,$folder4);
              }


              $query="INSERT into tbl_product(title,description,gimg1,gimg2,gimg3,gimg4,catId,price,disPrice,quantity,size1,size2,size3,size4,size5,size6,homeRow,bv,gst,cgst,hsn) values('$title','$description','$folder','$folder2','$folder3','$folder4','$catid','$rprice','$dprice','$Quantity','$size1','$size2','$size3','$size4','$size5','$size6','$position','$bv','$gst','$cgst','$hsn')";
              $exicute=$this->db->insert($query);
               if($exicute){
                    $msgs="<span class='msgs'>New Product Add Success</span>";
                    return $msgs;
               }else{
                    return false;
               }
          }
          public function getAllProd(){
               $query="SELECT * FROM tbl_product ORDER BY productId DESC";
               $exicute=$this->db->select($query);
               if($exicute){
                    return $exicute;
               }else{
                    return false;
               }
          }
        
          public function deleteProd($id){
               $query="DELETE FROM tbl_product where productId='$id'";
               $exicute=$this->db->delete($query);
               if($exicute){
                    
                    $msgs="<span class='msgs'> Product Delete Success</span>";
                         return $msgs;
               }else{
                    return false;
               }
          }
          public function orderDelet($id){
               $query="DELETE FROM tbl_order where id='$id'";
               $exicute=$this->db->delete($query);
               if($exicute){
                    
                    $msgs="<span class='msgs'> Order Delete Success</span>";
                         return $msgs;
               }else{
                    return false;
               }
          }
          public function getById($id){
               $query="SELECT * FROM tbl_product where  productId='$id'";
               $exicute=$this->db->select($query);
               if($exicute){
                    return $exicute;
               }else{
                    return false;
               }
          }
          public function updateProd($data,$file,$id){
               $query="SELECT * FROM tbl_product where  productId='$id'";
               $exicute=$this->db->select($query);
               while($value=$exicute->fetch_assoc()){
                 

                  $bv       =    $data['bv'];
                   $hsn       =    $data['hsn'];
                  $title       =    $data['title'];
                  $description =    $data['description'];
                  $catid       =    $data['catid'];
                  $size1       =    $data['size1'];
                  $size2       =    $data['size2'];
                  $size3       =    $data['size3'];
                  $size4       =    $data['size4'];
                  $size5       =    $data['size5'];
                  $size6       =    $data['size6'];
                  $rprice      =    $data['rprice'];
                  $dprice      =    $data['dprice'];
                  $gst      =    $data['gst'];
              $cgst      =    $data['cgst'];
                  if(empty($dprice)){
                    $dprice=$rprice;
                   }
                  $Quantity    =    $data['Quantity'];
                  $position    =    $data['position'];
    
                  $fileName=$file['img1']['name'];
                  $fileTemp=$file['img1']['tmp_name'];
                  $explode=explode('.',$fileName);
                  $extention=strtolower(end($explode));
                  $uniqe=substr(md5(time()),0,10).'.'.$extention;
                  $folder="../uploads/".$uniqe;
                  if(empty($fileName)){
                       $folder=$value['gimg1'];
                  }
                   move_uploaded_file($fileTemp,$folder);
                  
                  $fileName2=$file['img2']['name'];
                  $fileTemp2=$file['img2']['tmp_name'];
                  $explode2=explode('.',$fileName2);
                  $extention2=strtolower(end($explode2));
                  $uniqe2=substr(md5(time()),0,10).'.'.$extention2;
                  $folder2="../uploads/".$uniqe2;
                  if(empty($fileName2)){
                       $folder2=$value['gimg2'];
                  }
                    move_uploaded_file($fileTemp2,$folder2);

                  $fileName3=$file['img3']['name'];
                  $fileTemp3=$file['img3']['tmp_name'];
                  $explode3=explode('.',$fileName3);
                  $extention3=strtolower(end($explode3));
                  $uniqe3=substr(md5(time()),0,10).'.'.$extention3;
                  $folder3="../uploads/".$uniqe3;
                  if(empty($fileName3)){
                       $folder3=$value['gimg3'];
                  }move_uploaded_file($fileTemp3,$folder3);
                  $fileName4=$file['img4']['name'];
                  $fileTemp4=$file['img4']['tmp_name'];
                  $explode4=explode('.',$fileName4);
                  $extention4=strtolower(end($explode4));
                  $uniqe4=substr(md5(time()),0,10).'.'.$extention4;
                  $folder4="../uploads/".$uniqe4;
                  if(empty($fileName4)){
                       $folder4=$value['gimg4'];
                  }
                   move_uploaded_file($fileTemp4,$folder4);
                   $sql="UPDATE tbl_product set gst='$gst',cgst='$cgst',title='$title',description='$description',gimg1='$folder',gimg2='$folder2',gimg3='$folder3',gimg4='$folder4',catId='$catid',price='$rprice',disPrice='$dprice',quantity='$Quantity',size1='$size1',size2='$size2',size3='$size3',size4='$size4',size5='$size5',size6='$size6',homeRow='$position',bv='$bv',hsn='$hsn' where  productId='$id'";
                   $exicute2=$this->db->insert($sql);
                   if($exicute2){
                         $_SESSION['msgs']="<span class='msgs'> Product Update Success</span>";
                         header('Location:Product-List.php');
                    }else{
                         return false;
                    }
               }
          }
          // slider
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
           public function getAllOrder(){
               
               $query="SELECT o.*,p.title from tbl_order as o, tbl_product as p where o.pid=p.productId ORDER BY o.id DESC";
               $exicute=$this->db->select($query);
               if($exicute){
                    return $exicute;
               }else{
                    return false;
               }
          }
          public function getallinvoice(){
               $uid=Session::get('userId');
               $query="SELECT * from tbl_invoice ORDER BY id DESC";
               $exicute=$this->db->select($query);
               if($exicute){
                    return $exicute;
               }else{
                    return false;
               }
          }
          public  function completeOrder($id)
          {
               $query="UPDATE tbl_order set status='1' where id='$id'";
               $exicute=$this->db->update($query);
               if($exicute){
                    $msg="<span class='msgs'> Delevery Complete</span>";
                    return $msg;
               }else{
                    return false;
               }
          }
          public  function undeliver($id)
          {
               $query="UPDATE tbl_order set status='0' where id='$id'";
               $exicute=$this->db->update($query);
               if($exicute){
                    $msg="<span class='msgs'> Delevery Status Removed</span>";
                    return $msg;
               }else{
                    return false;
               }
          }
          public function orderDetails($id)
          {
               $query="SELECT o.*,p.title,p.gimg1,p.gimg2,p.gimg3,p.gimg4,u.* from tbl_order as o, tbl_product as p ,tbl_users as u where o.pid=p.productId and o.id='$id' and u.uid=o.userID";
               $exicute=$this->db->select($query);
               if($exicute){
                    return $exicute;
               }else{
                    return false;
               }
          }

          public function paymentPaid($oid){

                    $sql3="SELECT * from tbl_order where id='$oid'";
                    $exicute3=$this->db->select($sql3);
                    if($exicute3){

                         $s="UPDATE tbl_order set payType='1' where id='$oid'";
                         $this->db->update($s);

                         while($vl=$exicute3->fetch_assoc()){
                              $uid=$vl['userID'];
                              $quantity=$vl['quantity'];
                              $productId=$vl['pid'];
                              
                                   $sql4="SELECT * from tbl_product where productId='$productId'";
                                   $exicute4=$this->db->select($sql4);
                                   if($exicute4){
                                        $vl1=$exicute4->fetch_assoc();
                                        $bv=$vl1['bv']*$quantity;
                                   }

                                   $sql5="SELECT * from tbl_users where uid='$uid'";
                                   $exicute5=$this->db->select($sql5);
                                   $val2=$exicute5->fetch_assoc();
                                   $blance=$val2['selfPurches']+$bv;
                                   $pos=$val2['side'];
                                   $uc=$val2['customId'];
                                   $sql6="UPDATE tbl_users set selfPurches='$blance' where uid='$uid'";
                                   $this->db->update($sql6);


                                   $sql7="INSERT INTO tbl_income(uCode,amount,process) values('$uc','$bv','Pruches Bonuse')";
                                   $this->db->insert($sql7);
                                   $this->week($uc,$bv,$pos);
                                   if($bv>499){
                                        $s1e="SELECT * FROM tbl_eligible where ubCode='$uc' ";
                                        $sexi3=$this->db->select($s1e);
                                        if(!$sexi3){
                                             $ksql="SELECT * from tbl_kyc where usCode='$uc' and status='1'";
                                             $kesi=$this->db->select($ksql);
                                             if($kesi){
                                                  $sql3e="INSERT INTO tbl_eligible(ubCode,self,kycStatus) values('$uc','500','1') ";
                                                  $this->db->insert($sql3e);
                                             }else{
                                                  $sql3e="INSERT INTO tbl_eligible(ubCode,self) values('$uc','500') ";
                                                  $this->db->insert($sql3e);
                                             }
                                             
                                        }
                                   
                                   }
                    
                         }
                         $msgs="<span class='msgs'> Order Payment Success</span>";
                         return $msgs;
                    }
             
          }
          public function week($uCode,$bv,$pos){
               date_default_timezone_set("Asia/Kolkata");
              $c_date=date("Y-m-d");
               while($uCode!=0){
                    
                    if($pos==2){
                         $pos="right";
                    }
                    if($pos==1){
                         $pos="left";
                    }
                    if(Session::get('userCode')!=$uCode){
                         $query5="INSERT INTO tbl_bv(userCode,amount,side,date) values('$uCode','$bv','$pos','$c_date')";
                         $exicute5=$this->db->insert($query5);
                          $s1e="SELECT * FROM tbl_eligible where ubCode='$uCode' ";
                              $sexi3e=$this->db->select($s1e);
                              if($sexi3e){
                                   $queryu="UPDATE tbl_eligible set `$pos`=`$pos`+'$bv'  where ubCode='$uCode' ";
                                   $this->db->update($queryu);
                                   
                              }
                    }
                    $pos=$this->findPos($uCode);
                    $uCode=$this->placeId($uCode);
                    
               }
               
          }
           public function findPos($spons){
               $query7="SELECT * FROM tbl_users where customId='$spons'";
               $exicute7=$this->db->select($query7);
               if($exicute7){
                    $data2=$exicute7->fetch_assoc();
                    $pos=$data2['side'];
                    if($pos==1){
                         $pos="left";
                    }
                    if($pos==2){
                         $pos="right";
                    }
                    return $pos;
               }
          }

          public function placeId($spons){
               $query6="SELECT * FROM `tbl_users` where `customId`='$spons'";
               $exicute6=$this->db->select($query6);
               $data=$exicute6->fetch_assoc();
               return $data['placementId'];
          }
     }