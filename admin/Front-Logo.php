<?php include('template/load-header.php')?>
<?php include('template/sidebar.php')?>
<?php
    if($_SERVER['REQUEST_METHOD']=='POST'){
       $msg=$site->front_logo($_FILES);
    }
?>
  <!-- Main content -->
<?php include('template/header.php')?>
<div class="container-fluid mt--6">
  <div class="wrapper">
   
    <form action="" method="post" enctype="multipart/form-data">
      <div class="form add-from" >
      <?php if(isset($msg)){echo $msg;}?>
           <h4 style="color:#002f5f;text-align: Center;padding:10px 0px;"><b>Change Logo</b></h4>
           <div class="form-group">
                <label>Slider Images <sup style="color: red;">*</sup></label><br>
                    <?php
                         $result=$site->getLogo();
                         if($result){
                         while($value=$result->fetch_assoc()){
                         ?>
                         <img style="width:100px" src="<?php echo $value['front'];?>" class="navbar-brand-img" alt="...">
                    <?php }}?>
                    <br>
                <input name="front" type="file" required>
          </div>
         
           <input  class="form-control" value="Submit" type="submit" name="submit" id="">
           <br>
      </div>
    </form>
  </div>
</div>
<?php include('template/footer.php')?>