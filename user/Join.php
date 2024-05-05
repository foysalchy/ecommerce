<?php include('template/load-header.php')?>
<?php include('template/sidebar.php')?>
  <!-- Main content -->
<?php include('template/header.php')?>
<div class="container-fluid mt--6">
<div id="contact-page">
     <div class="container">
          <div class="wrapper">
               <?php
                    $spi=Session::get('userCode');
                    if($_SERVER['REQUEST_METHOD']=='POST'){
                         echo $user->joinTeam($_POST,$spi);
                    }
               ?>
               <form action="" method="post">
                    <div class="form form2">
                         <h4 style="color:#002f5f;text-align: left;padding:10px 0px;"><b>Join </b></h4>
                         <div class="form-group">
                              <label>Name <sup style="color: red;">*</sup></label>
                              <input name="name" class="form-control" type="text"autocomplete="off" required />
                         </div>
                         <div class="form-group">
                              <label>Email <sup style="color: red;">*</sup></label>
                              <input class="form-control" type="email"name="email" autocomplete="off" required />
                         </div>
                         <div class="form-group">
                              <label>Side <sup style="color: red;">*</sup></label>
                              <select class="form-control" name="side" id="">
                                   <option value="0">Select a Side</option>
                                   <option value="1">Left</option>
                                   <option value="2">Right</option>
                              </select>
                         </div>
                         <div class="form-group">
                                   <label>States <sup style="color: red;">*</sup></label>
                                   
                                   <select class="form-control" name="state" id="" required>
                                   <?php 
                                        $res=$state->getAllState();
                                        while($vl=$res->fetch_assoc()){
                                   ?>
                                        <option value="<?php echo $vl['stateSlug']?>"><?php echo $vl['stateName']?></option>
                                   <?php }?>
                                   </select>
                         </div>
                         <div class="form-group">
                                   <label>Countries <sup style="color: red;">*</sup></label>
                                   
                                   <select class="form-control" name="country" id="" required>
                                   <?php 
                                        $res=$state->getAllcountry();
                                        while($vl=$res->fetch_assoc()){
                                   ?>
                                        <option value="<?php echo $vl['countrySlug']?>"><?php echo $vl['countryName']?></option>
                                   <?php }?>
                                   </select>
                         </div>
                         <div class="form-group">
                              <label>password <sup style="color: red;">*</sup></label>
                              <input class="form-control" type="password" name="password" autocomplete="off" required />
                         </div>
                         <input  class="form-control" type="submit" value="Singup" name="singup" id="">
                    </div>

               </form>
          </div>
          <br>
     </div>
</div>
</div>
<?php include('template/footer.php')?>