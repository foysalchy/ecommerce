<?php include('template/load-header.php')?>
<?php include('template/sidebar.php')?>
  <!-- Main content -->
<?php include('template/header.php')?>
    <!-- Page content -->
    <div class="container-fluid mt--6">
    <div class="header  pb-6">
          <div class="row">
            
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
                        <h5 class="card-title text-uppercase text-muted mb-0">Total User</h5>
                        <span class="h2 font-weight-bold mb-0"><?php if($user->getAllUser3()){ echo $user->getAllUser3()->num_rows;}?></span>
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
                          <i class="ni ni-box-2"></i>
                        </div>
                      </div>
                      <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0">Total Order</h5>
                        <?php 
                          $result=$prod->getAllOrder();
                          if($result){
                            echo '<span class="h2 font-weight-bold mb-0">'.$result->num_rows.'</span>';
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
                        <h5 class="card-title text-uppercase text-muted mb-0">Year Earn</h5>
                        <?php 
                       
                            $result=$user->earn();
                            if($result){
                              $i=0;
                             
                              while($vl=$result->fetch_assoc()){
                               
                                 $i=$vl['total']+$i;
                               
                              }
                              echo  '<span class="h2 font-weight-bold mb-0">'.$i.'<span>';
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
                          <i class="ni ni-atom"></i>
                        </div>
                      </div>
                      <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0">Total Product</h5>
                        <?php 
                          $result=$prod->getAllProd();
                          if($result){
                            $i=0;
                           
                            while($vl=$result->fetch_assoc()){
                             
                               $i=$vl['quantity']+$i;
                             
                            }
                          echo  '<span class="h2 font-weight-bold mb-0">'.$i.'<span>';
                          }?>
                        
                      </div>
                    </div>
                  </div>
              </div>
            </div>

          </div>
      </div>
     
    </div>
    
  <!-- Argon Scripts -->
  <?php include('template/footer.php')?>