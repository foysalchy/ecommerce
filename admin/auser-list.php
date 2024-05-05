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
              <h3 class="mb-0">User List</h3>
            </div>
            <!-- Light table -->
            
            <div class="table-responsive">
              <table id="example" class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col" class="sort" data-sort="name" >Ser.</th>
                    <th scope="col" class="sort" data-sort="name"  >User Code</th>
                    <th scope="col" class="sort" data-sort="name"  >Name</th>
                    <th scope="col" class="sort" data-sort="budget" >State</th>
                    <th scope="col" class="sort" data-sort="status"  >Email</th>
                    <th scope="col" class="sort" data-sort="status"  >Status</th>
                    <th scope="col" class="sort" data-sort="completion">Action</th>
                  </tr>
                </thead>
                <tbody class="list">
                <?php
                
                  $result=$user->getAllUser();
                  if($result){
                    $i='';
                    while($value=$result->fetch_assoc()){
                      $i++;
                ?>
                 <tr>
                   <td><?php echo $i?></td>
                   <td><?php echo $value['customId']?></td>
                   <td><?php echo $value['name']?></td>
                   <td><?php echo $value['state']?></td>
                   <td><?php echo $value['email']?></td>
                   <td><?php if($value['status']==1){echo '<span style="color:green">Active</span>';}else{echo '<span style="color:red">Deactive</span>';}?></td>
                   <td>
                   <a style="margin-right:10px" href="profile.php?eid=<?php echo $value['customId']?>">Edit</a>
                   <a style="margin-right:10px" href="tree.php?tid=<?php echo $value['customId']?>">Tree</a>
                    <a style="margin-right:10px" href="Direct.php?did=<?php echo $value['customId']?>">Direct</a>
                     <a style="margin-right:10px" href="Team.php?did=<?php echo $value['customId']?>">Team</a>
                     <a style="margin-right:10px" href="?id=<?php echo $value['uid']?>">Deactive</a>
                     <a onclick="return confirm('Are you sure you want to delete?');" href="?did=<?php echo $value['uid']?>">Delete</a>
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