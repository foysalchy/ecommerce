<?php include('template/load-header.php')?>
<?php

    if($_SERVER['REQUEST_METHOD']=='POST'){
       $msg=$user->withdraw($_POST);
    }
    
?>
<?php include('template/sidebar.php')?>

  <!-- Main content -->
<?php include('template/header.php')?>
<div class="container-fluid mt--6">
  <div class="wrapper">
 
    <form action="" method="post">
      <div class="form add-from" >
      <?php $r=$user->getbank();
       if($r){$v=$r->fetch_assoc()?>
       <h4 style="color:#002f5f;text-align: Center;padding:10px 0px;"><b>Bank Details </b></h4>
         <strong><p> Holder Name:<?php echo $v['userName'];?></p>
         <p> Bank Name:<?php echo $v['bankName'];?></p>
         <p> Bank Account:<?php echo $v['bankAccount'];?></p>
         <p> IFSC:<?php echo $v['ifsc'];?></p></strong>
      <?php  }else{?>
      <?php if(isset($msg)){echo $msg;}?>
           <h4 style="color:#002f5f;text-align: Center;padding:10px 0px;"><b>Bank Details </b></h4>

           <div class="form-group">
                <label>Bank Name <sup style="color: red;">*</sup></label>
                <input   name="bank" placeholder="Enter Bank Name" class="form-control" type="text"autocomplete="off" required />
           </div>
            <div class="form-group">
                <label>Holder Name <sup style="color: red;">*</sup></label>
                <input   name="holder" placeholder="Enter Holder Name" class="form-control" type="text"autocomplete="off" required />
           </div>
           <div class="form-group">
                <label>Bank Account Number <sup style="color: red;">*</sup></label>
                <input  name="account" placeholder="Enter Account Number" class="form-control" type="text"autocomplete="off" required />
           </div>
           <div class="form-group">
                <label>IFSC <sup style="color: red;">*</sup></label>
                <input  name="ifsc" placeholder="Enter IFSC" class="form-control" type="text"autocomplete="off" required />
           </div>
          
          

           <input  class="form-control" value="Request" type="submit" name="submit" id="">
           <br>
           <?php }?>
      </div>
    </form>
   
  </div>
</div>
<?php include('template/footer.php')?>