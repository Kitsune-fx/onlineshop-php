<?php
session_start() ;
require_once('config.php') ;
require_once('authadmin.php');
$i = 1 ;
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
         
         <span style="font-size:36px;">แก้ไขประเภทสินค้า</span> <br><span style="float:left;font-size:20px;">
         <a href="adminproduct.php">กลับ</a></span>  
         <span style="float:right;font-size:20px;">     
         <a href="addcat.php">เพิ่มประเภทสินค้า</a></span> <br>
         <br>
         <table class="table table-bordered" style="text-align:center;">
         <tr >
                     <th style="text-align:center;">ลำดับ</th>
                     <th style="text-align:center;">ชื่อประเภทสินค้า</th>
                     <th style="text-align:center;">แก้ไข</th>
                     <th style="text-align:center;">ลบ</th>  
             
             </tr>
             
            <?php
              $sql = "SELECT * FROM `catagory` ORDER BY `catagory`.`catagory_id` ASC " ;
              $ans = $conn->query($sql) ;
                
              while($rows = $ans->fetch_assoc()){
                  
                  echo "<tr><td>".$i."</td><td> ".$rows['catagory_name']." </td><td> <a style='float:center;' class='btn btn-warning' href='editcat.php?id=".$rows['catagory_id']." '>แก้ไข</a>  </td><td> <a style='float:center;' class='btn btn-danger' onclick='return userconfirm()' href='delcat.php?id=".$rows['catagory_id']." '>ลบ</a> </td></tr>"  ;
                  
                 $i = $i+1; 
              }
             ?>
             
         </table>
                </div>
            
            <script>
            function userconfirm(){
          var go = false;
          if(confirm('ยืนยันการลบ')){
              go = true ;
          }
      return go ;
            }
                
            
            
            </script>
    </body>
</html>