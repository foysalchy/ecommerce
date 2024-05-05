<?php include('template/load-header.php')?>
<?php include('template/sidebar.php')?>
  <!-- Main content -->
<?php include('template/header.php')?>
    <!-- Page content -->
    <div class="container-fluid mt--6">
    <style>
      .col-sm-12 img{
        width:100px;
        
      }
      .col-sm-6 img{
        width:90px
      }
      .col-sm-3 img{
        width:80px
      }
      .col-sm-1\.5{
        width: 12.5%
      }
      .col-sm-1\.5 img{
        width:60px;
        margin-top: 30px;
      }
      .col-sm-0\.75{
        width:6.25%
      }
      .col-sm-0\.75 img{
          width: 50px
      }
      @media(max-width:800px){
          .col-sm-0\.75 {
              display:none;
          }
          @media(max-width:576px){
               .col-sm-6 {
        width:50%;
      }
           .col-sm-6 img{
        width:60px;
      }
        .col-sm-3 img{
        width:50px;
      }
       .col-sm-3 {
        width:25%
      }
          }
          .col-sm-1\.5{
              display:none;
          }
            
      }
    </style>
    <?php
       
        if($_GET['mid']){
            $my_id=$_GET['mid'];
        }else{
             $my_id=Session::get('userCode');
        }
        $id=[$my_id];
        $i=0;
        for ($i=0; $i <=4; $i++) { 
          $temp_id_index=0;
          $devid=pow(2,$i)
     ?>
     <div class="row">
        <?php
            for ($d=0; $d < $devid; $d++) { 
        ?>
            <div style="text-align:center" class="ps col-sm-<?php echo 12/$devid?>">
            <?php $ss=$id[$d];
                if(12/$devid==6){
                  $b=$user->s($ss);
                  if($b){
                    foreach($b as $f){
                      $si=$f['side'];}
                      if($si=='1'){
                        echo '<span style="font-size: 30px;display: block;" class="l">L</span>';
                      }
                      if($si=='2'){
                        echo '<span style="font-size: 30px;display: block;" class="l">R</span>';
                      }
                    }

                }
                ?>
                <a href="team-mamber.php?tid=<?php echo $pid=$id[$d]?>">
                <img " style="border-radius:50%;positon:relative" src="assets/img/theme/icon.png" alt="">
                <br>
                <?php echo $pid=$id[$d]?>
                </a>
                
            </div>
            <?php 
                $temp_id;
                for ($p=1; $p < 3 ; $p++) { 
                  $temp_id[$temp_id_index]=$user->fetch_left_right($p,$pid);
                  $temp_id_index++;
                   
                }
             }
             $id=$temp_id;
            ?>
     </div>
     
    <?php }

    ?>
    <br><br><br>
  <!-- Argon Scripts -->
  <?php include('template/footer.php')?>