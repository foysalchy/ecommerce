<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Create Your New Account </title>
     <link rel="stylesheet" href="assets/css/bootstrap.min.css">
     <link rel="stylesheet" href="assets/css/style.css">
     <link rel="stylesheet" href="assets/css/slick.css">
     <link rel="stylesheet" href="assets/css/icofont.css">

     <script src="assets/js/jquery.js"></script>
     <script src="assets/js/bootstrap.min.js"></script>
     <script src="assets/js/slick.js"></script>
     <script src="assets/js/main.js"></script>
</head>
<body>
      <br>
      <br>
      <br>
<!--================about  Area start=================-->
<div id="contact-page">
     <div class="container">
          <div class="wrapper">
               <p style="text-align: center;">
               <?php
                         spl_autoload_register(function($class){
                              include_once 'Classes/frontend/'.$class.'.php';
                         });
                         $users=new Users();
                         $site=new Siteinfo();
                         $state=new State();
                         $result=$site->getLogo();
                         if(isset($_POST['singup'])){
                           echo   $msg=$users->singUp($_POST);
                         }
                         if($result){
                         while($value=$result->fetch_assoc()){
                         ?>
                         <img  style="width: 120px;padding: 10px 0px;"  src="admin/<?php echo $value['logo'];?>" class="navbar-brand-img" alt="...">
               <?php }}?>               
              
               </p>
                    <form action="" method="post">
                         <div class="form form2">
                              <h4 style="color:#002f5f;text-align: left;padding:10px 0px;"><b>Sign Up </b></h4>
                              <div class="form-group">
                                   <label>Sponser Id <sup style="color: red;">*</sup></label>
                                   <input id="sponser" onBlur="checkAvailability7()" name="sponser" class="form-control" type="text"autocomplete="off"  required/>
                              </div>
                               <div class="form-group">
                                  <span style="color:red"id="user-availability-status7"></span>
                                </div>
                        <script> 
                                  function checkAvailability7() {
      $("#loaderIcon").show();
      jQuery.ajax({
           url: "get_sponser.php",
           data:'sponser='+$("#sponser").val(),
           type: "POST",
           success:function(data){
                $("#user-availability-status7").html(data);
                $("#loaderIcon").hide();
           },
           error:function (){}
      });
     }
                        </script> 

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
                                        <option value="1">Left</option>
                                        <option value="2">Right</option>
                                   </select>
                              </div>
                              <div class="form-group">
                                   <label>Country <sup style="color: red;">*</sup></label>
                                   
                                   <select class="form-control" name="country" id="" required>
                                   <?php 
                                        $res=$state->getAllCountry();
                                        while($vl=$res->fetch_assoc()){
                                   ?>
                                        <option value="<?php echo $vl['countrySlug']?>"><?php echo $vl['countryName']?></option>
                                   <?php }?>
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
                                   <label>Pin Code <sup style="color: red;">*</sup></label>
                                   <input class="form-control" type="text" name="pin" autocomplete="off" required />
                              </div>
                              <div class="form-group">
                                   <label>password <sup style="color: red;">*</sup></label>
                                   <input class="form-control" type="password" name="password" autocomplete="off" required />
                              </div>
                                 <div class="form-group">
                               
                                   <input style="position: relative;top: 2px;" type="checkbox" name="terms" required />
                                   <a href="terms.php">Accept Terms & Condition</a>
                              </div>
                               
                              <input  class="form-control" type="submit" value="Sign Up" name="singup" id="">
                         </div>
                        
                    </form>
                    <br>
                    <span style="display: block;text-align: center;">Already have an Account? <a href="user/login.php">Sign In</a></span>
          </div>
          <br>
         
     </div>
</div>
<!--================about  Area start=================-->
<!--================footer  Area start=================-->

<footer class="out-footer">
     <div class="container">
          <div class="row">
               <div class="widget col-md-12">
                    <ul>
                         <li><a href="index.php">Home</a></li>
                         <li><a href="shop.php">Shop</a></li>
                    </ul>
               </div>
          </div>
     </div>
</footer>

<!--================footer  Area end=================-->
</body>
</html>