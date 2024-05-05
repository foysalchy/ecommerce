<?php include('template/header.php')?>
<!--================about  Area start=================-->
<?php
     $result=$page->selectAbout();
     if($result){
          while($value=$result->fetch_assoc()){
?>
<div id="about-page">
     <div class="container">
          <div class="wrapper">
               <h3 style="color:#56565a;text-align: center;margin:30px 0px;"><b><?php echo  $value['title']?></b></h3>
               <div class="widget">
                    <div class="thumbnaile">
                         <img src="admin/<?php echo  $value['img']?>" alt="">
                    </div>
                    <div class="description">
                         <?php echo  $value['description']?>
                    </div>
               </div>
               <br>
               <br>
               <div class="widget row">
                    <div class="side-one col-md-5">
                         <h6><strong><?php echo  $value['title2']?></strong></h6>
                         <p><?php echo  $value['description2']?></p>
                    </div>
                    <div class="side-one col-md-7">
                         <img src="admin/<?php echo  $value['img2']?>" alt="">
                    </div>
               </div>
               <br><br>
               <div class="widget row">
                    <div class="side-one col-md-7">
                         <img src="admin/<?php echo  $value['img3']?>" alt="">
                    </div>
                    <div class="side-one col-md-5">
                         <h6><strong><?php echo  $value['title3']?></strong></h6>
                         <p><?php echo  $value['description3']?></p>
                    </div>
                   
               </div>
               <br><br>
          </div>
     </div>
</div>
<?php }}?>
<!--================about  Area start=================-->
<!--================footer  Area start=================-->

<?php include('template/footer.php')?>