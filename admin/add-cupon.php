<?php include('template/load-header.php')?>
<?php
          
  if(isset($_GET['id'])){
    $id=$_GET['id'];
   
    if($_SERVER['REQUEST_METHOD']=='POST'){
      
      $prod->updateCupon($_POST,$id);
    }
    $code=$_GET['code'];
    $price=$_GET['price'];
  }else{
    if($_SERVER['REQUEST_METHOD']=='POST'){
       $msg=$prod->addCupon($_POST);
    }
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
           <h4 style="color:#002f5f;text-align: Center;padding:10px 0px;"><b>Add New Cupon </b></h4>
           <div class="form-group">
                <label>Cupon Code <sup style="color: red;">*</sup></label>
                <input <?php if(isset($id)){echo 'value="'.$code.'"';}?>  name="code" placeholder="Enter Cupon Code" class="form-control" type="text"autocomplete="off" required />
           </div>
           <div class="form-group">
                <label>Discount (%)<sup style="color: red;">*</sup></label>
                <input  <?php if(isset($id)){echo 'value="'.$price.'"';}?> name="dis" placeholder="Discount %" class="form-control" type="text"autocomplete="off" required />
           </div>
          

           <input  class="form-control" value="Create" type="submit" name="submit" id="">
           <br>
      </div>
    </form>
  </div>
</div>
<?php include('template/footer.php')?>