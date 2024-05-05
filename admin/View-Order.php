<?php include('template/load-header.php')?>

<?php include('template/sidebar.php')?>
<?php
          if(isset($_GET['id'])){
            $id=$_GET['id'];
            $reslut=$prod->orderDetails($id);
            if($reslut){
            while($value=$reslut->fetch_assoc()){
?>
  <!-- Main content -->
<?php include('template/header.php')?>
<div class="container-fluid mt--6">
  <div class="wrapper">
  <div id="single">
     <div class="containe">
          <div class="row">
               <div class="product-details col-md-6">
                    <div class="card">
                         <div class="gallery row">
                              <div class="nav flex-column col-md-2 col-sm-2" id="v-pills-tab" role="tablist" aria-orientation="">
                                 
                                   <a class="nav-link active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true"><img src="<?php echo $value['gimg1']?>" alt=""></a>
                                   <a class="nav-link" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false"><img src="<?php echo $value['gimg2']?>" alt=""></a>
                                   <a class="nav-link " id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-3" aria-selected="true"><img src="<?php echo $value['gimg3']?>" alt=""></a>
                                   <a class="nav-link" id="v-pills-4-tab" data-toggle="pill" href="#v-pills-4" role="tab" aria-controls="v-pills-4" aria-selected="false"><img src="<?php echo $value['gimg4']?>" alt=""></a>
                                   
                               </div>
                               <br>
                               <div class="tab-content col-md-10 col-sm-10" id="v-pills-tabContent">
                                   <div class="tab-pane fade show active " id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-1-tab">
                                        <img src="<?php echo $value['gimg1']?>" alt="">
                                   </div>
                                   <div class="tab-pane fade " id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-2-tab">
                                        <img src="<?php echo $value['gimg2']?>" alt="">
                                   </div>
                                   <div class="tab-pane fade " id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-3-tab">
                                        <img src="<?php echo $value['gimg3']?>" alt="">
                                   </div>
                                   <div class="tab-pane fade " id="v-pills-4" role="tabpanel" aria-labelledby="v-pills-4-tab">
                                        <img src="<?php echo $value['gimg4']?>" alt="">
                                   </div>
                                   
                              </div>
                         </div>

                    </div>
                    <br>
                    <div class="card">
                       <h5><strong>Instruction</strong></h5>
                       <p><?php echo $value['instruction']?></p>
                   </div>
                  <br>
               </div>
             
               <div  class="product-pricing  col-md-6">
                    <div id="sticky2" class="card">
                       
                              <div class="size">
                                 <label for="">Title : </label>
                                 <?php echo $value['title']?>
                              </div>
                              <div class="size">
                                 <label for="">User Code : </label>
                                 <?php echo $value['customId']?>
                              </div>
                              <div class="size">
                                 <label for="">User Name : </label>
                                 <?php echo $value['name']?>
                              </div>

                              <div class="size">
                                 <label for="">Name : </label>
                                 <?php echo $value['firstName'].' '.$value['LastName']?>
                              </div>

                              <div class="size">
                                 <label for="">Size : </label>
                                 <?php echo $value['size']?>
                              </div>
                              <div class="size">
                                 <label for="">Quantity : </label>
                                 <?php echo $value['quantity']?>
                              </div>
                              <div class="size">
                                 <label for="">User Name : </label>
                                 <?php echo $value['name']?>
                              </div>
                              <div class="size">
                                 <label for="">Company : </label>
                                 <?php echo $value['company']?>
                              </div>
                              <div class="size">
                                 <label for="">Address : </label>
                                 <?php echo $value['address']?>
                              </div>
                              <div class="size">
                                 <label for="">Apertment : </label>
                                 <?php echo $value['apertment']?>
                              </div>
                              <div class="size">
                                 <label for="">City : </label>
                                 <?php echo $value['city']?>
                              </div>
                              <div class="size">
                                 <label for="">State : </label>
                                 <?php echo $value['state']?>
                              </div>
                              <div class="size">
                                 <label for="">Post Code : </label>
                                 <?php echo $value['postal']?>
                              </div>
                              <div class="size">
                                 <label for="">payType : </label>
                                 <?php if($value['payType']==0){echo 'offline';}else{echo 'online';}?>
                              </div>
                              <div class="size">
                                 <label for="">Amount : </label>
                                 <?php echo $value['total']?>
                              </div>
                              <div class="size">
                                 <label for="">Order Date : </label>
                                 <?php echo $value['date']?>
                              </div>
                    </div>
               </div>
          </div>
     </div>
</div>
  </div>
</div>
                  <?php }}}?>
<?php include('template/footer.php')?>