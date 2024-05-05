<?php
     include('config/Functions.php');
     $db      = new Functions();
  
     if(!empty($_POST["sponser"])) {
               $user= $_POST["sponser"];
               $query="SELECT name FROM tbl_users where customId='$user'";
               $exicute=$db->select($query);
               if($exicute){
                   $v=$exicute->fetch_assoc();
                    echo "<span style='color:green'> User Name ".$v['name']."</span>";
                   
               }else{
                    echo "<span style='color:red'> Invalide Sponser Id.</span>";
               }
     }