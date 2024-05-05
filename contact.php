<?php include('template/header.php')?>
<!--================header  Area end=================-->
<h2 style="color:#56565a;text-align: center;padding:20px 0px;background: white;"><b>Send us an Email </b></h2>
            
<!--================about  Area start=================-->
     <?php 
           if($_SERVER['REQUEST_METHOD']=='POST'){
               $contact->contact($_POST);
          }
     ?>
<div id="contact-page">
     <div class="container">
          <div class="wrapper">
              <?php
   $st=$site->cmDetails();
   $vlc=$st->fetch_assoc();
?>
<div style="background:white;border-radius:5px;width:100%;margin-bottom:10px;border:1px solid #ddd8d8e6;padding:15px" class="cmd">
    <b> <div class="mobile">
     <i class="icofont icofont-ui-cell-phone"></i>Mobile:<?php echo $vlc['mobile']?>
     </div>
     <div class="addresss">
         
     <i class="icofont icofont-location-pin"></i>Address:<?php echo $vlc['address']?>
     </div><b>
</div>
               <h4 style="color:#56565a;text-align: left;padding:10px 0px;"><b>Contact Info </b></h4>
               <p>Ask a question or submit a comment, suggestion or issue here.</p>
               
                    <form action="" method="post">
                         <div class="form">
                              <div class="form-group">
                                   <label>Name <sup style="color: red;">*</sup></label>
                                   <input name="name" class="form-control" type="text"autocomplete="off" required />
                              </div>
                              <div class="form-group">
                                   <label>Email Address  <sup style="color: red;">*</sup></label>
                                   <input name="email" class="form-control" type="email"autocomplete="off" required />
                              </div>
                              <div class="form-group">
                                   <label>Mobile Number <sup style="color: red;">*</sup></label>
                                   <input name="mobile" class="form-control" type="text"autocomplete="off" required />
                              </div>
                              <div class="form-group">
                                   <label>Country <sup style="color: red;">*</sup></label>
                                   <select class="form-control" name="country" id="">
                                   <?php
                                        $result=$state->getAllcountry();
                                        if($result){
                                        $i='';
                                        while($value=$result->fetch_assoc()){
                                             $i++;
                                   ?>
                                        <option value="<?php echo $value['countrySlug']?>"><?php echo $value['countryName']?></option>
                                   <?php }}?>
                                   </select>
                              </div>
                              <div class="form-group">
                                   <label>State <sup style="color: red;">*</sup></label>
                                   <select class="form-control" name="state" id="">
                                   <?php
                                        $result=$state->getAllstate();
                                        if($result){
                                        $i='';
                                        while($value=$result->fetch_assoc()){
                                             $i++;
                                   ?>
                                        <option value="<?php echo $value['stateSlug']?>"><?php echo $value['stateName']?></option>
                                   <?php }}?>
                                   </select>
                              </div>
                         </div>
                         <br><br>
                         <h4 style="color:#56565a;text-align: left;padding:10px 0px;"><b>Topic or Question Information </b></h4>
                         <div class="form">
                             
                              <div class="form-group">
                                   <label>Category <sup style="color: red;">*</sup></label>
                                   <select class="form-control" name="cat" id="">
                                   <?php
                                        $result=$cat->getAllCat();
                                        if($result){
                                        $i='';
                                        while($value=$result->fetch_assoc()){
                                             $i++;
                                   ?>
                                        <option value="<?php echo $value['catSlug']?>"><?php echo $value['catName']?></option>
                                   <?php }}?>
                                   </select>
                              </div>
                              <div class="form-group">
                                   <label>Commente <sup style="color: red;">*</sup></label>
                                   <textarea class="form-control" type="text" name="commente" id="" cols="30" rows="5"></textarea>
                              </div>
                         </div>
                         <input  type="submit" name="" value="SEND" id="">
                    </form>
              
          </div>
          <br>
         
     </div>
</div>
<!--================about  Area start=================-->
<!--================footer  Area start=================-->
<?php include('template/footer.php')?>