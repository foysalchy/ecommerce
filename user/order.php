<?php include('template/load-header.php')?>
<?php include('template/sidebar.php')?>
  <!-- Main content -->
<?php include('template/header.php')?>
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col">
        
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
                  
                   <td ><?php echo $value['date']?></td>
                   <td ><?php  if($value['status']==0){echo '<span style="color:red">Processin</span>';}else{echo '<span style="color:green">Complete</span>';}?></td>
                    <td>
                     <a style="margin-right:10px" href="View-Order.php?id=<?php echo $value['id']?>">View</a>
                     
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