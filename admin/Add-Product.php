<?php include('template/load-header.php')?>
<?php include('template/sidebar.php')?>
<?php
 if($_SERVER['REQUEST_METHOD']=='POST'){
  $msg=$prod->addProduct($_POST,$_FILES);
}
?>
  <!-- Main content -->
<?php include('template/header.php')?>
<div class="container-fluid mt--6">
  <div class="wrapper">
   
    <form action="" method="post" enctype="multipart/form-data">
      <div class="form add-from" >
      <?php if(isset($msg)){echo $msg;}?>
           <h4 style="color:#002f5f;text-align: Center;padding:10px 0px;"><b>Add New Product </b></h4>
           <div class="form-group">
                <label> Title <sup style="color: red;">*</sup></label>
                <input value="" name="title"  class="form-control" type="text"autocomplete="off" required />
           </div>
           <div class="form-group">
                <label> Description <sup style="color: red;">*</sup></label>
               
                <textarea name="description" class="form-control" cols="30" rows="7"></textarea>
           </div>
           <div class="form-group">
                <label> Images  <sup style="color: red;">*</sup></label>
                <!-- <div style="position:relative" class="img">
                  <label style="position:absolute;width:100%;display: block;text-align: center;cursor:pointer" for="img"><span style="background: linear-gradient(45deg,#00897B,#0081bf);color: white;padding: 10px 43px;border-radius: 5px;border:3px solid white;margin-bottom: 10px;display: block;"><i class="fa fa-edit"></i>Choose</span></label>
                  <input  style="cursor:pointer;position:absolute;opacity:0"id="img"  class="form-control" type="file" autocomplete="off" required />
                </div> -->
                <input style="display:block;margin-bottom:5px" type="file" name="img1" id="">
                <input style="display:block;margin-bottom:5px" type="file" name="img2" id="">
                <input style="display:block;margin-bottom:5px" type="file" name="img3" id="">
                <input style="display:block;margin-bottom:5px" type="file" name="img4" id="">
           </div>
          
           <div class="form-group">
                <label> Category <sup style="color: red;">*</sup></label>
                <select class="form-control" name="catid" id="">
                <?php
                
                $result=$cat->getAllCat();
                if($result){
                  $i='';
                  while($value=$result->fetch_assoc()){
                    $i++;
                ?>
                  <option value="<?php echo $value['catSlug']?>"><?php echo $value['catName']?></option>
                  <?php }}?>
                </select>
            </div>
            <div class="form-group size">
                <label style="display:block"> Size <sup style="color: red;"></sup></label>
                <input value="0" name="size1"  type="text"autocomplete="off" required />
                <input value="0" name="size2"  type="text"autocomplete="off" required />
                <input value="0" name="size3"  type="text"autocomplete="off" required />
                <input value="0" name="size4"  type="text"autocomplete="off" required />
                <input value="0" name="size5"  type="text"autocomplete="off" required />
                <input value="0" name="size6"  type="text"autocomplete="off" required />
           </div>
           <div class="form-group">
                <label>Regular Price <sup style="color: red;">*</sup></label>
                <input value="" name="rprice"  class="form-control" type="text"autocomplete="off" required />
           </div>
           <div class="form-group">
                <label>Discount Price <sup style="color: red;"></sup></label>
                <input value="" name="dprice"  class="form-control" type="text"autocomplete="off"  />
           </div>
            <div class="form-group">
                <label>GST <sup style="color: red;">*</sup></label>
                <input value="" name="gst"  class="form-control" type="text"autocomplete="off" required  />
           </div>
            <div class="form-group">
                <label>CGST <sup style="color: red;">*</sup></label>
                <input value="" name="cgst"  class="form-control" type="text"autocomplete="off" required />
           </div>
           <div class="form-group">
                <label>HSN <sup style="color: red;">*</sup></label>
                <input value="" name="hsn"  class="form-control" type="text"autocomplete="off" required />
           </div>
           <div class="form-group">
                <label>BV <sup style="color: red;">*</sup></label>
                <input value="" name="bv"  class="form-control" type="text"autocomplete="off" required />
           </div>
           <div class="form-group">
                <label> Quantity <sup style="color: red;"></sup></label>
                <input value="" name="Quantity"  class="form-control" type="text"autocomplete="off" required />
           </div>
           <div class="form-group">
                <label> Position <sup style="color: red;">*</sup></label>
                <select name="position" class="form-control" id="">
                     <option value="0">Default</option>
                     <option value="1">Home Row 1</option>
                     <option value="2">Home Row 2</option>
                     <option value="3">Home Row 3</option>
                </select>
           </div>

           <input  class="form-control" value="Submit" type="submit" name="submit" id="">
           <br>
      </div>
    </form>
  </div>
</div>
<?php include('template/footer.php')?>