<?php include('template/load-header.php')?>
<?php include('template/sidebar.php')?>
  <!-- Main content -->
<?php include('template/header.php')?>
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col">
        
        <?php 
          echo $_SESSION['msgs']="";
          if(isset($_GET['did'])){
            $id=$_GET['did'];
            echo  $prod->completeOrder($id);
          }
          if(isset($_GET['udid'])){
            $id=$_GET['udid'];
            echo  $prod->undeliver($id);
          }
           if(isset($_GET['orderDelet'])){
            $id=$_GET['orderDelet'];
            echo  $prod->orderDelet($id);
          }
          if(isset($_GET['Pid'])){
            $id=$_GET['Pid'];
            echo  $prod->paymentPaid($id);
          }
        ?>
        <?php echo $_SESSION['msgs'];?>
          <div class="card">
           
            <!-- Card header -->
            <div class="card-header border-0">
              <h3 class="mb-0">Order List</h3>
            </div>
            <!-- Light table -->
            
            <div class="table-responsive">
              <table id="example" class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>


                    <th scope="col" class="sort" data-sort="name" >Ser.</th>
                    <th scope="col" class="sort" data-sort="name"  >Title</th>
                    <th scope="col" class="sort" data-sort="budget" >Name</th>
                    <th scope="col" class="sort" data-sort="status"  >Quantity</th>
                    <th scope="col" class="sort" data-sort="completion">Size</th>
                    <th scope="col" class="sort" data-sort="completion">Total Price</th>
                    <th scope="col" class="sort" data-sort="completion">Proof</th>
                     <th scope="col" class="sort" data-sort="completion">PayStatus</th>
                    <th scope="col" class="sort" data-sort="completion">Date</th>
                    <th scope="col" class="sort" data-sort="completion">Status</th>
                    <th scope="col" class="sort" data-sort="completion">Action</th>
                  </tr>
                </thead>
                <tbody class="list">
                <?php
                
                  $result=$prod->getAllOrder();
                  if($result){
                    $i='';
                    while($value=$result->fetch_assoc()){
                      $i++;		
                ?>
                 <tr>
                   <td><?php echo $i?></td>
                   <td><?php $fm=new Formates(); echo $value['title']?></td>
                   <td ><?php echo $value['firstName'].' '.$value['LastName']?></td>
                   <td style="text-transform: capitalize;"><?php echo $value['quantity']?></td>
                   <td ><?php echo $value['size']?></td>
                   <td ><?php echo $value['total']?></td>
                    <td > <a  href="../<?php echo $value['proof']?>">View</a></td>
                    
                   <td ><?php if($value['payType']==1){echo 'Paid';}else{echo 'due';} ?></td>
                   <td ><?php echo $value['date']?></td>
                   <td ><?php  if($value['status']==0){echo '<span style="color:red">Processin</span>';}else{echo '<span style="color:green">Complete</span>';}?></td>
                    <td>
                         <a style="margin-right:10px" onclick="return confirm('Are you sure you want delete this product');" href="?orderDelet=<?php echo $value['id']?>">Delete</a>
                  
                    <?php if($value['payType']!=1){?>
                      <a style="margin-right:10px" href="?Pid=<?php echo $value['id']?>">Paid</a>
                    <?php }?>
                     <a style="margin-right:10px" href="View-Order.php?id=<?php echo $value['id']?>">View</a>
                     <?php if($value['status']==0){?>
                        <a onclick="return confirm('Are you sure This Order is Delived?');" href="?did=<?php echo $value['id']?>">Delived</a>
                    <?php }elseif($value['status']==1){?>
                      <a onclick="return confirm('Are you sure this is undelived order!');" href="?udid=<?php echo $value['id']?>">Pending</a>
                    <?php }?>
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