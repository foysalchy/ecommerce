<?php include('template/load-header.php')?>
<?php include('template/sidebar.php')?>
  <!-- Main content -->
<?php include('template/header.php')?>
<div class="container-fluid mt--6">
  <div class="wrapper">
  <?php
     $result=$prod->getAllProd();
     if($result){
          
?>
<!--================product  Area start=================-->
<div class="products">
     <div class="container">
          <h3 style="text-align: center;margin:30px 0px;"><b>Shop</b></h3>
          
          <div class="row " >
               <?php while($value=$result->fetch_assoc()){?>
               <div style="margin-bottom:5px" class="product col-md-4">
                    <div class="product-wrapper">
                    <a href="../single.php?id=<?php echo $value['productId']?>">
                              <div class="thumbnail">
                                   <img src="../admin/<?php echo $value['gimg1']?>" alt="">
                              </div>
                              <div class="details">
                                   <h5><strong><?php $fm=new Formates(); echo $fm->trimWord($value['title'],50)?></strong></h5>
                                   <span>Pack size: <?php echo $value['size1']?>,<?php echo $value['size2']?>,<?php echo $value['size3']?>,<?php echo $value['size4']?>,<?php echo $value['size5']?>,<?php echo $value['size6']?> </span>
                                   <h5>MRP:  <?php  
                                                $tax=$value['gst']+$value['cgst'];
                                                $dis= $value['disPrice'];
                                                $price=$tax*$dis/100;
                                                echo $price+$dis;
                                            ?></h5>
                                   <span>(Incl of all taxes)</span>
                              </div>
                        </a>
                    </div>
                    
               </div>
               
               <?php }?>
              
          </div>
     </div>
</div>
<?php }?>
  </div>
</div>
<?php include('template/footer.php')?>