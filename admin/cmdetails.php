<?php include('template/load-header.php')?>
<?php include('template/sidebar.php')?>
<?php
    if($_SERVER['REQUEST_METHOD']=='POST'){
       $msg=$site->cmDetailsInsert($_POST);
    }
    $result=$site->cmDetails()
?>
  <!-- Main content -->
<?php include('template/header.php')?>
<div class="container-fluid mt--6">
  <div class="wrapper">
   
    <form action="" method="post" enctype="multipart/form-data">
      <div class="form add-from" >
      <?php if(isset($msg)){echo $msg;}?>
           <h4 style="color:#002f5f;text-align: Center;padding:10px 0px;"><b>Details </b></h4>
           <?php while($value=$result->fetch_assoc()){?>
          
          <div class="form-group">
                <label>Slider Header Intro</label><br>
                <input  class="form-control" value="<?php echo $value['sintro']?>" type="text" name="sintro" id="" >
          </div>
           <div class="form-group">
                <label>Company Name <sup style="color: red;">*</sup></label><br>
                <input  class="form-control" value="<?php echo $value['comName']?>" type="text" name="com" id="" required>
          </div>
          <div class="form-group">
                <label>Email <sup style="color: red;">*</sup></label><br>
                <input  class="form-control" value="<?php echo $value['email']?>" type="text" name="email" id="" required>
          </div>
           <div class="form-group">
                <label>Mobile <sup style="color: red;">*</sup></label><br>
                <input  class="form-control" value="<?php echo $value['mobile']?>" type="text" name="mobile" id="" required>
          </div>
           <div class="form-group">
                <label>Address <sup style="color: red;">*</sup></label><br>
                <input  class="form-control" value="<?php echo $value['address']?>" type="text" name="address" id="" required>
          </div>
          
          <div class="form-group">
                <label>GST Number <sup style="color: red;">*</sup></label><br>
                <input  class="form-control" value="<?php echo $value['gst']?>" type="text" name="gst" id="" required>
          </div>
          <div class="form-group">
                <label>CIN Number<sup style="color: red;">*</sup></label><br>
                <input  class="form-control" value="<?php echo $value['cin']?>" type="text" name="cin" id="" required>
          </div>
            <div class="form-group">
                <label>Holder Name<sup style="color: red;">*</sup></label><br>
                <input  class="form-control" value="<?php echo $value['holder']?>" type="text" name="holder" id="" required>
          </div>
          <div class="form-group">
                <label>Bank Name<sup style="color: red;">*</sup></label><br>
                <input  class="form-control" value="<?php echo $value['bankName']?>" type="text" name="bank" id="" required>
          </div>
          <div class="form-group">
                <label>Account Number<sup style="color: red;">*</sup></label><br>
                <input  class="form-control" value="<?php echo $value['bankAcc']?>" type="text" name="accs" id="" required>
          </div>
          <div class="form-group">
                <label>IFSC Number<sup style="color: red;">*</sup></label><br>
                <input  class="form-control" value="<?php echo $value['ifsc']?>" type="text" name="ifsc" id="" required>
          </div>
        
           <?php }?>
           <input  class="form-control" value="Update" type="submit" name="submit" id="">
           <br>
      </div>
    </form>
  </div>
</div>
<?php include('template/footer.php')?>