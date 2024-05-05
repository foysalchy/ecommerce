
<div class="footer-top" >
     <div class="container">
          <p>Connect with us</p>
     <?php
         $result=$site->getSocial();
         if($result){
           while($value=$result->fetch_assoc()){
     ?>   
          <?php if(!$value['link']==''){?>
               <li class="s-l-i-3"><a href="<?php echo $value['link'];?>"><i style="background:#3b5997 ;" class="icofont icofont-social-facebook"></i></a></li>
          <?php }?>

          <?php if(!$value['link2']==''){?>
               <li class="s-l-i-3"><a href="<?php echo $value['link2'];?>"><i style="background:#439665 ;" class="icofont icofont-social-twitter"></i></a></li>
          <?php }?>

          <?php if(!$value['link3']==''){?>
               <li class="s-l-i-3"><a href="<?php echo $value['link3'];?>"><i style="background:#21a1f0 ;" class="icofont icofont-social-instagram"></i></a></li>
          <?php }?>
          
          <?php if(!$value['link4']==''){?>
               <li class="s-l-i-3"><a href="<?php echo $value['link4'];?>"><i style="background:#21a1f0 ;" class="icofont icofont-social-dribbble"></i></a></li>
          <?php }?>

          <?php if(!$value['link5']==''){?>
               <li class="s-l-i-3"><a href="<?php echo $value['link5'];?>"><i style="background:#21a1f0 ;" class="icofont icofont-social-skype"></i></a></li>
          <?php }?>

          <?php if(!$value['link6']==''){?>
               <li class="s-l-i-3"><a href="<?php echo $value['link6'];?>"><i style="background:#21a1f0 ;" class="icofont icofont-social-whatsapp"></i></a></li>
          <?php }?>
     <?php }}?>
     </div>
</div>
<footer>
     <div class="container">
          <div class="row">
               <div class="widget col-md-3 col-sm-6">
                    <p><strong>Our Brands</strong></p>
                    <ul>
                         <li><a href="">Home</a></li>
                         <li><a href="">Shop</a></li>
                         <li><a href="">Blog</a></li>
                         <li><a href="">My acoount</a></li>
                         <li><a href="">become a seller</a></li>
                         <li><a href="">logout</a></li>
                         <li><a href="">Shop</a></li>
                    </ul>
               </div>
               <div class="widget col-md-3 col-sm-6">
                    <p><strong>Our Brands</strong></p>
                    <ul>
                         <li><a href="">Home</a></li>
                         <li><a href="">Shop</a></li>
                         <li><a href="">Blog</a></li>
                         <li><a href="">My acoount</a></li>
                         <li><a href="">become a seller</a></li>
                         <li><a href="">logout</a></li>
                         <li><a href="">Shop</a></li>
                    </ul>
               </div>
               <div class="widget col-md-3 col-sm-6">
                    <p><strong>Our Brands</strong></p>
                    <ul>
                         <li><a href="">Home</a></li>
                         <li><a href="">Shop</a></li>
                         <li><a href="">Blog</a></li>
                         <li><a href="">My acoount</a></li>
                         <li><a href="">become a seller</a></li>
                         <li><a href="">logout</a></li>
                         <li><a href="">Shop</a></li>
                    </ul>
               </div>
               <div class="widget col-md-3 col-sm-6">
                    <p><strong>Our Brands</strong></p>
                    <ul>
                         <li><a href="">Home</a></li>
                         <li><a href="">Shop</a></li>
                         <li><a href="">Blog</a></li>
                         <li><a href="">My acoount</a></li>
                         <li><a href="">become a seller</a></li>
                         <li><a href="">logout</a></li>
                         <li><a href="">Shop</a></li>
                    </ul>
               </div>
          </div>
     </div>
</footer>
<?php
$result=$site->getfooterinfo();
if($result){
        while($vl=$result->fetch_assoc()){
?>
     <div class="footer-bottom">
          <?php echo $vl['des']?>
     </div>
<?php }}?>
<!--================footer  Area end=================-->
</body>
</html>