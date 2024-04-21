<?php include('template/load-header.php')?>
<?php include('template/sidebar.php')?>
<?php
 if($_SERVER['REQUEST_METHOD']=='POST'){
  $msg=$page->updateAbout($_POST,$_FILES);
}
     $prod=new Product();
     $result=$page->selectAbout();
?>
  <!-- Main content -->
<?php include('template/header.php')?>
<div class="container-fluid mt--6">
  <div class="wrapper">
   
    <form action="" method="post" enctype="multipart/form-data">
      <div class="form add-from" >
      <?php if(isset($msg)){echo $msg;}?>
           <h4 style="color:#002f5f;text-align: Center;padding:10px 0px;"><b>About Us </b></h4>
           <?php if($result){while($value=$result->fetch_assoc()){?>
           <div class="form-group">
                <label> Header <sup style="color: red;">*</sup></label>
                <input value="<?php echo $value['title']?>" name="title"  class="form-control" type="text"autocomplete="off" required />
           </div>
           <div class="form-group">
                <label> Images  <sup style="color: red;">*</sup></label>
                <br>
                <img style="width:70px;margin-bottom:10px" src="<?php echo $value['img']?>" alt="">
                <input style="display:block;margin-bottom:5px" type="file" name="img1" id="">
           </div>
           <div class="form-group">
                <label> Description <sup style="color: red;">*</sup></label>
               
                <textarea class="form-control" name="description" id="" cols="30" rows="2"><?php echo $value['description']?></textarea>
           </div>
           <hr>
           <div class="form-group">
                <label> Title <sup style="color: red;">*</sup></label>
                <input value="<?php echo $value['title2']?>" name="title2"  class="form-control" type="text"autocomplete="off" required />
           </div>
           <div class="form-group">
                <label> Images  <sup style="color: red;">*</sup></label>
                <br>
                 <img style="width:70px;margin-bottom:10px" src="<?php echo $value['img2']?>" alt="">
                <input style="display:block;margin-bottom:5px" type="file" name="img2" id="">
           </div>
           <div class="form-group">
                <label> Description <sup style="color: red;">*</sup></label>
                <textarea class="form-control" name="description2" id="" cols="30" rows="2"><?php echo $value['description2']?></textarea>
           </div>
           <hr>
           <div class="form-group">
                <label> Title <sup style="color: red;">*</sup></label>
                <input value="<?php echo $value['title3']?>" name="title3"  class="form-control" type="text"autocomplete="off" required />
           </div>
           <div class="form-group">
                <label> Images  <sup style="color: red;">*</sup></label>
                <br>
                <img style="width:70px;margin-bottom:10px" src="<?php echo $value['img3']?>" alt="">
                <input style="display:block;margin-bottom:5px" type="file" name="img3" id="">
           </div>
           <div class="form-group">
                <label> Description <sup style="color: red;">*</sup></label>
                <textarea class="form-control" name="description3" id="" cols="30" rows="2"><?php echo $value['description3']?></textarea>
           </div>
        
           <input  class="form-control" value="Submit" type="submit" name="submit" id="">
           <br>
           <?php }}?>
      </div>
    </form>
  </div>
</div>
<?php include('template/footer.php')?>