<?php include('template/load-header.php')?>
<?php
if(isset($_GET['id'])){
     $PID=$_GET['id'];
     if($_SERVER['REQUEST_METHOD']=='POST'){
          $msg=$prod->updateProd($_POST,$_FILES,$PID);
     }
}
?>
<?php include('template/sidebar.php')?>

  <!-- Main content -->
<?php include('template/header.php')?>
<?php
     if(isset($_GET['id'])){
          $PID=$_GET['id'];
          if($_SERVER['REQUEST_METHOD']=='POST'){
               $msg=$prod->updateProd($_POST,$_FILES,$PID);
          }
          $result=$prod->getById($PID);
          if($result){
               while($value=$result->fetch_assoc()){
     
 
?>
<div class="container-fluid mt--6">
  <div class="wrapper">
   
    <form action="" method="post" enctype="multipart/form-data">
      <div class="form add-from" >
           <h4 style="color:#002f5f;text-align: Center;padding:10px 0px;"><b>Add New Product </b></h4>
           <div class="form-group">
                <label> Title <sup style="color: red;">*</sup></label>
                <input value="<?php echo $value['title'];?>" name="title"  class="form-control" type="text"autocomplete="off" required />
           </div>
           <div class="form-group">
                <label> Description <sup style="color: red;">*</sup></label>
               
                <textarea name="description"  class="form-control" id="" cols="30" rows="10"><?php echo $value['description'];?></textarea>
           </div>
           <div class="form-group">
                <label style="display:block"> Images  <sup style="color: red;">*</sup></label>
                <img style="width: 40px;height: 40px;object-fit: cover;" src="<?php echo $value['gimg1'];?>" alt="">
                <input style="display:inline-block;margin-bottom:10px" type="file" name="img1" id="">
<br>
                <img style="width: 40px;height: 40px;object-fit: cover;" src="<?php echo $value['gimg2'];?>" alt="">
                <input style="display:inline-block;margin-bottom:10px" type="file" name="img2" id="">
                <br>

                <img style="width: 40px;height: 40px;object-fit: cover;" src="<?php echo $value['gimg3'];?>" alt="">
                <input style="display:inline-block;margin-bottom:10px" type="file" name="img3" id="">
                <br>

                <img style="width: 40px;height: 40px;object-fit: cover;" src="<?php echo $value['gimg4'];?>" alt="">
                <input style="display:inline-block;margin-bottom:10px" type="file" name="img4" id="">
           </div>
          
           <div class="form-group">
                <label> Category <sup style="color: red;">*</sup></label>
                <select class="form-control" name="catid" id="">
                <?php
                
                $result2=$cat->getAllCat();
                if($result2){
                  $i='';
                  while($value2=$result2->fetch_assoc()){
                    $i++;
                ?>
                  <option <?php if($value['catId']==$value2['catSlug']){echo 'selected';}?> value="<?php echo $value2['catSlug']?>"><?php echo $value2['catName']?></option>
                  <?php }}?>
                </select>
            </div>
            <div class="form-group size">
                <label style="display:block"> Size <sup style="color: red;">*</sup></label>
                <input value="<?php echo $value['size1'];?>" name="size1"  type="text"autocomplete="off" required />
                <input value="<?php echo $value['size2'];?>" name="size2"  type="text"autocomplete="off" required />
                <input value="<?php echo $value['size3'];?>" name="size3"  type="text"autocomplete="off" required />
                <input value="<?php echo $value['size4'];?>" name="size4"  type="text"autocomplete="off" required />
                <input value="<?php echo $value['size5'];?>" name="size5"  type="text"autocomplete="off" required />
                <input value="<?php echo $value['size6'];?>" name="size6"  type="text"autocomplete="off" required />
           </div>
           <div class="form-group">
                <label>Regular Price <sup style="color: red;">*</sup></label>
                <input value="<?php echo $value['price'];?>" name="rprice"  class="form-control" type="text"autocomplete="off" required />
           </div>
           <div class="form-group">
                <label>Discount Price <sup style="color: red;"></sup></label>
                <input value="<?php echo $value['disPrice'];?>" name="dprice"  class="form-control" type="text"autocomplete="off"  />
           </div>
           <div class="form-group">
                <label>BV <sup style="color: red;">*</sup></label>
                <input value="<?php echo $value['bv'];?>" name="bv"  class="form-control" type="text"autocomplete="off" required />
           </div>
            <div class="form-group">
                <label>GST <sup style="color: red;">*</sup></label>
                <input value="<?php echo $value['gst'];?>" name="gst"  class="form-control" type="text"autocomplete="off" required />
           </div>
            <div class="form-group">
                <label>CGST <sup style="color: red;">*</sup></label>
                <input value="<?php echo $value['cgst'];?>" name="cgst"  class="form-control" type="text"autocomplete="off" required />
           </div>
            <div class="form-group">
                <label>HSN <sup style="color: red;">*</sup></label>
                <input value="<?php echo $value['hsn'];?>" name="hsn"  class="form-control" type="text"autocomplete="off" required />
           </div>
           <div class="form-group">
                <label> Quantity <sup style="color: red;">*</sup></label>
                <input value="<?php echo $value['quantity'];?>" name="Quantity"  class="form-control" type="text"autocomplete="off" required />
           </div>
           
           <div class="form-group">
                <label> Position <sup style="color: red;">*</sup></label>
                <select name="position" class="form-control" id="">
                     <option <?php  if($value['homeRow']=='0'){echo 'selected';}?> value="0">Default</option>
                     <option <?php  if($value['homeRow']=='1'){echo 'selected';}?> value="1">Home Row 1</option>
                     <option <?php  if($value['homeRow']=='2'){echo 'selected';}?> value="2">Home Row 2</option>
                     <option <?php  if($value['homeRow']=='3'){echo 'selected';}?> value="3">Home Row 3</option>
                </select>
           </div>
           <input  class="form-control" value="Submit" type="submit" name="submit" id="">
           <br>
      </div>
    </form>
  </div>
</div>
<?php include('template/footer.php')?>
<?php }}}?>