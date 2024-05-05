<?php include('template/header.php')?>
<!--================header  Area end=================-->
 <?php
     if(isset($_POST['s'])){
         $result=$prod->productSearch($_POST);
         if(!$result){
             echo "<h3 style='text-align: center;margin: 50px auto;font-size: 45px;font-weight: 900;color:#008fc5'>No Result Found<h3>";
             echo"<a style='background: #008fc5;color: white;text-decoration: none;font-size: 15px;padding: 13px 15px;display: block;margin: auto;text-align: center;width: 120px;margin-bottom: 50px;font-weight: 700;' href='index.php'>Go To Home</a>";
         }
     }else{

     $result=$prod->getAllProd();
     }
     if($result){
          
?>
<!--================product  Area start=================-->
<div class="products">
     <div class="container">
          <h3 style="text-align: center;margin:30px 0px;"><b>Shop</b></h3>
          
          <div class="row " >
             
               <?php while($value=$result->fetch_assoc()){?>
               <div style="margin-bottom:5px" class="product col-md-3">
                    <div class="product-wrapper">
                    <a href="single.php?id=<?php echo $value['productId']?>">
                              <div class="thumbnail">
                                   <img src="admin/<?php echo $value['gimg1']?>" alt="">
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
<!--================product  Area End=================-->

<!--================footer  Area start=================-->

<?php include('template/footer.php')?>