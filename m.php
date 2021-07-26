<?php
session_start() ;
require_once('config.php') ;
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
                echo $_SESSION['mem_user'] ;
                
                ?>
                <a href="register.php" style="font-size:20px;" class="btn btn-primary">ออกจากระบบ</a>
                <span style="float:left;font-size:26px;"> ระบบขายสินค้าออนไลน์ </span>
                </div>
            <br><br><br><br><br><br>
     
     <div class="container" style="font-size:26px;text-align:center;">
         
        <form action="logincheck.php" method="post" style="width:300px;margin:auto;">
            Username:<input type="text" required name="mem_username" class="form-control">
           <br> Password:<input type="password" required name="mem_password" class="form-control">
            <br><input type="submit" class="btn btn-primary" value="เข้าสู่ระบบ">
            <input type="reset" class="btn btn-danger" value="ยกเลิก">
        
         </form>
         
                </div>
                
    </body>
</html>