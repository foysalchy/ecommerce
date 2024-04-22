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
          echo  $prod->deleteSlider($id);
          }
        ?>
          <div class="card">
           
            <!-- Card header -->
            <div class="card-header border-0">
              <h3 class="mb-0">Category List</h3>
            </div>
            <!-- Light table -->
            
            <div class="table-responsive">
              <table id="example" class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col" class="sort" data-sort="name" >Ser.</th>
                    <th scope="col" class="sort" data-sort="name"  >Images</th>
                    <th scope="col" class="sort" data-sort="budget" >Link</th>
                    <th scope="col" class="sort" data-sort="completion">Action</th>
                  </tr>
                </thead>
                <tbody class="list">
                <?php
                
                  $result=$prod->getAllSlider();
                  if($result){
                    $i='';
                    while($value=$result->fetch_assoc()){
                      $i++;
                ?>
                 <tr>
                   <td><?php echo $i?></td>
                   <td> <img style="width:50px" src="<?php echo $value['images']?>" alt=""></td>
                   <td><?php echo $value['link']?></td>
                   <td>
                     <a style="margin-right:10px" href="Edit-Slider.php?id=<?php echo $value['id']?> & link=<?php echo $value['link']?> & slider=<?php echo $value['images']?>">Edit</a>
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