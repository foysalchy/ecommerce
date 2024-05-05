<?php 
include('template/header.php');

?>
<!--================header  Area end=================-->
<!--================cart  Area start=================-->
<?php 

if(isset($_GET['id'])){
      $prodId=$_GET['id'];
      $single=$prod->getById($prodId);
     if($single){
          while($value=$single->fetch_assoc()){
?>
<br><br>

<div id="single">
     <div class="containe">
          <div class="row">
               <div class="product-details col-md-6">
                    <div class="card">
                         <div class="gallery row">
                              <div class="nav flex-column col-md-2 col-sm-2" id="v-pills-tab" role="tablist" aria-orientation="">
                                 
                                   <a class="nav-link active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true"><img src="admin/<?php echo $value['gimg1']?>" alt=""></a>
                                   <a class="nav-link" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false"><img src="admin/<?php echo $value['gimg2']?>" alt=""></a>
                                   <a class="nav-link " id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-3" aria-selected="true"><img src="admin/<?php echo $value['gimg3']?>" alt=""></a>
                                   <a class="nav-link" id="v-pills-4-tab" data-toggle="pill" href="#v-pills-4" role="tab" aria-controls="v-pills-4" aria-selected="false"><img src="admin/<?php echo $value['gimg4']?>" alt=""></a>
                                   
                               </div>
                               <br>
                               <div class="tab-content col-md-10 col-sm-10" id="v-pills-tabContent">
                                   <div class="tab-pane fade show active " id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-1-tab">
                                        <img src="admin/<?php echo $value['gimg1']?>" alt="">
                                   </div>
                                   <div class="tab-pane fade " id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-2-tab">
                                        <img src="admin/<?php echo $value['gimg2']?>" alt="">
                                   </div>
                                   <div class="tab-pane fade " id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-3-tab">
                                        <img src="admin/<?php echo $value['gimg3']?>" alt="">
                                   </div>
                                   <div class="tab-pane fade " id="v-pills-4" role="tabpanel" aria-labelledby="v-pills-4-tab">
                                        <img src="admin/<?php echo $value['gimg4']?>" alt="">
                                   </div>
                                   
                              </div>
                         </div>

                    </div>
                    <br>
                    <div class="card">
                       <h5><strong>Description</strong></h5>
                       <p><?php echo $value['description']?></p>
                  </div>
                  <br>
                  <div class="card">
                       <h5 class="head">
                            <span>Payment & Security</span>
                            <i class="icofont icofont-lock"></i>
                       </h5>
                       <div class="icon">
                         <li class="s-l-i-3"><i style="background:#3b5997 ;" class="icofont icofont-social-facebook"></i></li>
                         <li class="s-l-i-3"><i style="background:#439665 ;" class="icofont icofont-social-whatsapp"></i></li>
                         <li class="s-l-i-3"><i style="background:#21a1f0 ;" class="icofont icofont-social-twitter"></i></li>
                         <li class="s-l-i-3"><i style="background:#21a1f0 ;" class="icofont icofont-social-skype"></i></li>
                       </div>
                       <p style="margin-top: 10px;">Your payment information is processed securely. We do not store credit card details nor have access to your credit card information.</p>
                  </div>
                  <br>
               </div>
             
               <div  class="product-pricing  col-md-6">
               <?php 
                    $uid=Session::get('userId');
                    if(isset($_POST['add'])){
                        echo $msg= $prod->addToCart($_POST,$uid);
                    }
                   
             ?>
                    <div id="sticky2" class="card">
                         <div class="head">
                              <h4 style="color: #4051ae;word-spacing: 10px;"><b><?php echo $value['title']?></b></h4>
                         </div>
                         <div class="instructions">

                              <a  data-toggle="collapse" href="#collapseExample" >
                                 <span style="text-transform: capitalize;" >  <?php echo $value['catId']?></span>
                              </a>
                             
                         </div>
                         <hr>
                         <form action="" method="post">
                             <?php if($value['size1']==0 && $value['size2']==0 && $value['size3']==0 && $value['size4']==0 && $value['size5']==0 && $value['size6']==0){?>
                                       
                              <div style="display:none" class="size"><?php }else{?>
                              <div  class="size">
                              <?php }?>
                                   <input type="hidden" value=" <?php echo $value['productId']?>" name="id" id="">
                                   <label for="">Size</label>
                                   <br>
                                   <select class="form-control" name="size" id="">
                                        <?php if($value['size1']!=0){?>
                                            <option value="<?php echo $value['size1']?>"><?php echo $value['size1']?></option>
                                        <?php }?>
                                        <?php if($value['size2']!=0){?>
                                        <option value="<?php echo $value['size2']?>"><?php echo $value['size2']?></option>
                                         <?php }?>
                                        <?php if($value['size3']!=0){?>
                                        <option value="<?php echo $value['size3']?>"><?php echo $value['size3']?></option>
                                         <?php }?>
                                        <?php if($value['size4']!=0){?>
                                        <option value="<?php echo $value['size4']?>"><?php echo $value['size4']?></option>
                                         <?php }?>
                                        <?php if($value['size5']!=0){?>
                                        <option value="<?php echo $value['size5']?>"><?php echo $value['size5']?></option>
                                         <?php }?>
                                        <?php if($value['size5']!=0){?>
                                        <option value="<?php echo $value['size6']?>"><?php echo $value['size6']?></option>
                                         <?php }?>

                                   </select>
                                   
                              </div>
                              <div class="price">
                                   <label for="">Regular Pricie : </label>
                                   <span><h5 style="display: inline-block;">Rs.  <?php echo $value['price']?></h5></span>
                              </div>
                              <?php if($value['price']!=$value['disPrice']){?>
                              <div class="price">
                                   <label for="">Discount Pricie : </label>
                                   <span><h5 style="display: inline-block;">Rs. <?php echo $value['disPrice']?></h5></span>
                              </div>
                              <?php }?>
                               <div class="price">
                                   <label for="">GST : </label>
                                   <span><h5 style="display: inline-block;">  <?php echo $value['gst']?>%</h5></span>
                              </div>
                               <div class="price">
                                   <label for="">CGST : </label>
                                   <span><h5 style="display: inline-block;">  <?php echo $value['cgst']?>%</h5></span>
                              </div>
                              <div class="price">
                                   <label for="">Total : </label>
                                   <span><h5 style="display: inline-block;">Rs.   <?php  
                                                $tax=$value['gst']+$value['cgst'];
                                                $dis= $value['disPrice'];
                                                $price=$tax*$dis/100;
                                                echo $price+$dis;
                                            ?></h5></span>
                              </div>
                              <div class="price">
                                   <label for="">BV : </label>
                                   <span><h5 style="display: inline-block;"><?php echo $value['bv']?></h5></span>
                              </div>
                              
                              <div class="quanty sp-quantity">
                                        <label for="">Quantity : </label>

                                        <span class="sp-minus fff">   
                                             <i  data-multi="-1" style="width:40px;left:0;border-right:1px solid #d2cdcd;" class="ddd icofont icofont-minus"></i>
                                        </span>
                                        
                                        <span class="sp-input">
                                             <input style="text-align:center" name="quantity" class="form-control quntity-input" value="1" type="text">
                                        </span>
                                        <span class="sp-plus fff">
                                             <i style="border-left: 1px solid #d2cdcd;" data-multi="1" class="ddd icofont icofont-plus ico2"></i>
                                        </span>
                              </div>
                              <?php  
                                   $SID=Session::get('login');
                                   if($SID){
                                      echo ' <input type="submit" name="add" value="ADD TO CART">
                                       <input type="submit" name="buy" value="BUY IT NOW">';
                                   }else{
                                       echo '<a class="outSing" href="singup.php">Register</a>';
                                        echo '<span style="color: red;display: block;text-align: center;">You Have To Register Your Account To Buy The Product</span>';
                                   }
                              ?>
                             
                         </form>

                        
 
                    </div>
               </div>
          </div>
     </div>
</div>
<?php }?>
<!--================cart  Area start=================-->
<!--================product  Area start=================-->
<?php 
     $result=$prod->similar($prodId);
     if($result){
?>
<div class="containe">
     <h3 style="margin:30px 0px;"><b>You May Also Like</b></h3>
</div>
<div class="products">
     <div class="containe">
          
          
          <div class="row autoplay" >
            
            
               <?php while($value=$result->fetch_assoc()){?>
                    <div <?php if($prodId==$value['productId']){echo 'style="display:none"';}?> class="product ">
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
<?php }}}?>
<br>
<!--================product  Area End=================-->
<!--================footer  Area start=================-->
<?php include('template/footer.php')?>