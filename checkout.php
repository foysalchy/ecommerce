<?php include('template/header.php')?>
<!--================header  Area end=================-->
<!--================checkout  Area start=================-->

<br>

<?php 
     $result=$prod->getCartById2(); 
     if($result){
          $tp='0';

   
?>

<div id="checkout">
     <div class="containe">
     <form action="payment.php" method="POST" enctype="multipart/form-data">
         
               <div class="row">
                     <div class="widget  col-lg-2"></div>
               
                    <div class="widget col-lg-4 col-md-6 ">
            
                         <h4 style="color:#56565a;text-align: left;padding:10px 0px;"><b>Billing Info </b></h4>
                         <div class="form-group">
                              <label>First Name <sup style="color: red;">*</sup></label>
                              <input name="fname" class="form-control" type="text"  required/>
                         </div>
                         <div class="form-group">
                              <label>Last Name <sup style="color: red;">*</sup></label>
                              <input  name="lname" class="form-control" type="text" required />
                         </div>
                         <div class="form-group">
                              <label>Company (optional) <sup style="color: red;"></sup></label>
                              <input name="comp" class="form-control" type="text"  />
                         </div>
                         <div class="form-group">
                              <label>Address <sup style="color: red;">*</sup></label>
                              <input name="address" class="form-control" type="text"  required/>
                         </div>
                         
                         <div class="form-group">
                              <label>Apertment <sup style="color: red;">*</sup></label>
                              <input name="apert" class="form-control" type="text" required/>
                         </div>
                         <div class="form-group">
                              <label>City <sup style="color: red;">*</sup></label>
                              <input name="city" class="form-control" type="text" required />
                         </div>
                         <div class="form-group">
                              <label>Countries <sup style="color: red;">*</sup></label>
                              <select class="form-control" name="country" id="" >
                                   <?php 
                                        $res=$state->getAllcountry();
                                        while($vl=$res->fetch_assoc()){
                                   ?>
                                        <option value="<?php echo $vl['countrySlug']?>"><?php echo $vl['countryName']?></option>
                                   <?php }?>
                                   </select>
                         </div>
                         <div class="form-group">
                              <label>States <sup style="color: red;">*</sup></label>
                              <select class="form-control" name="state" id="" >
                                   <?php 
                                        $res=$state->getAllState();
                                        while($vl=$res->fetch_assoc()){
                                   ?>
                                        <option value="<?php echo $vl['stateSlug']?>"><?php echo $vl['stateName']?></option>
                                   <?php }?>
                                   </select>
                         </div>
                         <div class="form-group">
                              <label>Postal Code <sup style="color: red;">*</sup></label>
                              <input name="post" class="form-control" type="text" required />
                         </div>
                         <?php if(!Session::get('userCode')){?>
                          <div class="form-group">
                              <label>Email <sup style="color: red;">*</sup></label>
                              <input name="email" class="form-control" type="text"  />
                         </div>
                         <div class="form-group">
                              <label>New Password <sup style="color: red;">*</sup></label>
                              <input name="password" class="form-control" type="text"  />
                               <input name="sponser" value="1" class="form-control" type="hidden"  />
                         </div>
                         <?php }?>
                         <div style="width:100%;background: #ededed;border: 1px solid #c5bebe;padding: 5px;border-radius: 5px;" class="form-group instruction">
                              <a  data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                              <span>  order instruction </span><span class="arrow"></span>
                              </a>
                              <div class="collapse" id="collapseExample">
                                   <br>
                                   <textarea  class="form-control" type="text" name="info" id="" cols="30" rows="1"></textarea>
                                   
                              </div>
                         </div>
                         <!-- <h4 style="color:#56565a;text-align: left;padding:10px 0px;"><b>shiping method </b></h4>
                         <div style="border-bottom: none;border-radius: 5px 5px 0px 0px;" class="form-groups">
                              <input id="free" class="form-control" type="radio"  />
                              <label for="free"><span>Free Shiping</span><span>free</span> </label>
                         </div>
                         <div class="form-groups">
                              <input id="prime" class="form-control" type="radio"  />
                              <label for="prime"><span>Free Shiping</span><span>free</span> </label>
                         </div>
                         <br><br> -->
                          <div class="widget3">
                         <div class="card">
                              <h4 style="color:#56565a;text-align: left;padding:10px 0px;"><b>Payment Method </b></h4>
                              <div class="form-group ofl">
                                   
                                   <input  name="pay" value="0"  style="margin-right: 10px;position: relative;top: 3px;" type="radio" id="offline"><label for="offline">Pickup Centre</label>
                               <b>(YOU HAVE TO PAY COD CHANGES FIRST)</b>
                              </div>

                              <?php
                               $st=$site->cmDetails();
                                foreach($st as $bi){$holder=$bi['holder'];$bank=$bi['bankName'];$banka=$bi['bankAcc'];$ifs=$bi['ifsc'];}
                              ?>
                              <div class="form-group" id="proopen2" style="margin: 0px !important; display: none;background: white;padding: 10px;border-radius: 5px;">
                                 <p>Holder Name: <?php echo $holder?></p><p>Bank Name: <?php echo $bank?></p> <p>Bank Account Number: <?php echo $banka?></p> <p>IFSC: <?php echo $ifs?></p>
                                 <div class="form-group" id="proopen" >
                               
                                    </div>
                              </div>
                              

                               <div style="margin-left:0" class="form-group ofl2">
                                   
                                   <input  name="pay" value="2"  style="margin-right: 10px;position: relative;top: 3px;" type="radio" id="bank"><label for="bank">Bank Transfer</label>
                              </div>

                            <div class="form-group" id="proopen3" style="margin: 0px !important; display: none;background: white;padding: 10px;border-radius: 5px;">
                                  <p>Holder Name: <?php echo $holder?></p><p>Bank Name: <?php echo $bank?></p> <p>Bank Account Number: <?php echo $banka?></p> <p>IFSC: <?php echo $ifs?></p>
                                 <div class="form-group" id="proopen3a" >
                               
                                    </div>
                              </div>
                              
                              <div style="margin:0;"class="form-group raz onl">
                              
                              <input  name="pay" value="1"  style="margin-right: 10px;position: relative;top: 3px;" type="radio" id="online"><label for="online">Pay with Razorpay</label>
                              </div>
                              
                         </div>
                    </div>
                    </div>
        
                   
                    
                    <div class="widget3 col-lg-4 col-md-6">
                         <div class="card">
                             
                              <h4 style="color:#56565a;text-align: left;padding:10px 0px;"><b>Order Summary </b></h4>
                              <?php 
                                   while($product=$result->fetch_assoc()){
                                                $qun= $product['quantity'];
                                        
                                                $tax=$product['gst']+$product['cgst'];
                                                $disp= $product['disPrice'];
                                                $incu=$tax*$disp/100;
                                                 $lp=$incu+$disp;
                                                 $price=$lp*$qun;
                                                
                                             $tp =$price+$tp;
                                             
                                   
                              ?>
                              <div style="margin-bottom: 10px;display: flex;" class="product">
                                        <input type="hidden" name="pid" value="<?php echo $product['proID']?>" id="">
                                        <input type="hidden" name="size" value="<?php echo $product['size']?>" id="">
                                        <input type="hidden" name="quantity" value="<?php echo $product['quantity']?>" id="">
                                        <input type="hidden" name="title" value="<?php echo $product['title']?>" id="">

                                        <img style="width:50px" src="admin/<?php echo $product['gimg1']?>" alt="">
                                        <a style="margin-left:10px" href="single.php?id=<?php echo $product['productId']?>"><?php echo $product['title']?></a>
                                        <span style="flex: 1 auto;text-align: right;">
                                        <?php 
                                                $tax=$product['gst']+$product['cgst'];
                                                $dis= $product['disPrice'];
                                                $price=$tax*$dis/100;
                                                echo $price+$dis.'*'.$product['quantity'];?>
                                        </span>
                              </div>
                              <?php }?>
                              
                              <div class="form-group">
                                        <?php
                                             if(isset($_GET['cp'])){
                                                  $cp=$_GET['cp'];
                                                  $rs=$prod->getCupon($cp);
                                                  
                                                  if($rs){
                                                       $vlc=$rs->fetch_assoc();
                                                      $percent= $vlc['discount'];
                                                      $into=$tp*$percent;
                                                      $divid=$into/100;
                                                      $total=$tp-$divid;
                                                  }else{
                                                       $total=$tp;
                                                  }
                                             }else{
                                                  $total=$tp;
                                             }
                                        ?>
                                   <label for="">Cupon</label>
                                        <input placeholder="Cupon Code" id="cupon" name="cupon" class="form-control" type="text"  />
                                        <a  style="display:block"class="redirect" href="?cp=" id="applyCupon">Apply</a>
                                        
                                  
                              </div>
                              <hr>
                              
                              <div class="rvinfo">
                                   <span>Subtotal</span>
                                   <span><strong>Rs.<?php echo $tp?></strong></span>
                              </div>
                            
                              <hr>
                              <div class="rvinfo">
                                   <span>Total</span>
                                   <h4><strong>Rs.<?php echo $total?>
                                        <input type="hidden" value="<?php if(isset($percent)){echo $percent;}?>" name="p">
                                        <input type="hidden" value="<?php echo $total?>" name="total">
                                   </strong></h4>
                              </div>
                              
                         </div>
                         <input value="Order" name="Order" type="submit">
                         
                    </div>
                   
               </div>
               
          </form>
      
     </div>
</div>


<?php }?>
<!--================check out  Area start=================-->
<br><br>

<!--================footer  Area start=================-->
<?php include('template/footer.php')?>