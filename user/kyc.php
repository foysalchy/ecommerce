<?php include('template/load-header.php')?>
<?php include('template/sidebar.php')?>
  <!-- Main content -->
<?php include('template/header.php')?>
<div class="container-fluid mt--6">
  <div class="wrapper">
   <?php
      if($_SERVER['REQUEST_METHOD']=='POST'){
        $msg= $user->kyc($_FILES,$_POST);
      }
      $result=$user->get_Kyc();
      if($result){
        while($value=$result->fetch_assoc()){
          if($value['status']==0){
            echo 'We Review Your KYC Document Please Wait Some Time';
          }elseif($value['status']==1){
            echo '<p style="color:green;text-align:center;font-size: 30px;font-weight: 700;">KYC is verified</p>';
          }
        }
      }else{
   ?>
      <form action="" method="post" enctype="multipart/form-data">
        <div class="form add-from" >
        <?php if(isset($msg)){echo $msg;}?>
            <h4 style="color:#002f5f;text-align: Center;padding:10px 0px;"><b>KYC Canter </b></h4>
            <p style="color:red;text-align:center">We provide withdrawal only for verified KYC user</p>
            <div class="form-group">
                  <label> Aadhar <sup style="color: red;">*</sup></label><br>
                  <input name="aadhar" type="file" required>
            </div>
            <div class="form-group">
                  <label> Pan <sup style="color: red;">*</sup></label><br>
                  <input name="pan" type="file" required>
            </div>
            <div class="form-group">
                  <label> Pan Card Number<sup style="color: red;">*</sup></label><br>
                  <input name="penNumber" type="text" required>
            </div>
            <div class="form-group">
                  <label> Bank Statment <sup style="color: red;">*</sup></label><br>
                  <input name="bank" type="file" required>
            </div>
          
            <input  class="form-control" value="Verify" type="submit" name="submit" id="">
            <br>
        </div>
      </form>
   <?php }?>
  </div>
</div>
<?php include('template/footer.php')?>