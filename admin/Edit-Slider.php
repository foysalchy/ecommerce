<?php include('template/load-header.php')?>
<?php
  if(isset($_GET['id'])){
    $id=$_GET['id'];
    $link=$_GET['link'];
    $img=$_GET['slider'];
  }
    if($_SERVER['REQUEST_METHOD']=='POST'){
       $msg=$prod->updateSlider($_POST,$_FILES,$img,$id);
    }
?>
<?php include('template/sidebar.php')?>

  <!-- Main content -->
<?php include('template/header.php')?>
<div class="container-fluid mt--6">
  <div class="wrapper">
   
    <form action="" method="post" enctype="multipart/form-data">
      <div class="form add-from" >
      <?php if(isset($msg)){echo $msg;}?>
           <h4 style="color:#002f5f;text-align: Center;padding:10px 0px;"><b>Update  Slider </b></h4>
           <div class="form-group">
                <label>Slider Images <sup style="color: red;">*</sup></label><br>
                <img style="width:50px" src="<?php echo $img?>" alt="">
                <input name="img" type="file">
          </div>
          <div class="form-group">
                <label>Redirect Link <sup style="color: red;">*</sup></label><br>
                <input  class="form-control" value="<?php echo $link?>"  type="text" name="link" id="" required>
          </div>
           <input  class="form-control" value="Update" type="submit" name="submit" id="">
           <br>
      </div>
    </form>
  </div>
</div>
<?php include('template/footer.php')?>