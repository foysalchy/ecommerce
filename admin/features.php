<?php include('template/load-header.php')?>
<?php include('template/sidebar.php')?>
<?php
    if($_SERVER['REQUEST_METHOD']=='POST'){
       $msg=$site->features($_POST,$_FILES);
    }
    $result=$site->getFeatures()
?>
  <!-- Main content -->
<?php include('template/header.php')?>
<div class="container-fluid mt--6">
  <div class="wrapper">
   
    <form action="" method="post" enctype="multipart/form-data">
      <div class="form add-from" >
      <?php if(isset($msg)){echo $msg;}?>
           <h4 style="color:#002f5f;text-align: Center;padding:10px 0px;"><b>Features </b></h4>
           <?php while($value=$result->fetch_assoc()){?>
           <div class="form-group">
                <label> Icon<sup style="color: red;">*</sup></label><br>
                <img style="width:70px "src="<?php echo $value['icon']?>" alt="">
                <input name="img" type="file"  required>
          </div>
          <div class="form-group">
                <label>Tite <sup style="color: red;">*</sup></label><br>
                <input  class="form-control" value="<?php echo $value['title']?>" type="text" name="title" id="" required>
          </div>
          <div class="form-group">
                <label>Description <sup style="color: red;">*</sup></label><br>
                <textarea class="form-control"  name="des" id="" cols="30" rows="2" required><?php echo $value['des']?></textarea>
          </div>
          <hr>
          <div class="form-group">
                <label> Icon 2<sup style="color: red;">*</sup></label><br>
                <img style="width:70px "src="<?php echo $value['icon2']?>" alt="">
                <input name="img2" type="file" required>
          </div>
          <div class="form-group">
                <label>Tite 2 <sup style="color: red;">*</sup></label><br>
                <input  class="form-control"  type="text" value="<?php echo $value['title2']?>" name="title2" id="" required>
          </div>
          <div class="form-group">
                <label>Description 2 <sup style="color: red;">*</sup></label><br>
                <textarea class="form-control"  name="des2" id="" cols="30" rows="2" required><?php echo $value['des2']?></textarea>
          </div>
          <hr>
          <div class="form-group">
                <label> Icon 3<sup style="color: red;">*</sup></label><br>
                <img style="width:70px "src="<?php echo $value['icon3']?>" alt="">
                <input name="img3" type="file" required>
          </div>
          <div class="form-group">
                <label>Tite 3 <sup style="color: red;">*</sup></label><br>
                <input  class="form-control" value="<?php echo $value['title3']?>" type="text" name="title3" id="" required>
          </div>
          <div class="form-group">
                <label>Description 3 <sup style="color: red;">*</sup></label><br>
                <textarea class="form-control"  name="des3" id="" cols="30" rows="2" required><?php echo $value['des3']?></textarea>
          </div>
           <?php }?>
           <input  class="form-control" value="Submit" type="submit" name="submit" id="">
           <br>
      </div>
    </form>
  </div>
</div>
<?php include('template/footer.php')?>