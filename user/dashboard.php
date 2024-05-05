<?php include('template/load-header.php')?>
<?php include('template/sidebar.php')?>
  <!-- Main content -->
<?php include('template/header.php')?>
    <!-- Page content -->
    <div class="container-fluid mt--6">
    <div class="header  pb-6">
          <div class="row">
            <style>
            .font-weight-bold {
                font-weight: 600 !important;
                font-size: 14px;
            }
            </style>
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <div class="card-body">
                  <div class="row">
                    <div class="col-auto">
                        <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                          <i class="fas fa-user"></i>
                        </div>
                      </div>
                      <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0">Sponser ID</h5>
                          <?php 
                        
                              echo '<span class="h2 font-weight-bold mb-0">AZ#'.Session::get('userCode').'</span>';
                            
                        ?>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <div class="card-body">
                  <div class="row">
                    <div class="col-auto">
                        <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                          <i class="fas fa-user"></i>
                        </div>
                      </div>
                      <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0">Sponser By</h5>
                          <?php 
                        
                              echo '<span class="h2 font-weight-bold mb-0">AZ#'.Session::get('refCode').'</span>';
                            
                        ?>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <div class="card-body">
                  <div class="row">
                    <div class="col-auto">
                        <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                          <i class="fas fa-users"></i>
                        </div>
                      </div>
                      <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0">Left Team</h5>
                          <?php 
                        
                            $result=$user->get_user_info();
                            if($vl=$result->fetch_assoc()){
                              echo '<span class="h2 font-weight-bold mb-0">'.$vl['leftCount'].'</span>';
                            }
                            
                        ?>
                        
                        
                        
                        
                        
                      </div>
                    </div>
                  </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <div class="card-body">
                  <div class="row">
                    <div class="col-auto">
                        <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                          <i class="fas fa-users"></i>
                        </div>
                      </div>
                      <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0">Right Team</h5>
                        <?php 
                        
                        $result=$user->get_user_info();
                        if($vl=$result->fetch_assoc()){
                          echo '<span class="h2 font-weight-bold mb-0">'.$vl['rightCount'].'</span>';
                        }
                      ?>
                      </div>
                    </div>
                  </div>
              </div>
            </div>

           
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <div class="card-body">
                  <div class="row">
                    <div class="col-auto">
                        <div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">
                        <i class="fas fa-users"></i>
                        </div>
                      </div>
                      <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0">My Direct</h5>
                        <?php 
                          $result=$user->getSponserByMe();
                          if($result){
                            echo '<span class="h2 font-weight-bold mb-0">'.$result->num_rows.'</span>';
                          }else{
                            echo '<span class="h2 font-weight-bold mb-0">0</span>';
                          }
                        ?>
                        
                      </div>
                    </div>
                  </div>
              </div>
            </div>

            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <div class="card-body">
                  <div class="row">
                    <div class="col-auto">
                        <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                          <i class="ni ni-money-coins"></i>
                        </div>
                      </div>
                      <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0">Left Total</h5>
                        <?php 
                            $result=$user->get_user_bv();
                            $i=0;
                            if($result){
                              
                              while($vl=$result->fetch_assoc()){
                                if($vl['side']=='left'){
                                    $i=$vl['amount']+$i;
                                }
                              }
                            }
                        ?>
                        <span class="h2 font-weight-bold mb-0"><?php echo $i;?></span>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <div class="card-body">
                  <div class="row">
                    <div class="col-auto">
                        <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                          <i class="ni ni-money-coins"></i>
                        </div>
                      </div>
                      <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0">Right Total</h5>
                        <?php 
                            $result=$user->get_user_bv();
                            $a=0;
                            if($result){
                            
                              while($vl=$result->fetch_assoc()){
                                if($vl['side']=='right'){
                                    $a=$vl['amount']+$a;
                                }
                              }
                            }
                        ?>
                        <span class="h2 font-weight-bold mb-0"><?php echo $a;?></span>
                      </div>
                    </div>
                  </div>
              </div>
            </div>

            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <div class="card-body">
                  <div class="row">
                    <div class="col-auto">
                        <div class="icon icon-shape bg-gradient-primary text-white rounded-circle shadow">
                          <i class="ni ni-money-coins"></i>
                        </div>
                      </div>
                      <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0">Left Week</h5>
                        <?php 
                         $uc=Session::get('userCode');
                            $results=$user->get_user_week_earn($uc);
                            $w=0;
                            if($results){
                              foreach ($results as $result) {
                                if($result['side']=='left'){
                                  $w=$result['amount']+$w;
                                }
                              }
                            }
                        ?>
                        <span class="h2 font-weight-bold mb-0"><?php echo $w;?></span>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <div class="card-body">
                  <div class="row">
                    <div class="col-auto">
                        <div class="icon icon-shape bg-gradient-primary text-white rounded-circle shadow">
                          <i class="ni ni-money-coins"></i>
                        </div>
                      </div>
                      <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0">Right Week</h5>
                        <?php 
                           $uc=Session::get('userCode');
                            $results=$user->get_user_week_earn($uc);
                            $r=0;
                            if($results){
                              foreach ($results as $result) {
                                if($result['side']=='right'){
                                  $r=$result['amount']+$r;
                                }
                              }
                            }
                        ?>
                        <span class="h2 font-weight-bold mb-0"><?php echo $r;?></span>
                      </div>
                    </div>
                  </div>
              </div>
            </div>

     <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <div class="card-body">
                  <div class="row">
                    <div class="col-auto">
                        <div class="icon icon-shape bg-gradient-primary text-white rounded-circle shadow">
                          <i class="ni ni-money-coins"></i>
                        </div>
                      </div>
                      <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0">Left Month</h5>
                        <?php 
                            $results=$user->get_team_month_earn();
                            $w=0;
                            if($results){
                              foreach ($results as $result) {
                                if($result['side']=='left'){
                                  $w=$result['amount']+$w;
                                }
                              }
                            }
                        ?>
                        <span class="h2 font-weight-bold mb-0"><?php echo $w;?></span>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <div class="card-body">
                  <div class="row">
                    <div class="col-auto">
                        <div class="icon icon-shape bg-gradient-primary text-white rounded-circle shadow">
                          <i class="ni ni-money-coins"></i>
                        </div>
                      </div>
                      <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0">Right Month</h5>
                        <?php 
                            $results=$user->get_team_month_earn();
                            $wr=0;
                            if($results){
                              foreach ($results as $result) {
                                if($result['side']=='right'){
                                  $wr=$result['amount']+$wr;
                                }
                              }
                            }
                        ?>
                        <span class="h2 font-weight-bold mb-0"><?php echo $wr;?></span>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <div class="card-body">
                  <div class="row">
                    <div class="col-auto">
                        <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                          <i class="fas fa-money-bill"></i>
                        </div>
                      </div>
                      <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0">Self Purches</h5>
                        <?php 
                       
                            $result=$user->get_user_info();
                            if($vl=$result->fetch_assoc()){
                              echo '<span class="h2 font-weight-bold mb-0">'.$vl['selfPurches'].'</span>';
                            }
                        ?>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <div class="card-body">
                  <div class="row">
                    <div class="col-auto">
                        <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                          <i class="fas fa-money-bill"></i>
                        </div>
                      </div>
                      <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0">Bonus</h5>
                        <?php 
                       
                            $result=$user->get_user_info();
                            if($vl=$result->fetch_assoc()){
                              echo '<span class="h2 font-weight-bold mb-0">'.$vl['blance'].'</span>';
                            }
                        ?>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <div class="card-body">
                  <div class="row">
                    <div class="col-auto">
                        <div class="icon icon-shape bg-gradient-pink text-white rounded-circle shadow">
                          <i class="fas fa-money-bill"></i>
                        </div>
                      </div>
                      <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0">Left Carre Bv</h5>
                        <?php 
                       
                            $result=$user->get_forward_bv();
                            if($result){
                              $vl=$result->fetch_assoc();
                              echo '<span class="h2 font-weight-bold mb-0">'.$vl['amount'].'</span>';
                            }else{echo '<span class="h2 font-weight-bold mb-0">0</span>';}
                        ?>
                      </div>
                    </div>
                  </div>
              </div>
            </div>

            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <div class="card-body">
                  <div class="row">
                    <div class="col-auto">
                        <div class="icon icon-shape bg-gradient-pink text-white rounded-circle shadow">
                          <i class="fas fa-money-bill"></i>
                        </div>
                      </div>
                      <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0">Right Carre Bv</h5>
                        <?php 
                       
                            $result=$user->get_forward_bv2();
                            if($result){
                              $vl=$result->fetch_assoc();
                              echo '<span class="h2 font-weight-bold mb-0">'.$vl['amount'].'</span>';
                            }else{echo '<span class="h2 font-weight-bold mb-0">0</span>';}
                        ?>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
             
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <div class="card-body">
                  <div class="row">
                    <div class="col-auto">
                        <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                          <i class="ni ni-money-coins"></i>
                        </div>
                      </div>
                      <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0">Weekly Booster</h5>
                        <?php 
                            $result=$user->get_month_bonuse();
                            $i=0;
                            if($result){
                              
                              while($vl=$result->fetch_assoc()){
                                
                                    $i=$vl['amount']+$i;
                              
                              }
                            }
                        ?>
                        <span class="h2 font-weight-bold mb-0"><?php echo $i;?></span>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
           

               <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <div class="card-body">
                  <div class="row">
                    <div class="col-auto">
                        <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                          <i class="ni ni-money-coins"></i>
                        </div>
                      </div>
                      <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0">Monthly Booster</h5>
                        <?php 
                            $result=$user->get_month_booster();
                            $mb=0;
                            if($result){
                              
                              while($vl=$result->fetch_assoc()){
                                
                                    $mb=$vl['amount']+$mb;
                              
                              }
                            }
                        ?>
                        <span class="h2 font-weight-bold mb-0"><?php echo $mb;?></span>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <div class="card-body">
                  <div class="row">
                    <div class="col-auto">
                        <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                          <i class="ni ni-money-coins"></i>
                        </div>
                      </div>
                      <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0">Matching Income</h5>
                        <?php 
                            $result=$user->get_week_bonuse();
                            $i=0;
                            if($result){
                              
                              while($vl=$result->fetch_assoc()){
                                
                                    $i=$vl['amount']+$i;
                              
                              }
                            }
                        ?>
                        <span class="h2 font-weight-bold mb-0"><?php echo $i;?></span>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
              

            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <div class="card-body">
                  <div class="row">
                    <div class="col-auto">
                        <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                          <i class="fas fa-bars"></i>
                        </div>
                      </div>
                      <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0">My Level</h5>
                        <?php 
                       
                            $result=$user->get_user_lavel();
                            if($vl=$result->fetch_assoc()){
                             
                              if($vl['lavel_three']==1){
                                echo '<span class="h2 font-weight-bold mb-0">Platinum 11% </span>';
                              }elseif($vl['lavel_two']==1){
                                echo '<span class="h2 font-weight-bold mb-0">Gold 8% </span>';
                              }elseif($vl['lavel_one']==1){
                                echo '<span class="h2 font-weight-bold mb-0">Silver 3%</span>';
                              }
                            }
                        ?>
                      </div>
                    </div>
                  </div>
              </div>
            </div>



            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <div class="card-body">
                  <div class="row">
                    <div class="col-auto">
                        <div class="icon icon-shape bg-gradient-primary text-white rounded-circle shadow">
                          <i class="ni ni-money-coins"></i>
                        </div>
                      </div>
                      <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0">Silver Income (TF)</h5>
                        <?php 
                            $results=$user->silver_income();
                            $w=0;
                            if($results){
                              foreach ($results as $result) {
                                  $w=$result['amount'];
                              }
                            }
                        ?>
                        <span class="h2 font-weight-bold mb-0"><?php echo $w;?></span>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <div class="card-body">
                  <div class="row">
                    <div class="col-auto">
                        <div class="icon icon-shape bg-gradient-primary text-white rounded-circle shadow">
                          <i class="ni ni-money-coins"></i>
                        </div>
                      </div>
                      <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0">Gold Income (CF)</h5>
                        <?php 
                            $results=$user->gold_income();
                            $w2=0;
                            if($results){
                              foreach ($results as $result) {
                                  $w2=$result['amount'];
                              }
                            }
                        ?>
                        <span class="h2 font-weight-bold mb-0"><?php echo $w2;?></span>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <div class="card-body">
                  <div class="row">
                    <div class="col-auto">
                        <div class="icon icon-shape bg-gradient-primary text-white rounded-circle shadow">
                          <i class="ni ni-money-coins"></i>
                        </div>
                      </div>
                      <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0">Platinum Income (HF)</h5>
                        <?php 
                            $results=$user->plutinam_income();
                            $w3=0;
                            if($results){
                              foreach ($results as $result) {
                                  $w3=$result['amount'];
                              }
                            }
                        ?>
                        <span class="h2 font-weight-bold mb-0"><?php echo $w3;?></span>
                      </div>
                    </div>
                  </div>
              </div>
            </div>

            
            <?php 
                $user->getincome_team();
                $user->year_income();
                // echo'<br>';echo date('Y/m/28');
                // echo'<br>';echo date('Y/m/d');
                ?>
          </div>
      </div>
    </div>
  <!-- Argon Scripts -->
  <?php include('template/footer.php')?>