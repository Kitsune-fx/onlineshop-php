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
        ใบเสร็จ
        </title>
    </head>
        <body>
                
            <center>
                <br>
                <h1>ใบเสร็จ</h1>
               
                <div class="container" style="text-align:left"> 
                <h4>  
                     <h3>ร้าน OTOP</h3>
                    <br> ผู้ออกใบเสร็จ: กานต์ เกตุภาค
                    <br> ที่อยู่ร้าน: อ.ลี้ ต.ลี้ จ.ลำพูน 51110<br>
                   
                    <br> ผู้ซื้อ: <?php echo $_SESSION['mem_name']."  ".$_SESSION['mem_surname']  ;?> <br>
                    ที่อยู่ผู้ซื้อ: <?php echo $_SESSION['mem_address']; ?>
                    </h4>

                    </div>
                <br>
                
                <br><br>
            
              <table class="table table-borderless" style="text-align:left;width:50%;font-size:22px;">
             <br>
             
                <?php 
                        $i = 1;
                      $sql = "SELECT * FROM `cart` INNER JOIN member ON cart.mem_id = member.mem_id INNER JOIN product ON product.product_id = cart.product_id WHERE `cart`.`cart_status_id` = 0 AND 
                      member . mem_id = ".$_SESSION['mem_id']."
                      "  ;
                        $ans = $conn->query($sql) ;
                  $total = 0 ;
                        while($rows = $ans->fetch_assoc()) {
                            
                            echo  "<tr><td> ".$i.". ".$rows['product_name']." </td><td> จำนวน: ".$rows['amount']." ชิ้น </td><td> ราคา: ".$rows['amount']* $rows['product_price']." บาท </td></tr> "
                            
                            ;
                            
                            $total = $total + ($rows['amount']*$rows['product_price']) ;
                            $i = $i+1;
                        }
                  
                  ?>
                  
                  <tr><td></td>
                      <td></td>
                      <td><h3>รวม</h3></td>
                      <td><h3><?php echo $total ; ?>   บาท</h3></td>
                  </tr>
                 
            </table>
                
                <?php
                $sql_n = "UPDATE `cart` SET `cart_status_id` = '1' WHERE `cart`.`mem_id` = ".$_SESSION['mem_id']." " ;
                
                $conn->query($sql_n) ;
                
                ?>
                
                <br><br>
       
                <br>
                </center>
    </body>
</html>