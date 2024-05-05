<?php include('template/load-header.php')?>
<?php include('template/sidebar.php')?>
  <!-- Main content -->
<?php include('template/header.php')?>
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col">
        
        <?php 
           $_SESSION['msgs']="";
          if(isset($_GET['aid'])){
            $id=$_GET['aid'];
          echo  $user->kyc_Accept($id);
          }
          if(isset($_GET['rid'])){
            $id=$_GET['rid'];
          echo  $user->reject_kyc($id);
          }
        ?>
        <?php echo $_SESSION['msgs'];?>
          <div class="card">
           
            <!-- Card header -->
            <div class="card-header border-0">
              <h3 class="mb-0">KYC Submited List</h3>
            </div>
            <!-- Light table -->
            
            <div class="table-responsive">
              <table id="example" class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col" class="sort" data-sort="name" >Ser.</th>
                    <th scope="col" class="sort" data-sort="name"  >User Code</th>
                    <th scope="col" class="sort" data-sort="status"  >Addhar</th>
                    <th scope="col" class="sort" data-sort="status"  >Pan</th>
                    <th scope="col" class="sort" data-sort="status"  >Pan Card Number</th>
                    <th scope="col" class="sort" data-sort="status"  >Statment</th>
                    <th scope="col" class="sort" data-sort="status"  >Status</th>
                    <th scope="col" class="sort" data-sort="completion">Action</th>
                  </tr>
                </thead>
                <tbody class="list">
                <?php
                
                  $result=$user->getAllKyc();
                  if($result){
                    $i='';
                    while($value=$result->fetch_assoc()){
                      $i++;
                ?>
                 <tr>
                   <td><?php echo $i?></td>
                   <td><?php echo $value['UsCode']?></td>
                   <td><a href="<?php echo $value['aadhar']?>">Click</a></td>
                   <td><a href="<?php echo $value['pan']?>">Click</a></td>
                   <td><?php echo $value['penNumber']?></td>
                   <td><a href="<?php echo $value['bank']?>">Click</a></td>
                   <td><?php if($value['status']==1){echo '<span style="color:green">Verified</span>';}else{echo '<span style="color:red">Unverified</span>';}?></td>
                   <td>
                     <a style="margin-right:10px"  onclick="return confirm('Are you sure you want to Accepet?');" href="?aid=<?php echo $value['id']?>">Accepet</a>
                     <a onclick="return confirm('Are you sure you want to Reject?');" href="?rid=<?php echo $value['id']?>">Reject</a>
                   </td>
                 </tr>
                <?php }}?>
                </tbody>
              </table>
            </div>
           
          </div>
        </div>
      </div>
 
  <!-- Argon Scripts -->
  <?php include('template/footer.php')?>