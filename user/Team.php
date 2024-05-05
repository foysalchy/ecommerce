<?php include('template/load-header.php')?>
<?php include('template/sidebar.php')?>
  <!-- Main content -->
<?php include('template/header.php')?>
    <!-- Page content -->
    <div class="container-fluid mt--6">
    <style>
      .col-md-12 img{
        width:120px;
        
      }
      .col-md-6 img{
        width:100px
      }
      .col-md-3 img{
        width:80px
      }
      .col-md-1\.5{
        width: 12.5%
      }
      .col-md-1\.5 img{
        width:60px
      }
      .col-md-0\.75{
        width:6.25%
      }
      .col-md-0\.75 img{
          width: 40px
      }
    </style>

     <div class="row">
      
     </div>
     
    

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
                 <th scope="col" class="sort" data-sort="name" >User Code</th>
                   <th scope="col" class="sort" data-sort="name" >Name</th>
                   <th scope="col" class="sort" data-sort="name" >Email</th>
                   <th scope="col" class="sort" data-sort="name" >State</th>
                   <th scope="col" class="sort" data-sort="name" >Side</th>
                   <th scope="col" class="sort" data-sort="name" >Sponser ID</th>
                   <th scope="col" class="sort" data-sort="name" >Placement Id</th>
                 
                 </tr>
               </thead>
  
               <tbody class="list">
               <?php
               
                    $user_id=Session::get('userCode');
                    $i=$user->myTeam($user_id);
                 
                    
                     
               ?>
                
               </tbody>
             </table>
           </div>
         
         </div>
    <br><br><br>
  <!-- Argon Scripts -->
  <?php include('template/footer.php')?>