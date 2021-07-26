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
            <br><br><br>
                
                 <div class="container" style="font-size:22px;text-align:right;">
            <a href="main.php" class="btn btn-primary">กลับเมนูหลัก</a><br><br>
            </div>
                
            <center>
            
              <table class="table table-bordered" style="text-align:left;width:60%;font-size:22px;">
             <br>
                  <tr>
                      <td>ลำดับ</td>
                      <td>ชื่อสินค้า</td>
                      <td>จำนวน</td>
                        <td>ราคา</td>
                  </tr>
                <?php 
                        $i = 1;
                      $sql = "SELECT * FROM `cart` INNER JOIN member ON cart.mem_id = member.mem_id INNER JOIN product ON product.product_id = cart.product_id WHERE `cart`.`cart_status_id` = 0 AND 
                      member . mem_id = ".$_SESSION['mem_id']."
                      "  ;
                        $ans = $conn->query($sql) ;
                  $total = 0 ;
                        while($rows = $ans->fetch_assoc()) {
                            
                            echo  "<tr><td> ".$i."   </td><td> ".$rows['product_name']." </td><td> จำนวน: ".$rows['amount']." ชิ้น </td><td> ราคา: ".$rows['amount']* $rows['product_price']." บาท </td></tr> "
                            
                            ;
                            
                            $total = $total + ($rows['amount']*$rows['product_price']) ;
                            $i = $i+1;
                        }
                  
                  ?>
                  
                  <tr>
                      <td><h3>รวม</h3></td>
                      <td><h3><?php echo $total ; ?>   บาท</h3></td>
                  </tr>
                 
            </table>
                
                <br><br>
                <a href="slip.php" class="btn btn-success" target="_blank">ดำเนินการต่อ</a>
                <br>
                </center>
    </body>
</html>