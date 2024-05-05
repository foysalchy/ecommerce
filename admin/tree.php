<?php include('template/load-header.php')?>
<?php include('template/sidebar.php')?>
  <!-- Main content -->
<?php include('template/header.php')?>
    <!-- Page content -->
    <div class="container-fluid mt--6">
    <style>
      .col-md-12 img{
        width:100px;
        
      }
      .col-md-6 img{
        width:90px
      }
      .col-md-3 img{
        width:80px
      }
      .col-md-1\.5{
        width: 12.5%
      }
      .col-md-1\.5 img{
        width:60px;
        margin-top: 30px;
      }
      .col-md-0\.75{
        width:6.25%
      }
      .col-md-0\.75 img{
          width: 50px
      }
      .ps {
    border: 1px solid #d5d5d8;
}
    </style>
    <?php
          if($_GET['tid']){
                    $my_id=$_GET['tid'];
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
            <div style="text-align:center" class="ps col-md-<?php echo 12/$devid?>">
                <img " style="border-radius:50%;positon:relative" src="assets/img/theme/icon.png" alt="">
                <br>
                <?php echo $pid=$id[$d]?>
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