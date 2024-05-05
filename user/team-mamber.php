<?php include('template/load-header.php')?>
<?php include('template/sidebar.php')?>
  <!-- Main content -->
<?php include('template/header.php')?>
<div class="container-fluid mt--6">
<div id="contact-page">
     <div class="container">
          <div class="wrapper">
               <?php
                  if($_GET['tid']){
                       $id=$_GET['tid'];
                  }
                        
                         $r= $user->tlogUser($id);
                         if($r){
                             foreach($r as $v){
                         
                 
               ?>
               <form action="">
                    <div class="form form2">
                         <h4 style="color:#002f5f;text-align: left;padding:10px 0px;"><b>Profile </b></h4>
                         <div>  Name : <?php echo $v['name']?></div>
                         <div>  Email : <?php echo $v['email']?></div>
                         <div>  Placement  : <?php echo $v['placementId']?></div>
                         <div>  SponserId : <?php echo $v['sponserId']?></div>
                         <div>   Right Side : <?php echo $v['rightSide']?></div>
                         <div>  Left Side : <?php echo $v['leftSide']?></div>
                         <div>  Right Total : <?php echo $v['rightCount']?></div>
                         <div>  Left Total : <?php echo $v['leftCount']?></div>
                        <?php 
                            $results=$user->get_user_week_earn($id);
                            $w=0;
                            if($results){
                              foreach ($results as $result) {
                                if($result['side']=='left'){
                                  $w=$result['amount']+$w;
                                }
                              }
                            }
                        ?>
                        <div>  Left Week :<?php echo $w;?></div>
                         <?php 
                            $results=$user->get_user_week_earn($id);
                            $r=0;
                            if($results){
                              foreach ($results as $result) {
                                if($result['side']=='right'){
                                  $r=$result['amount']+$r;
                                }
                              }
                            }
                        ?>
                         <div>  Right Week :<?php echo $r;?></div>
                         <a style="background: #5e72e4;color: white;display: block;margin: 10px 0px;text-align: center;padding: 6px;font-weight: 700;border-radius: 5px;" href="tree.php?mid=<?php echo $id?>">Tree</a>
                    </div>

               </form>
               <?php }}?>
          </div>
          <br>
     </div>
</div>
</div>
<?php include('template/footer.php')?>