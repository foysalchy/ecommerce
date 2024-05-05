<?php include('template/load-header.php')?>
<?php include('template/sidebar.php')?>
  <!-- Main content -->
<?php include('template/header.php')?>
<div class="container-fluid mt--6">
<div id="contact-page">
     <div class="container">
          <div class="wrapper">
               <?php
                  
                         if($_SERVER['REQUEST_METHOD']=='POST'){
                             $msg= $user->upUser($_POST);
                         }
                         $r= $user->logUser();
                         if($r){
                             foreach($r as $v){
                         
                 
               ?>
               <form action="" method="post">
                    <div class="form form2">
                    <?php if(isset($msg)){echo $msg;}?>
                         <h4 style="color:#002f5f;text-align: left;padding:10px 0px;"><b>Profile </b></h4>
                         <div class="form-group">
                              <label>Name <sup style="color: red;">*</sup></label>
                              <input name="name" value="<?php echo $v['name'];?>" class="form-control" type="text"autocomplete="off" required />
                         </div>
                         <div class="form-group">
                              <label>Email </label>
                              <input readonly class="form-control"  value="<?php echo $v['email'];?>" type="email"name="email" autocomplete="off" required />
                         </div>
                          <div class="form-group">
                              <label>Mobile <sup style="color: red;">*</sup></label>
                              <input value="<?php echo $v['mobile']?>" class="form-control" type="text"name="mobile" autocomplete="off" required />
                         </div>
                         <div class="form-group">
                              <label>Address <sup style="color: red;">*</sup></label>
                              <input value="<?php echo $v['address']?>" class="form-control" type="text"name="address" autocomplete="off" required />
                         </div>
                        
                          <div class="form-group">
                              <label>Nominee <sup style="color: red;">*</sup></label>
                              <input value="<?php echo $v['nominee']?>" class="form-control" type="text"name="nominee" autocomplete="off" required />
                         </div>
                         <div class="form-group">
                              <label>Nominee Relationship <sup style="color: red;">*</sup></label>
                                <select class="form-control" name="relation" id="" required>
                                  
                                        <option value="0">Select Relation</option>
                                        <option <?php if($v['relation']=='Husband'){echo 'selected';}?> value="Husband">Husband</option>
                                        <option <?php if($v['relation']=='Wife'){echo 'selected';}?> value="Wife">Wife</option>
                                        <option <?php if($v['relation']=='Father'){echo 'selected';}?> value="Father">Father</option>
                                        <option <?php if($v['relation']=='Mother'){echo 'selected';}?> value="Mother">Mother</option>
                                        <option <?php if($v['relation']=='Brother'){echo 'selected';}?> value="Brother">Brother</option>
                                        <option <?php if($v['relation']=='Sister'){echo 'selected';}?> value="Sister">Sister</option>
                                        <option <?php if($v['relation']=='Cousin'){echo 'selected';}?> value="Cousin">Cousin</option>
                                        <option <?php if($v['relation']=='Uncle'){echo 'selected';}?> value="Uncle">Uncle</option>
                                        <option <?php if($v['relation']=='Aunt'){echo 'selected';}?> value="Aunt">Aunt</option>
                                        <option <?php if($v['relation']=='Son'){echo 'selected';}?> value="Son">Son</option>
                                        <option <?php if($v['relation']=='Daughter'){echo 'selected';}?> value="Daughter">Daughter</option>
                                        <option <?php if($v['relation']=='Father-In-Law'){echo 'selected';}?> value="Father-In-Law">Father-In-Law</option>
                                        <option <?php if($v['relation']=='Mother-In-Law'){echo 'selected';}?> value="Mother-In-Law">Mother-In-Law</option>
                                        <option <?php if($v['relation']=='Brother-In-Law'){echo 'selected';}?> value="Brother-In-Law">Brother-In-Law</option>
                                        <option <?php if($v['relation']=='Sister-In-Law'){echo 'selected';}?> value="Sister-In-Law">Sister-In-Law</option>
                                        <option <?php if($v['relation']=='Partner'){echo 'selected';}?> value="Partner">Partner</option>
                                        <option <?php if($v['relation']=='Proprietor'){echo 'selected';}?> value="Proprietor">Proprietor</option>
                                 
                                   </select>
                                   
                              
                         </div>
                     
                         <div class="form-group">
                                   <label>Country <sup style="color: red;">*</sup></label>
                                   
                                   <select class="form-control" name="country" id="" required>
                                   <?php 
                                        $res=$state->getAllcountry();
                                        while($vl=$res->fetch_assoc()){
                                   ?>
                                        <option <?php if($v['country']==$vl['countrySlug']){echo 'selected';}?> value="<?php echo $vl['countrySlug']?>"><?php echo $vl['countryName']?></option>
                                   <?php }?>
                                   </select>
                         </div>
                          <div class="form-group">
                                   <label>State <sup style="color: red;">*</sup></label>
                                   
                                   <select class="form-control" name="state" id="" required>
                                   <?php 
                                        $res=$state->getAllState();
                                        while($vl=$res->fetch_assoc()){
                                   ?>
                                        <option <?php if($v['state']==$vl['stateSlug']){echo 'selected';}?> value="<?php echo $vl['stateSlug']?>"><?php echo $vl['stateName']?></option>
                                   <?php }?>
                                   </select>
                         </div>
                             <div class="form-group">
                                   <label>Gender <sup style="color: red;">*</sup></label>
                                   
                                   <select class="form-control" name="gender" id="" required>
                                   
                                        <option <?php if($v['gender']=='Male'){echo 'selected';}?> value="Male">Male</option>
                                         <option <?php if($v['gender']=='Female'){echo 'selected';}?> value="Female">Female</option>
                                         <option <?php if($v['gender']=='other'){echo 'selected';}?> value="other">other</option>
                                  
                                   </select>
                         </div>
                         <div class="form-group">
                              <label>Pin <Code></Code> <sup style="color: red;">*</sup></label>
                              <input class="form-control" type="text" name="pin" value="<?php echo $v['pin']?>" autocomplete="off" required />
                         </div>
                         <div class="form-group">
                              <label>Date of birth <Code></Code> <sup style="color: red;">*</sup></label>
                              <input class="form-control" type="date" name="birth" value="<?php echo $v['birth']?>" autocomplete="off" required />
                         </div>
                        
                         <input  class="form-control" type="submit" value="Update" name="singup" id="">
                    </div>

               </form>
               <?php }}?>
          </div>
          <br>
     </div>
</div>
</div>
<?php include('template/footer.php')?>