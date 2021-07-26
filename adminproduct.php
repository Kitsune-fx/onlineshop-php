<?php
session_start() ;
require_once('config.php') ;
require_once('authadmin.php');
$i = 1 ;
if(isset($_POST['search'])) {
    
    $sql = "SELECT * FROM `product` INNER JOIN catagory ON product.catagory_id = catagory.catagory_id INNER JOIN status ON product.status_id = status.status_id WHERE `product`.`product_name` LIKE '%".$_POST['search']."%' ORDER BY `catagory`.`catagory_id` ASC " ;
 
    }
else{
    $sql = "SELECT * FROM `product` INNER JOIN catagory ON product.catagory_id = catagory.catagory_id INNER JOIN status ON product.status_id = status.status_id ORDER BY `catagory`.`catagory_id` ASC " ;
}

?>   
<!DOCTYPE HTML>
<html>
    <meta charset="utf-8">
    <head>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
            <title>
        สินค้า OTOP 
        </title>
    </head>
        <body>
            <div class="container" style="width:100%;height:ๅ0%;margin:auto;padding:1em;text-align:right;top:0px;positon:fixed;background-color:#996515;color:white;">  
                <?php 
                echo "<span style='font-size:20px;'> ยินดีต้อนรับแอดมิน  ".$_SESSION['mem_user']."      " ;
                
                ?>
                <br>
                <a href="logout.php" style="font-size:10px;" class="btn btn-danger">ออกจากระบบ</a>
                <span style="float:left;font-size:26px;"> ระบบขายสินค้าออนไลน์ </span>
                </div>
            <br><br><br>
     
     <div class="container" style="font-size:26px;text-align:center;">
         
         <span style="font-size:36px;">แก้ไขข้อมูลสินค้า</span> <br><span style="float:left;font-size:20px;">
         <a href="mainadmin.php">กลับเมนูหลัก</a></span>  
         <span style="float:right;font-size:20px;">
         <a href="admincat.php">แก้ไขประเภทสินค้า</a>          
         <a href="addproduct.php">เพิ่มสินค้า</a></span> <br>
         
         <div class="container" style="width:60%;text-align:center;">
             <form action="adminproduct.php" method="post">
             ค้นหา:   <input type="text" style="width:40%;" name="search">  <input type="submit" style="font-size:16px;" value="ค้นหา">
             <br><br>
             </form>
         </div>
         <table class="table table-bordered" style="text-align:center;">
         <tr >
                     <th style="text-align:center;">ลำดับ</th>
                     <th style="text-align:center;">ประเภทสินค้า</th>
                     <th style="text-align:center;">ชื่อสินค้า</th>
                     <th style="text-align:center;">ราคาสินค้า</th>
                     <th style="text-align:center;">สถานะ</th>
                     <th style="text-align:center;">แก้ไข</th>
                     <th style="text-align:center;">ลบ</th>  
             
             </tr>

             <?php 
             
             $ans = $conn->query($sql) ;
             while($rows = $ans->fetch_assoc()) {
              echo  "<tr><td>".$i."  </td><td> ".$rows['catagory_name']."</td><td>  ".$rows['product_name']." </td><td>" .$rows['product_price']." บาท </td><td>".$rows['status_name']."</td><td> <a style='float:center;' class='btn btn-warning' href='editproduct.php?id=".$rows['product_id']." '>แก้ไข</a>  </td><td> <a style='float:center;' class='btn btn-danger' onclick='return del()' href='delproduct.php?id=".$rows['product_id']." '>ลบ</a> </td></tr>" 
                  ; 
                 
      
                 $i = $i +1 ;
             }
             
             ?>
             
             
   
             
             
         </table>
                </div>
            
            <script>
            function del() {
                var go = false;
                if(confirm('ยืนยันการลบ')){
                    go = true ;
                }
            
                return go ;
            }
                
            </script>
    </body>
</html>