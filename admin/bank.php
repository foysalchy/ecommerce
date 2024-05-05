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
          if(isset($_GET['did'])){
            $id=$_GET['did'];
          echo  $user->deleteuser($id);
          }
          if(isset($_GET['id'])){
            $id=$_GET['id'];
          echo  $user->deactive($id);
          }
        ?>
        <?php echo $_SESSION['msgs'];?>
          <div class="card">
           
            <!-- Card header -->
            <div class="card-header border-0">
              <h3 class="mb-0">User Bank Details</h3>
            </div>
            <!-- Light table -->
            
            <div class="table-responsive">
              <table id="example" class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col" class="sort" data-sort="name" >Ser.</th>
                    <th scope="col" class="sort" data-sort="name"  >User Code</th>
                    <th scope="col" class="sort" data-sort="name"  >User Name</th>
                    <th scope="col" class="sort" data-sort="name"  >Holder Name</th>
                    <th scope="col" class="sort" data-sort="name"  >bankName</th>
                    <th scope="col" class="sort" data-sort="name"  >bank Account</th>
                    <th scope="col" class="sort" data-sort="name"  >IFSC</th>
                    <th scope="col" class="sort" data-sort="name"  >Bv</th>
                    <th scope="col" class="sort" data-sort="name"  >Action</th>
                  </tr>
                </thead>
                <tbody class="list">
                <?php
                
                  $result=$user->getAllUserBank();
                  if($result){
                    $i='';
                    while($value=$result->fetch_assoc()){
                      $i++;
                ?>
                 <tr>
                   <td><?php echo $i?></td>
                   <td><?php echo $value['userCode']?></td>
                    <td><?php echo $value['name']?></td>
                   <td><?php echo $value['userName']?></td>
                   <td><?php echo $value['bankName']?></td>
                   <td><?php echo $value['bankAccount']?></td>
                   <td><?php echo $value['ifsc']?></td>
                     <td><?php echo $value['blance']?></td>
                   <td>
                    <a style="margin-right:10px" href="edit-bank.php?uid=<?php echo $value['userCode']?>">Edit</a>
                    <a style="margin-right:10px" href="pay.php?uid=<?php echo $value['userCode']?>">Pay</a>
                    
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