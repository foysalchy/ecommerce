<?php include('template/load-header.php')?>
<?php include('template/sidebar.php')?>
<?php
    if($_SERVER['REQUEST_METHOD']=='POST'){
       $msg=$prod->addSlider($_POST,$_FILES);
    }
?>
  <!-- Main content -->
<?php include('template/header.php')?>
<div class="container-fluid mt--6">
  <div class="wrapper">
   
    <form action="" method="post" enctype="multipart/form-data">
      <div class="form add-from" >
      <?php if(isset($msg)){echo $msg;}?>
           <h4 style="color:#002f5f;text-align: Center;padding:10px 0px;"><b>Add New Slider </b></h4>
           <div class="form-group">
                <label>Slider Images <sup style="color: red;">*</sup></label><br>
                <input name="img" type="file" required>
          </div>
          <div class="form-group">
                <label>Redirect Link <sup style="color: red;">*</sup></label><br>
                <input  class="form-control"  type="text" name="link" id="" required>
          </div>
           <input  class="form-control" value="Submit" type="submit" name="submit" id="">
           <br>
      </div>
    </form>
  </div>
</div>
<?php include('template/footer.php')?>