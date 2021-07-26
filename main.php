<?php
session_start() ;
require_once('config.php') ;
require_once('member.php');

if(isset($_POST['search'])){
    $sql = "SELECT * FROM `product` INNER JOIN catagory ON product.catagory_id = catagory.catagory_id INNER JOIN status ON status.status_id = product.status_id WHERE `product`.`product_name` LIKE '%".$_POST['search']."%' AND `product`.`status_id` = 1 " ;
}
else{
    $sql ="SELECT * FROM `product` INNER JOIN catagory ON product.catagory_id = catagory.catagory_id INNER JOIN status ON status.status_id = product.status_id WHERE `product`.`status_id` = 1  ORDER BY `product`.`catagory_id` ASC " ;
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
                echo "<span style='font-size:20px;'> ยินดีต้อนรับคุณ  ".$_SESSION['mem_user']."      " ;
                
                ?>
                <br>
                <a href="memedit.php" style="font-size:10px;" class="btn btn-warning">แก้ไขข้อมูล</a>
                <a href="logout.php" style="font-size:10px;" class="btn btn-danger">ออกจากระบบ</a>
                <span style="float:left;font-size:26px;"> ระบบขายสินค้าออนไลน์ </span>
                </div>
            <br><br><br>
                
                <div class="container" style="font-size:22px;text-align:right;">
             <a href="usercart.php" class="btn btn-success">รายการสั่งซื้อของฉัน</a><br>
                </div>
            
     <div class="container" style="font-size:22px;text-align:left;">
         
      
         <form action="main.php" method="post">
             ค้นหาสินค้า: <input type="text" style="width:40%;" placeholder="ชื่อสินค้า" name="search"><input type="submit" value="ค้นหา"  style="font-size:18px;"> <input type="reset" value="รีเซต" style="font-size:18px;">
         </form> </div>
         <br><br>
         <?php 
         $ans = $conn->query($sql) ;
         ?> 
            <center>
         <table class="table table-bordered" style="text-align:center;width:60%;font-size:22px;">
              <?php 
    
    while($rows = $ans->fetch_assoc()){
    
        echo " <tr><td><br> ชื่อสินค้า:   ".$rows['product_name']."<br> ราคา: ".$rows['product_price']. " บาท  <br><br> <img src='pic/".$rows['product_id'].".jpg' style='width:30%;height:40%;'<br><br>
        <br><a href='amount.php?id=".$rows['product_id']." ' class='btn btn-primary'>ซื้อ</a><br></td></tr> " ;
    
    
    }
    ?>
  
         </table>
         </center>
               
              
    </body>
</html>