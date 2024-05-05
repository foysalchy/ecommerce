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
              <h3 class="mb-0">Cash In History</h3>
            </div>
            <!-- Light table -->
            
            <div class="table-responsive">
              <table id="example" class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>


                    <th scope="col" class="sort" data-sort="name" >Ser.</th>
                    <th scope="col" class="sort" data-sort="name"  >User Code</th>
                    <th scope="col" class="sort" data-sort="name"  >Amount</th>
                    <th scope="col" class="sort" data-sort="name"  >Process</th>
                    <th scope="col" class="sort" data-sort="name"  >In Date</th>
                  </tr>
                </thead>
                <tbody class="list">
                <?php
                
                  $result=$user->getCashIn();
                  if($result){
                    $i='';
                    while($value=$result->fetch_assoc()){
                      $i++;		
                ?>
                 <tr>
                   <td><?php echo $i?></td>
                   <td ><?php echo $value['uCode']?></td>
                   <td ><?php echo $value['amount']?></td>
                   <td ><?php echo $value['process']?></td>
                   <td ><?php echo $value['incomeDate']?></td>
                   
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