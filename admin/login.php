<?php
     include('../Classes/admin/Admin.php');
     include('../Classes/admin/Siteinfo.php');
     $login=new Admin();
     if($_SERVER['REQUEST_METHOD']=='POST'){
        $result=  $login->login($_POST);
     }
     $site=new Siteinfo();
?>
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Admin Login</title>
     <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
     <link rel="stylesheet" href="../assets/css/style.css">
     <link rel="stylesheet" href="../assets/css/slick.css">
     <link rel="stylesheet" href="../assets/css/icofont.css">

     <script src="../assets/js/jquery.js"></script>
     <script src="../assets/js/bootstrap.min.js"></script>
     <script src="../assets/js/slick.js"></script>
     <script src="../assets/js/main.js"></script>
</head>
<body>
      <br>
      <br>
      <br>
<!--================about  Area start=================-->
<div id="contact-page">
     <div class="container">
          <div class="wrapper">
               <?php  if(isset($result)){echo $result;}?>
               <p style="text-align: center;">
              
                    <?php
                    $result=$site->getLogo();
                    if($result){
                    while($value=$result->fetch_assoc()){
                    ?>
                         <img style="width: 120px;padding: 10px 0px;" src="<?php echo $value['logo'];?>" class="navbar-brand-img" alt="...">
                    <?php }}?>
               </p>
                    <form action="" method="post">
                         <div class="form form2">
                              <h4 style="color:#002f5f;text-align: left;padding:10px 0px;"><b>Sign in </b></h4>
                              <div class="form-group">
                                   <label>Email <sup style="color: red;">*</sup></label>
                                   <input name="email" placeholed="Enter Your Email" class="form-control" type="text"autocomplete="off" required />
                              </div>
                              <div class="form-group">
                                   <label>Password <sup style="color: red;">*</sup></label>
                                   <input name="password" placeholed="Enter Your Password" class="form-control" type="password" autocomplete="off" required />
                              </div>
                              <input  class="form-control" value="Login" type="submit" name="submit" id="">
                              
                         </div>
                      
                    </form>
                    <br>
                    
          </div>
          <br>
         
     </div>
</div>
<!--================about  Area start=================-->
<!--================footer  Area start=================-->

<footer class="out-footer">
     <div class="container">
          <div class="row">
               
          </div>
          <p style="text-align: center;" >Copyright ©2020 Amway. All Rights Reserved.</p>
     </div>
</footer>

<!--================footer  Area end=================-->
</body>
</html>