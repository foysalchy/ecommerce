<?php include('template/load-header.php')?>
<?php
          if($_SERVER['REQUEST_METHOD']=='POST'){
       $msg=$site->footerinfo($_POST);
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
           <h4 style="color:#002f5f;text-align: Center;padding:10px 0px;"><b>Footer Details </b></h4>
           <div class="form-group">
                <label>Details <sup style="color: red;">*</sup></label>
                
                <?php
                  $result=$site->getfooterinfo();
                  while($vl=$result->fetch_assoc()){
                ?>
                  <textarea class="form-control"  name="des" id="" cols="30" rows="2"><?php echo $vl['des']?></textarea>
                <?php }?>
           </div>

           <input  class="form-control" value="Submit" type="submit" name="submit" id="">
           <br>
      </div>
    </form>
  </div>
</div>
<?php include('template/footer.php')?>