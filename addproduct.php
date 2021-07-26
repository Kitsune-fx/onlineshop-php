<?php
session_start() ;
require_once('config.php') ;
require_once('authadmin.php');
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
            <br><br><br><br><br><br>
     
     <div class="container" style="font-size:26px;text-align:center;">
         
         <span style="font-size:36px;">เพิ่มสินค้า</span><br><br>
        
            <div class="container" style="width:80%;float:left;">
         <form action="addproductdb.php" method="post" >
        
        ชื่อสินค้า: <input type="text" style="width:50%;" placeholder="ไข่ไก่" name="pro_name"> <br><br>
        ประเภท: <select name="catagory_id" style="width:50%;"><?php 
             $sql_cat="SELECT * FROM `catagory`" ;
             $ans = $conn->query($sql_cat) ;
             while($rows = $ans->fetch_assoc()){
                 
                 echo "<option value=".$rows['catagory_id']." >".$rows['catagory_name']. "</option>"  ;
                 
             }
             
             ?>     
             </select>
             <br><br>ราคา: <input type="number" placeholder="100" name="pro_price" style="width:50%;">
             <br><br>
              สถานะ: <select name="status_id" style="width:50%;" ><?php 
                $sql_sta=" SELECT * FROM `status` " ;
                $ans_sta = $conn->query($sql_sta) ;
                while($rows_sta = $ans_sta->fetch_assoc()){
                 
                 echo "<option value=".$rows_sta['status_id']." >".$rows_sta['status_name']. "</option>"  ;
                
                }
             
             
             ?>
             </select>
            <br><br><br> <input type="submit" value="เพิ่ม" class="btn btn-success" style="font-size:24px;">
             <a href="adminproduct.php" style="font-size:24px;" class="btn btn-danger">กลับ</a>
             
         </form>
            </div>
         
                </div>
                
    </body>
</html>