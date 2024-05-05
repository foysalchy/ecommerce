<?php
 include('razorpay-php/Razorpay.php');
  spl_autoload_register(function($class){
       include_once 'Classes/frontend/'.$class.'.php';
  });
 
  include('Classes/admin/Session.php');
  Session::init();
   $cat=new Category();
   $state=new State();
   $prod=new Product();
   $page=new Pages();
   $contact=new Contact();
   $site=new Siteinfo();
   $uid=Session::get('userId');
   if(isset($_POST['buy'])){
     echo $msg= $prod->addToCart2($_POST,$uid);
 }
?>
<?php
   

    
  $st=$site->cmDetails();
  foreach($st as $s_title){$company_title=$s_title['comName'];}
  $curPageName = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);  
  $explode=explode('.',$curPageName);
  $file_name=strtolower(reset($explode));
  if($file_name=='index'){
      $file_name='Home';
  }
?>  
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title><?php echo $company_title.'--'.$file_name?></title>
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
     <!--================header  Area start=================-->
     <header class="not-home">
          <div class="top-header ">
               <div class="container">
                    <div class="mobile-menu-openar">
                        <div class="bars">
                              <span></span>
                              <span></span>
                              <span></span>
                        </div>
                    </div>
                    <div class="logo-area">
                        <a   href="index.php">
                    <?php
                         $result=$site->getLogo();
                         if($result){
                         while($value=$result->fetch_assoc()){
                         ?>
                         <img src="admin/<?php echo $value['front'];?>" class="navbar-brand-img" alt="...">
                    <?php }}?>
                    </a>
                    </div>
                    <div style="display: none;" class="mobile-cart-icon">
                         <ul><li><a   href="cart.php"><i class="icofont icofont-shopping-cart"></i><sup><?php 
                          $uid=Session::get('userId');
                          $result= $prod->getCartById($uid);
                                   if($result){
                                        if($result->num_rows >0){
                                             $ct=$result->num_rows; echo '('.$ct.')';}else{echo '(0)';
                                        }}?></sup></a></li></ul>
                    </div>
                    <div class="wrap" style="width: 30px;"></div>
                    <div class="search-box">
                          <form action="shop.php" method="POST">
                              <div class="input-group">
                                  <input placeholder="Search Product" class="sear" type="search" name="s">
                                
                                  <button class="input-group-addon" type="submit" name="go"><i class="icofont icofont-search"></i></button>
                              </div>
                          </form>
                    </div>
                    
                    <div class="wrap" style="width: 30px;"></div>
                    <div class="top-menu">
                         <ul>
                              <?php if(Session::get('login')){echo '<li><a href="user/">My Account</a></li>';}else{?>
                              <li><a href="user/login.php">login</a></li>
                              <li><a href="singup.php">register</a></li>
                              <?php }
                                $uid=Session::get('userId');
                                  $result= $prod->getCartById($uid);
                              ?>
                              <li><a href="cart.php"><i style="font-size: 25px;margin-right: 5px;" class="icofont icofont-shopping-cart"></i><sup>
                                   <?php 
                                   if($result){
                                        if($result->num_rows >0){
                                             $ct=$result->num_rows; echo '('.$ct.')';}else{echo '(0)';
                                        }}?>
                              </sup></a></li>
                         </ul>
                    </div>
               </div>
          </div>
         <div class="menu-overly"></div>
          <div class="main-menu">
               <div class="container">
                         <?php $result=$cat->getAllCat();
                              if($result){?>
                         <div class="collpase-menu-open" style="display: none;">
                              <a id="menu" class="active" href="#">MENU</a>
                              <a id="cat" href="#">CATEGORIES</a>
                         </div>
                         <?php }?>
                         <div class="nav-bar">
                              <?php 
                                   $result=$cat->getAllCat();
                                   if($result){ 
                              ?>
                              <div class="header-category-wrap">
                                   <div class="header-category-nav">
                                        <span><i class="icofont icofont-navigation-menu"></i></span>
                                        Categories 
                                        <span class="arrow"></span>
                                   </div>
                                   <div class="header-category-menu">
                                        <ul>
                                        <?php
                                             
                                             $i='';
                                             while($value=$result->fetch_assoc()){
                                                  $i++;
                                        ?>
                                             <li><a href="<?php echo $value['catSlug']?>"><?php echo $value['catName']?></a></li>
                                             <?php }?>
                                             
                                        </ul>
                                   </div>
                              </div>
                              <?php }?>
                              <div class="wrap" style="width: 30px;"></div>
                              <div class="nav-menus">
                                   <ul>
                                       <style>
                                           .dhide{
                                               display:none !important;
                                           }
                                           @media(max-width:1000px){
                                               .dhide{
                                                   display:block !important;
                                               }
                                           }
                                       </style>
                                        <li><a href="index.php">Home</a></li>
                                        <li><a href="shop.php">Shop</a></li>
                                        <li><a href="contact.php">Contact Us</a></li>
                                        <li><a href="about.php">About US</a></li>
                                          <li><a href="terms.php">Terms & Condition</a></li>
                                        <li><a href="privacy.php">PRIVACY POLICY</a></li>
                                         <?php if(Session::get('login')){echo '<li class="dhide"><a href="user/">My Account</a></li>';}else{?>
                                          <li class="dhide"><a href="user/login.php">login</a></li>
                                          <li class="dhide"><a href="singup.php">register</a></li>
                                          <?php }?>
                                        
                                   
                                   </ul>
                              </div>
                         </div>
               </div>
          </div>
         
     </header>