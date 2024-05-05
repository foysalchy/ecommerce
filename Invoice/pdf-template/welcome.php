
<!doctype html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <link href='./css/bootstrap.min.css' rel='stylesheet'>
        <link href='' rel='stylesheet'>
        <style>
            .padding {
                padding: 2rem !important
            }
            h3 {
                font-size: 20px;
                margin:0
            }
            h5 {
                font-size: 15px;
                line-height: 26px;
                color: #3d405c;
                margin: 0;
                font-family: 'Circular Std Medium'
            }
            .text-dark {
                color: #3d405c !important
            }
            .text-light {
                color: #fff !important
            }
        </style>
    </head>
    <body  class='snippet-body' >
    <?php   
    
    
                             
    if(isset($_GET['cart'])){
       $userid= $_GET['cart'];
       include('../config/Functions.php');
       $db=new Functions();
       
       $information='';
       $sub=0;
       $s=0;
       $discount=0;
       $total=0;
       $date='';
       $com=  ''; 
       $add=  ''; 
       $apert= '';
       $city=  '';
       $state='';
       $country='';
       $postal='';
       $name='';
        $t=0;
      
      
    }
?>
 <?php 
 $quesry22="select * from tbl_cart where userId='$userid' and status='2'";
 $exicute22=$db->select($quesry22);
    if($exicute22){
            $vl1=$exicute22->fetch_assoc();
            $cartId2=$vl1['id'];
            $proID=$vl1['proID'];
            $vl1['status'];
            
            if($vl1['status']==2){
                $sql41="SELECT o.*,p.title from tbl_order as o, tbl_product as p  where o.cartid='$cartId2' and p.productId='$proID'";
                
                
                $exicute41=$db->select($sql41);
                if($exicute41){
                    while($value1=$exicute41->fetch_assoc()){
                    
                    $date=$value1['date'];
                    $name=$value1['firstName'].$value1['LastName'];
                    $com=       $value1['company'];
                    $add=       $value1['address'];
                    $apert=     $value1['apertment'];
                    $city=      $value1['city'];
                    $state=   $value1['state'];
                    $country=   $value1['country'];
                    $postal=    $value1['postal'];}
                }
                                  
            }
    }
                                    
?>
        <div class="offset-xl-2 col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12 padding">
            <div class="card">
            <div class="logo-area" style="text-align:center">
                    <?php
                         $qu1="select * from tbl_logo";
                         $ex1=$db->select($qu1);
                         if($ex1){
                         while($val2=$ex1->fetch_assoc()){
                         ?>
                         <img style="width:200px;" src="../admin/<?php echo $val2['logo'];?>" class="navbar-brand-img" alt="...">
                    <?php }}?>
                    </div>
                    <p style="text-align:center">GST Invoice</p>
                <div class="card-header p-4">
                    <div style="display:block" class="float-right">
                        <?php
                            $quid="select * from tbl_invoice ORDER BY id DESC";
                            $inid=$db->select($quid);
                            if($inid){
                                $ft=$inid->fetch_assoc();
                                $ser=$ft['id']+1;
                            }else{
                                $ser=1;
                            }
                        ?>
                        <h3 style="background: #008b8b;color: white;display: inline-block;padding: 7px;opacity: 0.6;;padding:0 10px;width:210px" class="mb-0">Invoice #<?php echo $ser?></h3>
                    </div>
                    <?php echo $date?>
                </div>
                <div class="card-body">
                    <div class="row mb-4">
                        <div class="col-sm-6">
                            <h5 class="mb-3">To:</h5>
                            <div><?php echo $name?></div>
                            <div><?php echo $com?></div>
                            <div><?php echo $add.' '.$apert?></div>
                            <div><?php echo $country.' '.$state.' '.$city.' '.$postal?></div>
                        </div>
                    </div>
                    <div class="table-responsive-sm">
                        <table style="margin-bottom:0px;border:2px solid #ddd" class="table table-striped">
                            <thead>
                                <tr style="background: darkcyan;color: white;">
                                    
                                    <th>Ser.</th> 
                                    <th>Description Of Goods</th> 
                                    <th>Quantity</th>
                                    <th>BV</th>
                                    <th>Price</th>
                                    <th>Size</th>
                                    <th>GST</th>
                                    <th>CGST</th>
                                    <th>HSN</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                    <?php 
                                    $quesry="select * from tbl_cart where userId='$userid' and status='2'";
                                    $exicute=$db->select($quesry);
                                      if($exicute){
                                          $i='';
                                        while($vl=$exicute->fetch_assoc()){
                                            $i++;
                                            $cartId=$vl['id'];
                                            $vl['status'];
                                            
                                            if($vl['status']==2){
                                                 $sql4="SELECT o.*,p.title,p.bv,p.gst,p.cgst,p.hsn from tbl_order as o, tbl_product as p   where o.cartid='$cartId' and p.productId=o.pid";
                                                 $exicute4=$db->select($sql4);
                                                 if($exicute4){
                                                     $value=$exicute4->fetch_assoc();
                                                       $title=$value['title'];
                                                        $gst=$value['gst']; $cgst=$value['cgst'];
                                                       $quantity=$value['quantity'];
                                                       $size=$value['size'];
                                                       $price=$value['price'];
                                                       $bv=$value['bv'];
                                                       $total=$value['total'];
                                                       $date=$value['date'];
                                                       $hsn=$value['hsn'];
                                                       
                                                        $tax=$gst+$cgst;
                                                        $n=$tax*$price/100;
                                                        $p=$price+$n;
                                                        $s=$p*$quantity;

                                                    //  subtotal   
                                                        $sub=$s+$sub;

                                                        $t=$total+$t;

                                                        $discount=$sub-$t;
                                               
                                                        if($price==0){
                                                            $price='free';
                                                        }
                                                         if($s==0){
                                                            $s='free';
                                                        }
                                                         if($sub==0){
                                                            $sub=' free';
                                                        }
                                                        if($t==0){
                                                            $t=' free';
                                                        }
                                                        
                                                        echo ' <tr>
                                                        <td>'.$i.'</td> 
                                                        <td>'.$title.'</td> 
                                                        <td>'.$quantity.'</td>
                                                        <td>'.$quantity.'*'.$bv.'</td>
                                                        <td>'.$price.'</td>
                                                        <td>'.$size.'</td>
                                                            <td>'.$gst.'%</td>    <td>'.$cgst.'%</td>
                                                        <td>'.$hsn.'</td>
                                                        <td>'.$s.'</td>
                                                        </tr>';
                                                     
                                                 }
                                                
                                                 
                                                 if($exicute){
                                                      $sql2="UPDATE tbl_cart set status='1' where id='$cartId' and userId='$userid'";
                                                      $exicute2=$db->update($sql2);
                                                 }
                                  
                                            }
                                       }
                                    }
                                    ?>
                            </tbody>
                        </table>
                    </div>
                <div>
                <table style="width:300px;float:right" class="table table-clear">
                    <tbody>
                        <tr>
                            <td style="border:none" class="left">
                                <strong class="text-dark">Subtotal</strong>
                            </td>
                            <td style="border:none;text-align:right" class="right">Inr <?php echo $sub?></td>
                        </tr>
                        <tr>
                            <td style="border:none" class="left">
                                <strong class="text-dark">Discount </strong>
                            </td>
                            <td style="border:none;text-align:right" class="right"><?php echo $discount;?></td>
                        </tr>
                        <tr style="background: #008b8b;">
                            <td  style="border:none" class="left">
                                <strong class="text-light">Total</strong> </td>
                            <td style="border:none;text-align:right"  class="right">
                                <strong class="text-light">Inr<?php echo $t;?></strong>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        <div>
                 <table style="width:300px;margin-top:160px class="table table-clear">
                         <tbody>
                             <tr>
                                 <td style="border:none" class="left">
                                     <strong class="text-dark">Company Details</strong>
                                 </td>
                                 
                             </tr>
                             <?php
                                $queryc="SELECT *  from tbl_company";
                                $exicutec=$db->select($queryc);
                                $vlc=$exicutec->fetch_assoc();
                             ?>
                             <tr>
                                 <td style="border:none" class="left">
                                     <strong class="text-dark">GST Number</strong>
                                 </td>
                                 <td style="border:none;text-align:right" class="right"><?php echo $vlc['gst']?></td>
                             </tr>
                             <tr>
                                 <td style="border:none" class="left">
                                     <strong class="text-dark">CIN Number</strong>
                                 </td>
                                 <td style="border:none;text-align:right" class="right"><?php echo $vlc['cin']?></td>
                             </tr>
                              <tr>
                                 <td style="border:none" class="left">
                                     <strong class="text-dark">Address</strong>
                                 </td>
                                 <td style="border:none;text-align:right" class="right"><?php echo $vlc['address']?></td>
                             </tr>
                         </tbody>
                     </table>
                 </div>
                 <br>
                 <div style="text-align: center;" >
                 <h3 style="background: #008b8b;color: white;padding: 7px;opacity: 0.6;width:100%" class="mb-0">Thanks !</h3>
                 
             </div>
         </div>
        
     </div>
 </div>
                            </body>
                        </html>