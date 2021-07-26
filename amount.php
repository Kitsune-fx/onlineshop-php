<?php
session_start() ;
require_once('config.php') ;
require_once('member.php');

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
                echo "<span style='font-size:20px;'> ยินดีต้อนรับคุณ  ".$_SESSION['mem_user']."      " ;
                
                ?>
                <br>
                <a href="memedit.php" style="font-size:10px;" class="btn btn-warning">แก้ไขข้อมูล</a>
                <a href="logout.php" style="font-size:10px;" class="btn btn-danger">ออกจากระบบ</a>
                <span style="float:left;font-size:26px;"> ระบบขายสินค้าออนไลน์ </span>
                </div>
            <br>
     
     <div class="container" style="font-size:22px;text-align:right;">
            <a href="main.php" class="btn btn-primary">กลับเมนูหลัก</a><br>
            </div>
            <div class="container" style="width:75%;text-align:center;">
         <?php 
              $sql = "SELECT * FROM `product` WHERE `product_id` = ".$_GET['id']." " ; 
            $ans = $conn->query($sql) ;
            $rows = $ans->fetch_assoc() ;
            
            ?>
              
            <form action="amountdb.php" method="post">
               <h2> ท่านต้องการสั่งซื้อ</h2>  <div style="font-size:22px;"><?php echo $rows['product_name']?> </div>
                ราคา : <?php echo $rows['product_price'] ; ?>  บาท <br>
               <img src="pic/<?php echo $rows['product_id'];?>.jpg" style="width:30%;height:30%;">
                <br> <input type="hidden" name="product_id" value="<?php echo $rows['product_id']; ?>">
                <h5>จำนวนสินค้า:</h5>  <input type="number" value="1" name="amount" min="1">
                <br><br>
                <input type="submit" class="btn btn-success" value="ยืนยัน" onclick="return userconfirm()">
            </form>
            </div>
            
            <script>
                function userconfirm() {
             var go = false ;
             
                if(confirm("ยืนยันการสั่งซื้อสินค้า")){
                    go = true ;
                }
                
                return go ;
            
                }
            </script>
            
    </body>
</html>