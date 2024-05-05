<?php include('template/header.php')?>
<!--================header  Area end=================-->
<!--================slider  Area start=================-->
<div class="contain" >
    
    <?php  $st=$site->cmDetails();
        if($st){
              foreach($st as $s_title){
                  $title= $s_title['sintro'];
                  if($title){
                      echo  '<h4 style="text-align:center;color: #56565a;font-size: 18px;margin: 7px 0;display: block;"><b>';
                  }
              }
          }?>
     </b></h4>
     <div class="slider" style="background:#f7f7f7;">
           <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <?php
                         
                         $result=$prod->getAllSlider();
                         if($result){
                              if($value=$result->fetch_assoc()){
                    ?>
                     <div class="carousel-item active">
                          <a href="<?php echo $value['link']?>">
                              <img class="d-block w-100" src="admin/<?php echo $value['images']?>" alt=" slide">
                          </a>
                     </div>
                         <?php } while($value=$result->fetch_assoc()){?>
                    
                     <div class="carousel-item">
                     <a href="<?php echo $value['link']?>">
                              <img class="d-block w-100" src="admin/<?php echo $value['images']?>" alt=" slide">
                         </a>
                    </div>
                    <?php }}?>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                     <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                     <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                     <span class="carousel-control-next-icon" aria-hidden="true"></span>
                     <span class="sr-only">Next</span>
                </a>
           </div>
           <div class="herobanner__footer" style=""><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="2400px" height="32px" viewBox="0 0 2400 32" xml:space="preserve" preserveAspectRatio="none" class="herobanner__footer-mask" style=""><path d="M0,0c0,0,563,30,1200,30c706,0,1200-30,1200-30v32H0V0z" class="herobanner__footer-mask-curve"></path></svg></div>
     </div>
 </div>
<!--================slider  Area End=================-->
<!--================product  Area start=================-->
<?php 
     $result=$prod->homeRow1();
     if($result){
?>
<div class="products">
     <div class="container">
          <h3 style="text-align: center;margin:30px 0px;"><b>Customer Favorites</b></h3>
          <div class="row autoplay" >
               <?php while($value=$result->fetch_assoc()){?>
                    <div class="product ">
                         <div class="product-wrapper">
                              <a href="single.php?id=<?php echo $value['productId']?>">
                                   <div class="thumbnail">
                                        <img src="admin/<?php echo $value['gimg1']?>" alt="">
                                   </div>
                                   <div class="details">
                                        <h5><strong><?php $fm=new Formates(); echo $fm->trimWord($value['title'],50)?></strong></h5>
                                        <span>Pack size: <?php echo $value['size1']?>,<?php echo $value['size2']?>,<?php echo $value['size3']?>,<?php echo $value['size4']?>,<?php echo $value['size5']?>,<?php echo $value['size6']?> </span>
                                        <h5>MRP: 
                                            <?php  
                                                $tax=$value['gst']+$value['cgst'];
                                                $dis= $value['disPrice'];
                                                $price=$tax*$dis/100;
                                                echo $price+$dis;
                                            ?>
                                        </h5>
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
<!--================product  Area End=================-->
<!--================product  Area start=================-->
<?php 
     $result=$prod->homeRow2();
     if($result){
?>
<div class="products">
     <div class="container">
          <h3 style="text-align: center;margin:30px 0px;"><b>Recently Launched Products</b></h3>
          
          <div class="row autoplay" >
               <?php while($value=$result->fetch_assoc()){?>
                    <div class="product ">
                         <div class="product-wrapper">
                              <a href="single.php?id=<?php echo $value['productId']?>">
                                   <div class="thumbnail">
                                        <img src="admin/<?php echo $value['gimg1']?>" alt="">
                                   </div>
                                   <div class="details">
                                        <h5><strong><?php $fm=new Formates(); echo $fm->trimWord($value['title'],50)?></strong></h5>
                                        <span>Pack size: <?php echo $value['size1']?>,<?php echo $value['size2']?>,<?php echo $value['size3']?>,<?php echo $value['size4']?>,<?php echo $value['size5']?>,<?php echo $value['size6']?> </span>
                                        <h5>MRP: <?php echo $value['disPrice']?></h5>
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
<!--================product  Area End=================-->
<!--================product  Area start=================-->
<?php 
     $result=$prod->homeRow3();
     if($result){
?>
<div class="products">
     <div class="container">
          <h3 style="text-align: center;margin:30px 0px;"><b>Hot Products</b></h3>
          
          <div class="row autoplay" >
          <?php while($value=$result->fetch_assoc()){?>
                    <div class="product ">
                         <div class="product-wrapper">
                              <a href="single.php?id=<?php echo $value['productId']?>">
                                   <div class="thumbnail">
                                        <img src="admin/<?php echo $value['gimg1']?>" alt="">
                                   </div>
                                   <div class="details">
                                        <h5><strong><?php $fm=new Formates(); echo $fm->trimWord($value['title'],50)?></strong></h5>
                                        <span>Pack size: <?php echo $value['size1']?>,<?php echo $value['size2']?>,<?php echo $value['size3']?>,<?php echo $value['size4']?>,<?php echo $value['size5']?>,<?php echo $value['size6']?> </span>
                                        <h5>MRP: <?php echo $value['disPrice']?></h5>
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
<!--================product  Area End=================-->
<!--================footer  Area start=================-->
<?php 
     $result=$site->getFeatures();
     if($result){
?>
<div class="bef-footer">
     <div class="container">
          <div class="row">
          <?php while($value=$result->fetch_assoc()){?>
               <div class="widget col-md-4 col-sm-4">
                    <div class="icon">
                         <img src="admin/<?php echo $value['icon']?>" alt="">
                    </div>
                    <div class="intro">
                         <p> <strong><?php echo $value['title']?></strong></p>
                         <?php echo $value['des']?>
                    </div>
               </div>
               <div class="widget col-md-4 col-sm-4">
                    <div class="icon">
                         <img src="admin/<?php echo $value['icon2']?>" alt="">
                    </div>
                    <div class="intro">
                         <p> <strong><?php echo $value['title2']?></strong></p>
                         <?php echo $value['des2']?>
                    </div>
               </div>
               <div class="widget col-md-4 col-sm-4">
                    <div class="icon">
                         <img src="admin/<?php echo $value['icon3']?>" alt="">
                    </div>
                    <div class="intro">
                         <p> <strong><?php echo $value['title3']?></strong></p>
                         <?php echo $value['des3']?>
                    </div>
               </div>
          <?php }?>
          </div>
     </div>
</div>
<?php }?>
<?php include('template/footer.php')?>