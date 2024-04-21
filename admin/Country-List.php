<?php include('template/load-header.php')?>
<?php include('template/sidebar.php')?>
  <!-- Main content -->
<?php include('template/header.php')?>
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col">
        <?php echo $_SESSION['msgs'];?>
        <?php 
          echo $_SESSION['msgs']="";
          if(isset($_GET['did'])){
            $id=$_GET['did'];
          echo  $state->deletecountry($id);
          }
        ?>
          <div class="card">
           
            <!-- Card header -->
            <div class="card-header border-0">
              <h3 class="mb-0">country List</h3>
            </div>
            <!-- Light table -->
            
            <div class="table-responsive">
              <table id="example" class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col" class="sort" data-sort="name" >Ser.</th>
                    <th scope="col" class="sort" data-sort="name"  >Name</th>
                    <th scope="col" class="sort" data-sort="budget" >Slug</th>
                    <th scope="col" class="sort" data-sort="completion">Action</th>
                  </tr>
                </thead>
                <tbody class="list">
                <?php
                
                  $result=$state->getAllcountry();
                  if($result){
                    $i='';
                    while($value=$result->fetch_assoc()){
                      $i++;
                ?>
                 <tr>
                   <td><?php echo $i?></td>
                   <td><?php echo $value['countryName']?></td>
                   <td><?php echo $value['countrySlug']?></td>
                   <td>
                     <a style="margin-right:10px" href="Add-Country.php?id=<?php echo $value['id']?> & name=<?php echo $value['countryName']?>">Edit</a>
                     <a onclick="return confirm('Are you sure you want to delete?');" href="?did=<?php echo $value['id']?>">Delete</a>
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