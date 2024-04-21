<?php include('template/load-header.php')?>
<?php include('template/sidebar.php')?>
<?php
    if($_SERVER['REQUEST_METHOD']=='POST'){
       $msg=$site->social($_POST);
    }
?>
  <!-- Main content -->
<?php include('template/header.php')?>
<div class="container-fluid mt--6">
  <div class="wrapper">
   
    <form action="" method="post" enctype="multipart/form-data">
      <div class="form add-from" >
      <?php if(isset($msg)){echo $msg;}?>
           <h4 style="color:#002f5f;text-align: Center;padding:10px 0px;"><b>Social link </b></h4>
           <?php
              $result=$site->getSocial();
              if($result){
                while($value=$result->fetch_assoc()){
           ?>
          <div class="form-group">
                <label>Fb Link <sup style="color: red;">*</sup></label><br>
                <input  value="<?php echo $value['link'];?>" class="form-control"  type="text" name="fb" id="" >
          </div>
          <div class="form-group">
                <label>Twitter Link <sup style="color: red;">*</sup></label><br>
                <input value="<?php echo $value['link2'];?>" class="form-control"  type="text" name="twitter" id="" >
          </div>
          <div class="form-group">
                <label>Instagram Link <sup style="color: red;">*</sup></label><br>
                <input value="<?php echo $value['link3'];?>" class="form-control"  type="text" name="insta" id="" >
          </div>
          <div class="form-group">
                <label>Dribbble Link <sup style="color: red;">*</sup></label><br>
                <input value="<?php echo $value['link4'];?>" class="form-control"  type="text" name="drib" id="" >
          </div>
          <div class="form-group">
                <label>Skype Link <sup style="color: red;">*</sup></label><br>
                <input value="<?php echo $value['link5'];?>" class="form-control"  type="text" name="skype" id="" >
          </div>
          <div class="form-group">
                <label>Whatsapp Link <sup style="color: red;">*</sup></label><br>
                <input value="<?php echo $value['link6'];?>" class="form-control"  type="text" name="whats" id="" >
          </div>
          

           <input  class="form-control" value="Update" type="submit" name="submit" id="">
           <br>
            <?php }}?>
      </div>
    </form>
  </div>
</div>
<?php include('template/footer.php')?>