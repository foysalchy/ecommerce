<?php include('template/header.php')?>
<!--================header  Area end=================-->
<!--================cart  Area start=================-->
<div id="cart">
     <div class="container">
     <form action="" method="post">
          <div class="row">
          <?php
              
               if(isset($_POST['up'])){
                  echo  $prod->upcart($_POST);
               }
               $result=$prod->getCartById2();
               if(isset($_GET['cid'])){
                    $id=$_GET['cid'];
                   echo $prod->cancelCart($id);
               }
             
               if($result){
                    $tp='0';
                    
                    
          ?>
         
               <div class="product-details col-lg-8 col-md-12">
                    <table>
                         <thead>
                              <tr style="border-top: none;">
                                   <th>Product</th>
                                   <th>Quantity</th>
                                   <th>Total</th>
                                   <th>Action</th>
                              </tr>
                         </thead>
                         <tbody>
                             <?php 
                              while($product=$result->fetch_assoc()){
                                  $total= $product['quantity']*$product['disPrice'];
                                        $price=$total;
                                       $tp =$price+$tp;
                              ?>
                             
                              <tr>
                             
                                   <td style="display: flex;">
                                        <div class="thumbnail">
                                             <img src="admin/<?php echo $product['gimg1']?>" alt="">
                                        </div>
                                        <div class="details">
                                             <p><a href=""><?php echo $product['catId']?></a></p>
                                             <p><a style="color: #1e2d7d;" href="single.php?id=<?php echo $product['productId']?>"><?php $fm=new Formates(); echo $fm->trimWord($product['title'],50)?></a></p>
                                             <p>Rs.<?php echo $product['disPrice']?></p>
                                        </div>
                                   </td>
                                   <td class="quanty">
                                        <input type="hidden" name="id" value="<?php echo $product['id']?>">
                                        <input type="text" name="qunt" value="<?php echo $product['quantity']?>">
                                   </td>
                                   <td>Rs. <?php echo $total;?></td>
                                   <td><a href="?cid=<?php echo $product['id']?>" >Remove</a><input style="background: transparent;color: #007bff;margin: 0;padding: 0;width:initial;display: inline-block;margin-left: 10px;" type="submit" value="Update" name="up" id=""></td>
                              </tr>
                              <?php }?>

                         </tbody>
                    </table>
               </div>
               <div  class="product-pricing  col-lg-4 col-md-12">
                    <div id="sticky" class="card">
                         <div class="head">
                              <span>Total</span>
                              <span>Rs. <?php echo $tp?></span>
                         </div>
                         <hr>
                        
                         <p style="margin-bottom: 0px;">Tax included. Shipping calculated at checkout </p>
                         <a class="redirect" href="checkout.php?id=<?php echo $uid=Session::get('userId');?>">Checkout</a>
                    </div>
               </div>
              
               <?php }?>
          </div>
          </form>
     </div>
</div>
<!--================cart  Area start=================-->
<!--================footer  Area start=================-->
<?php include('template/footer.php')?>