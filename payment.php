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
<?php 
 if(isset($_POST['go'])=='go'){
      
     $msg= $prod->order($_POST,$_FILES);
    if(isset($msg)){
       $uc=Session::get('userId');
       header('Location:Invoice/generate.php?cart='.$uc);
    }
 }
   
   $fname    =    $_POST['fname'];
   $lname    =    $_POST['lname'];
   $address  =    $_POST['address'];
   $apert    =    $_POST['apert'];
   $city     =    $_POST['city'];
   $postal  =    $_POST['post'];
   $paytype      =    $_POST['pay'];
   
if(isset($_POST['cup'])){
     $cupon=$_POST['cupon'];
     header('Location:checkout.php?cp='.$cupon);
}elseif(empty($_POST['fname']) || empty($_POST['lname']) || empty($_POST['address']) || empty($_POST['apert']) || empty($_POST['city']) || empty($_POST['post'])){
   header('Location:checkout.php');
}else{
        if(isset($_POST['Order'])&& $_POST['pay']!='1'){
          
            $msg= $prod->order($_POST,$_FILES);
            if(isset($msg)){
               $uc=Session::get('userId');
               header('Location:Invoice/generate.php?cart='.$uc);
            }
        }elseif(isset($_POST['Order'])&& $_POST['pay']=='1'){


   
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
                    <?php
                         $result=$site->getLogo();
                         if($result){
                         while($value=$result->fetch_assoc()){
                         ?>
                         <img src="admin/<?php echo $value['logo'];?>" class="navbar-brand-img" alt="...">
                    <?php }}?>
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
                          <form action="">
                              <div class="input-group">
                                  <input placeholder="Search Course" class="sear" type="search" name="s">
                                
                                  <button class="input-group-addon" type="submit" name="go"><i class="icofont icofont-search"></i></button>
                              </div>
                          </form>
                    </div>
                    
                    <div class="wrap" style="width: 30px;"></div>
                    <div class="top-menu">
                         <ul>
                              <?php if(Session::get('login')){echo '<li><a href="user/">My acoount</a></li>';}else{?>
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
                                        <li><a href="index.php">Home</a></li>
                                        <li><a href="shop.php">Shop</a></li>
                                        <li><a href="contact.php">Contact Us</a></li>
                                        <li><a href="about.php">About US</a></li>
                                        
                                   
                                   </ul>
                              </div>
                         </div>
               </div>
          </div>
         
     </header>
<!--================header  Area end=================-->
<!--================checkout  Area start=================-->

<br>

<?php
    $discount    =    $_POST['p'];
    $total    =    $_POST['total'];
   $fname    =    $_POST['fname'];
   $lname    =    $_POST['lname'];
   $com      =    $_POST['comp'];
   $address  =    $_POST['address'];
   $apert    =    $_POST['apert'];
   $city     =    $_POST['city'];
   $state     =    $_POST['state'];
   $country     =    $_POST['country'];
   $postal  =    $_POST['post'];
   $info     =    $_POST['info'];
   $paytype      =    $_POST['pay'];
   $cupon    =    $_POST['cupon'];
?>

<div id="checkout">
     <div class="containe">
     <form action="" method="POST" enctype="multipart/form-data">

         <input type="hidden" value="<?php echo $discount?>" name="p" id="">
         <input type="hidden" value="go" name="go" id="">
         <input type="hidden" value="<?php echo $total?>" name="total" id="">
         <input type="hidden" value="<?php echo $fname?>" name="fname" id="">
         <input type="hidden" value="<?php echo $lname?>" name="lname" id="">
         <input type="hidden" value="<?php echo $com?>" name="comp" id="">
         <input type="hidden" value="<?php echo $address?>" name="address" id="">
         <input type="hidden" value="<?php echo $apert?>" name="apert" id="">
         <input type="hidden" value="<?php echo $city?>" name="city" id="">
         <input type="hidden" value="<?php echo $state?>" name="state" id="">
         <input type="hidden" value="<?php echo $country?>" name="country" id="">
         <input type="hidden" value="<?php echo $postal?>" name="post" id="">
         <input type="hidden" value="<?php echo $info?>" name="info" id="">
         <input type="hidden" value="<?php echo $paytype?>" name="pay" id="">
         <input type="hidden" value="<?php echo $cupon?>" name="cupon" id="">
<style>.razorpay-payment-button{display:none !important}</style>
                <script
                    src="https://checkout.razorpay.com/v1/checkout.js"
                    data-key="rzp_test_PpyaYHee8ZYzqS" 
                    data-amount="<?php echo $total*100?>" 
                    data-currency="INR"
                    data-buttontext=" "
                    data-name="MLM"
                    data-image="https://example.com/your_logo.jpg"
                    data-prefill.name="Gaurav Kumar"
                    data-prefill.email="gaurav.kumar@example.com"
                    data-theme.color="#F37254"
                    >
               </script>
               <input type="hidden" custom="Hidden Element" name="hidden">
          </form>
          <script>
               $(window).on('load', function() {
               jQuery('.razorpay-payment-button').click();
               });
              
      </script>
     </div>
</div>


<?php }}?>
<!--================check out  Area start=================-->
<br><br>

<!--================footer  Area start=================-->
<?php include('template/footer.php')?>