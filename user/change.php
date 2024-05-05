<?php include('template/load-header.php')?>
<?php include('template/sidebar.php')?>
  <!-- Main content -->
<?php include('template/header.php')?>
<div class="container-fluid mt--6">
  <div class="wrapper">
   <?php
      if($_SERVER['REQUEST_METHOD']=='POST'){
        $msg= $user->passChange($_POST);
      }
     
   ?>
      <form action="" method="post" enctype="multipart/form-data">
        <div class="form add-from" >
        <?php if(isset($msg)){echo $msg;}?>
            <h4 style="color:#002f5f;text-align: Center;padding:10px 0px;"><b>Password Change </b></h4>
        
            <div class="form-group">
                  <label>New Password<sup style="color: red;">*</sup></label><br>
                  <input name="pass"  class="form-control" type="text">
            </div>
          
          
            <input  class="form-control" value="Change" type="submit" name="submit" id="">
            <br>
        </div>
      </form>
  </div>
</div>
<?php include('template/footer.php')?>