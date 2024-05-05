<?php
  spl_autoload_register(function($class){
       include_once '../Classes/user/'.$class.'.php';
  });
  include('../Classes/admin/Session.php');
  include('../Classes/frontend/State.php');
  include('../Classes/frontend/Product.php');
  Session::check();
  if(isset($_GET['logout'])){
    Session::destroy();
   }
   $user=new User();
   $site=new Siteinfo();
   $state=new State();
   $prod=new Product();
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
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Creative Tim">
  <title><?php echo $company_title.'--'.$file_name?></title>
  <!-- Favicon -->
  <link rel="icon" href="assets/img/brand/favicon.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="stylesheet" href="../assets/css/jquery.dataTables.min.css">
  <!-- Page plugins -->
  <!-- Argon CSS -->
  <link rel="stylesheet" href="assets/css/argon.css?v=1.2.0" type="text/css">
</head>