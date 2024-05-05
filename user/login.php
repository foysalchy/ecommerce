<?php
     include('../Classes/user/Login.php');
     include('../Classes/user/Siteinfo.php');
     $login=new Login();
     if($_SERVER['REQUEST_METHOD']=='POST'){
          $msg=  $login->login($_POST);
     }
     $site=new Siteinfo();
?>
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Login</title>
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
          <?php if(isset($msg)){echo $msg;}?>
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
                                   <input name="email" class="form-control" type="email"autocomplete="off" required />
                              </div>
                              <div class="form-group">
                                   <label>Password <sup style="color: red;">*</sup></label>
                                   <input name="password"class="form-control" type="password"autocomplete="off" required />
                              </div>
                              <input  class="form-control" type="submit" value="Login" name="" id="">
                              <br>
                              <span style="display: block;text-align: center;"><a href="forget.php">forget password?</a></span>
                         </div>
                      
                    </form>
                    <br>
                    <span style="display: block;text-align: center;">Let's Create an New Account? <a href="../singup.php">Sign Up</a></span>
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