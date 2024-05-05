<?php include('template/load-header.php')?>

<?php
          
  if(isset($_GET['uid'])){
    $uid=$_GET['uid'];
      $r=$user->getUSerBank($uid);
      $v=$r->fetch_assoc();
  }
  if(isset($_POST['submit'])){
      $uid=$_GET['uid'];
     $msg= $user->upBank($_POST,$uid);
  }
?>
<?php include('template/sidebar.php')?>
  <!-- Main content -->
<?php include('template/header.php')?>
<div class="container-fluid mt--6">
  <div class="wrapper">
   
    <form action="" method="post">
      <div class="form add-from" >
      <?php if(isset($msg)){echo $msg;}?>
           <h4 style="color:#002f5f;text-align: Center;padding:10px 0px;"><b>Edit User Bank Details </b></h4>
           
           <div class="form-group">
                <label>User Name <sup style="color: red;">*</sup></label>
                <input value="<?php echo $v['userName']?>"  name="name" class="form-control" type="text"  />
           </div>
           <div class="form-group">
                <label>Bank Name <sup style="color: red;">*</sup></label>
                <input value="<?php echo $v['bankName']?>" name="bank" class="form-control" type="text"  />
           </div>
           <div class="form-group">
                <label>Bank Account <sup style="color: red;">*</sup></label>
                <input value="<?php echo $v['bankAccount']?>"  name="acc" class="form-control" type="text"  />
           </div>
           <div class="form-group">
                <label>IFSC <sup style="color: red;">*</sup></label>
                <input value="<?php echo $v['ifsc']?>" name="ifsc" class="form-control" type="text"  />
           </div>

           <input  class="form-control" value="Update" type="submit" name="submit" id="">
           <br>
      </div>
    </form>
  </div>
</div>
<?php include('template/footer.php')?>