<?php include('template/load-header.php')?>

<?php
          
  if(isset($_GET['id'])){
    $id=$_GET['id'];
    if($_SERVER['REQUEST_METHOD']=='POST'){
      $state->editstate($_POST,$id);
    }
  }else{
    if($_SERVER['REQUEST_METHOD']=='POST'){
       $msg=$state->addState($_POST);
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
      <?php if(isset($msg)){echo $msg;}if(isset($_GET['id'])){?>
        <h4 style="color:#002f5f;text-align: Center;padding:10px 0px;"><b>Update State </b></h4>
      <?php }else{?>
           <h4 style="color:#002f5f;text-align: Center;padding:10px 0px;"><b>Add New State </b></h4>
           <?php }?>
           <div class="form-group">
                <label>State Name <sup style="color: red;">*</sup></label>
                <input value="<?php if(isset($_GET['name'])){echo $_GET['name'];}?>" name="State" placeholder="Enter State Name" class="form-control" type="text"autocomplete="off" required />
           </div>

           <input  class="form-control" value="Submit" type="submit" name="submit" id="">
           <br>
      </div>
    </form>
  </div>
</div>
<?php include('template/footer.php')?>