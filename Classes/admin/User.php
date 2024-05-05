<?php
     class User{
             private $db;
             private $fm;
   
             public function __construct(){
                  $this->db=new Functions();
                  $this->fm=new Formates();
             }

          public function getAllUser(){
               $query="SELECT * FROM tbl_users where status='1'  ORDER BY uid DESC";
               $exicute=$this->db->select($query);
               if($exicute){
                    return $exicute;
               }else{
                    return false;
               }
          }
                   public function myTeam($log_id){
                   
               $query="SELECT * FROM tbl_users where customId='$log_id'";
                $exicute=$this->db->select($query);
                if($exicute){
                     $value=$exicute->fetch_assoc();
                }
                $lft=$value['leftSide'];
                if($lft!=0){
                     $sql="select * from tbl_users where customId='$lft'";
                     $exicute2=$this->db->select($sql);
                     if($exicute2){
                          $vl=$exicute2->fetch_assoc();
                     }
                     echo '<tr>
                          <td>'.$vl["customId"].'</td>
                          <td>'.$vl["name"].'</td>
                          <td>'.$vl["email"].'</td>
                          <td>'.$vl["state"].'</td>
                          <td>Left</td>
                          <td>AZ#'.$vl["sponserId"].'</td>
                          <td>'.$vl["placementId"].'</td>
                     </tr>';
                }
            
               $rt =$value['rightSide'];
                if($rt!=0){
                    $sql2="select * from tbl_users where customId='$rt'";
                     $exicute3=$this->db->select($sql2);
                    if($exicute3){
                         $vl2=$exicute3->fetch_assoc();
                    }
                   echo '<tr>
                          <td>'.$vl2["customId"].'</td>
                          <td>'.$vl2["name"].'</td>
                          <td>'.$vl2["email"].'</td>
                          <td>'.$vl2["state"].'</td>
                          <td>Right</td>
                          <td>AZ#'.$vl2["sponserId"].'</td>
                          <td>'.$vl2["placementId"].'</td>
                     </tr>';
               }

                if($lft!=0){
                     $b=$value['leftSide'];
                     $this->myTeam($b);
                }
                if($rt!=0){
                     $b=$value['rightSide'];
                     $this->myTeam($b);
                }
     }
              public function get_eligible(){
               $query="SELECT eligible.*,bank.*,u.name,u.blance from tbl_eligible as eligible,tbl_bank as bank,tbl_users as u where eligible.left>=500 and eligible.right>=500 and eligible.self>=500 and bank.userCode=u.customId and  bank.userCode=eligible.ubCode";
               $exicute=$this->db->select($query);
               if($exicute){
                    return $exicute;
               }else{
                    return false;
               }
          }
           public function  downLine($id){
               $query="SELECT * FROM tbl_users where sponserId='$id'";
               $exicute=$this->db->select($query);
               if($exicute){
                    return $exicute;
               }else{
                    return false;
               }
            
          }
            public function getAllUserBAnk(){
               $query="SELECT b.*,u.blance,u.name from tbl_bank as b,tbl_users as u where b.userCode=u.customId";
               $exicute=$this->db->select($query);
               if($exicute){
                    return $exicute;
               }else{
                    return false;
               }
          }
          public function getUSerBank($uid){
               $query="SELECT * FROM tbl_bank where userCode='$uid'";
               $exicute=$this->db->select($query);
               if($exicute){
                    return $exicute;
               }else{
                    return false;
               }
          }
          public function getAllUser3(){
               $query="SELECT * FROM tbl_users";
               $exicute=$this->db->select($query);
               if($exicute){
                    return $exicute;
               }else{
                    return false;
               }
          }
          public function getAllUser4(){
               $query="SELECT * FROM tbl_users where sponserId='0' and placementId='0'";
               $exicute=$this->db->select($query);
               if($exicute){
                    return $exicute;
               }else{
                    return false;
               }
          }
          public function getAllUser2(){
               $query="SELECT * FROM tbl_users where status='0'";
               $exicute=$this->db->select($query);
               if($exicute){
                    return $exicute;
               }else{
                    return false;
               }
          }
          public function earn(){
               $cy=date('Y');
               $query="SELECT * FROM tbl_order where year='$cy'";
               $exicute=$this->db->select($query);
               if($exicute){
                    return $exicute;
               }else{
                    return false;
               }
          }
          public function deleteuser($id){
               $query="DELETE FROM tbl_users where uid='$id'";
               $exicute=$this->db->delete($query);
               if($exicute){
                    $msgs="<span class='msgs'> User Delete Success</span>";
                         return $msgs;
               }else{
                    return false;
               }
          }
          public function deactive($id){
               $query="UPDATE tbl_users set status='0' where uid='$id'";
               $exicute=$this->db->insert($query);
               if($exicute){
                    $msgs="<span class='msgs'>User Deactive Success</span>";
                    return $msgs;
               }else{
                    return false;
               }
          }
          public function upBank($data,$id){
               $name    =$data['name'];
               $bank    =$data['bank'];
               $acc    =$data['acc'];
               $ifsc    =$data['ifsc'];

               $query="UPDATE tbl_bank set userName='$name',bankName='$bank',bankAccount='$acc',ifsc='$ifsc' where userCode='$id'";
               $exicute=$this->db->insert($query);
               if($exicute){
                    $msgs="<span class='msgs'> Update  Success</span>";
                    return $msgs;
               }else{
                    return false;
               }
          }
          public function logUser($uc){
              
               $query2="SELECT * FROM tbl_users where customId='$uc'";
               $exicute2=$this->db->select($query2);
               if($exicute2){
                   return $exicute2;
               }else{
                   return false;
               }
          }
          public function upUser($uc,$data){
               $name=mysqli_real_escape_string($this->db->link,$this->fm->validation($data['name']));
               $birth=mysqli_real_escape_string($this->db->link,$this->fm->validation($data['birth']));
               $gender=mysqli_real_escape_string($this->db->link,$this->fm->validation($data['gender']));
               $email=mysqli_real_escape_string($this->db->link,$this->fm->validation($data['email']));
               $mobile=mysqli_real_escape_string($this->db->link,$this->fm->validation($data['mobile']));
               $address=mysqli_real_escape_string($this->db->link,$this->fm->validation($data['address']));
               $nominee=mysqli_real_escape_string($this->db->link,$this->fm->validation($data['nominee']));
               $relation=mysqli_real_escape_string($this->db->link,$this->fm->validation($data['relation']));
               $state=mysqli_real_escape_string($this->db->link,$this->fm->validation($data['state']));
               $country=mysqli_real_escape_string($this->db->link,$this->fm->validation($data['country']));
               $pin=mysqli_real_escape_string($this->db->link,$this->fm->validation($data['pin']));

               $query="UPDATE tbl_users set name='$name',email='$email',birth='$birth',gender='$gender',mobile='$mobile',address='$address',nominee='$nominee',relation='$relation',pin='$pin',state='$state',country='$country' where customId='$uc'";
               $exicute=$this->db->update($query);
               if($exicute){
                    $msgs="<span class='msgs'>Profile Update Successful</span>";
                    return $msgs;
               }else{
                    return false;
               }
          }
          public function payUser($uc,$data){
               $amount= $data['amount'];
               $bank= $data['bank'];
               $account= $data['account'];
               $query="select * from tbl_users where customId='$uc'";
               $exicute=$this->db->select($query);
               if($exicute){
                    $v=$exicute->fetch_assoc();
                    $cb=$v['blance'];
                    $tot=$cb-$amount;
                    $query2="UPDATE tbl_users set blance='$tot' where customId='$uc'";
                    $exicute2=$this->db->update($query2);
                    $queryu="UPDATE tbl_eligible set `left`='0',`right`='0'  where ubCode='$uc' ";
                    $this->db->update($queryu);
                    
                    if($exicute2){
                         $query3="INSERT into tbl_withdraw(uid,bank,account,amount) values('$uc','$bank','$account','$amount')";
                         $exicute3=$this->db->insert($query3);
                         
                            $query22="UPDATE tbl_bv set wStatus='1' where userCode='$uc'";
                            $exicute22=$this->db->update($query22);
                            
                             $query222="UPDATE tbl_percent set wStatus='1' where userCode='$uc' and wStatus='0'";
                            $exicute222=$this->db->update($query222);
                            
                         if($exicute3){
                              $msgs="<span class='msgs'> Amount Send  Success</span>";
                              return $msgs;
                         }else{
                              return false;
                         }
                    }
               }
          }
          public function active($id){
               $query="UPDATE tbl_users set status='1' where uid='$id'";
               $exicute=$this->db->insert($query);
               if($exicute){
                    $msgs="<span class='msgs'>User Deactive Success</span>";
                    return $msgs;
               }else{
                    return false;
               }
          }
          public function getCashIn()
          {
              $query="SELECT * From tbl_income " ;
              $exicute=$this->db->select($query);
              if($exicute){
                   return $exicute;
              }else{
                   return false;
              }
          }
          public function fetch_left_right($p,$pid){
               if($p==1){
                    $pos='leftSide';
               }else{
                    $pos='rightSide';
               }
               $query="SELECT * FROM `tbl_users` where `customId`='$pid' ";
               $exicute=$this->db->select($query);
               if($pid!=0){
                    $vl=$exicute->fetch_assoc();
                   return $vl[$pos];
               }else{
                    return 0;
               }
          
          }
          public function bonuse()
          {
              $query="SELECT * From tbl_percent " ;
              $exicute=$this->db->select($query);
              if($exicute){
                   return $exicute;
              }else{
                   return false;
              }
          }
          public function getAllKyc(){
               $sql="select * from tbl_kyc";
               $run=$this->db->select($sql);
               if($run){
                    return $run;
               }else{
                    return false;
               }
          }
          public function kyc_Accept($id)
          {
               $query="UPDATE tbl_kyc set status='1' where id='$id'";
               $exicute=$this->db->update($query);
               if($exicute){
                    $msgs="<span class='msgs'>Kyc Verified Success</span>";
                    return $msgs;
               }else{
                    return false;
               }
          }
          public function reject_kyc($id)
          {
               $query="DELETE FROM tbl_kyc where id='$id'";
               $exicute=$this->db->delete($query);
               if($exicute){
                    $msgs="<span class='msgs'> kyc Delete Success</span>";
                         return $msgs;
               }else{
                    return false;
               }
          }
          public function withdrawHis(){
               $query="SELECT * From tbl_withdraw where status='1'" ;
               $exicute=$this->db->select($query);
               if($exicute){
                    return $exicute;
               }else{
                    return false;
               }
          }
          public function withdrawHis2(){
               $query="SELECT * From tbl_withdraw where status='0'" ;
               $exicute=$this->db->select($query);
               if($exicute){
                    return $exicute;
               }else{
                    return false;
               }
          }
          public function withdrawDone($id)
          {
               $query="UPDATE tbl_withdraw set status='1' where id='$id'";
               $exicute=$this->db->update($query);
               if($exicute){
                    $msgs="<span class='msgs'>Withdraw Request Complete</span>";
                    return $msgs;
               }else{
                    return false;
               }
          }
     }