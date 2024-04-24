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
          echo  $prod->deleteProd($id);
          }
        ?>
          <div class="card">
           
            <!-- Card header -->
            <div class="card-header border-0">
              <h3 class="mb-0">Product List</h3>
            </div>
            <!-- Light table -->
            
            <div class="table-responsive">
              <table id="example" class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col" class="sort" data-sort="name" >Ser.</th>
                    <th scope="col" class="sort" data-sort="name"  >Title</th>
                    <th scope="col" class="sort" data-sort="budget" >Category</th>
                    <th scope="col" class="sort" data-sort="status"  >Price</th>
                    <th scope="col" class="sort" data-sort="completion">Discount Price</th>
                    <th scope="col" class="sort" data-sort="completion">BV</th>
                     <th scope="col" class="sort" data-sort="status"  >GST</th>
                      <th scope="col" class="sort" data-sort="status"  >CGST</th>
                    <th scope="col" class="sort" data-sort="completion">Total</th>
                    <th scope="col" class="sort" data-sort="completion">Action</th>
                  </tr>
                </thead>
                <tbody class="list">
                <?php
                
                  $result=$prod->getAllProd();
                  if($result){
                    $i='';
                    while($value=$result->fetch_assoc()){
                      $i++;
                ?>
                 <tr>
                   <td><?php echo $i?></td>
                   <td><?php $fm=new Formates(); echo $value['title']?></td>
                   <td style="text-transform: capitalize;"><?php echo $value['catId']?></td>
                   <td ><?php echo $value['price']?></td>
                   
                   <td ><?php if($value['disPrice']!=$value['price']){echo $value['disPrice'];}?></td>
                   <td ><?php echo $value['bv']?></td>
                    <td ><?php echo $value['gst']?></td>
                     <td ><?php echo $value['cgst']?></td>
                   <td ><?php echo $value['quantity']?></td>
                    <td>
                     <a style="margin-right:10px" href="Edit-Product.php?id=<?php echo $value['productId']?>">Edit</a>
                     <a onclick="return confirm('Are you sure you want to delete?');" href="?did=<?php echo $value['productId']?>">Delete</a>
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