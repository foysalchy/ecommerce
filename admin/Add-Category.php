<?php include('template/load-header.php')?>
<?php
          
  if(isset($_GET['id'])){
    $id=$_GET['id'];
    $st=$_GET['status'];
    if($_SERVER['REQUEST_METHOD']=='POST'){
      $cat->editcat($_POST,$id);
    }
  }else{
    if($_SERVER['REQUEST_METHOD']=='POST'){
       $msg=$cat->addCategory($_POST);
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
           <h4 style="color:#002f5f;text-align: Center;padding:10px 0px;"><b>Add New Category </b></h4>
           <div class="form-group">
                <label>Category Name <sup style="color: red;">*</sup></label>
                <input value="<?php if(isset($_GET['name'])){echo $_GET['name'];}?>" name="cat" placeholder="Enter Category Name" class="form-control" type="text"autocomplete="off" required />
           </div>
           <?php if(isset($_GET['name'])){?>
            <div class="form-group">
                  <label>Status <sup style="color: red;"></sup></label>
                  <select name="status" id="">
                      <option <?php if($st==1){echo 'selected';}?> value="1">Active</option>
                      <option <?php if($st==0){echo 'selected';}?> value="0">Deactive</option>
                  </select>
            </div>
           <?php }?>

           <input  class="form-control" value="Submit" type="submit" name="submit" id="">
           <br>
      </div>
    </form>
  </div>
</div>
<?php include('template/footer.php')?>