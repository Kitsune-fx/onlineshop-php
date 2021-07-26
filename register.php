<?php
require_once('config.php');
$sql = "SELECT * FROM `title` " ;
$ans = $conn->query($sql) ;
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
                
                <span style="float:left;font-size:26px;"> ระบบขายสินค้าออนไลน์ </span>
                </div>
            <br>
  <br>
           <legend> <span style="text-align:left;font-size:32px;">
                <div class="container">
                    สมัครสมาชิก  
                </div>
            </span></legend>
             <div class="container" style="font-size:25px;">
                 <form action="registerdb.php" method="post">  
                 <br> คำนำหน้า:  <select name="title_id">
                           <?php
                        while($rows= $ans->fetch_array(MYSQLI_ASSOC)){
                            echo "<option value='".$rows['title_id']."'> ".$rows['title_name']."</option>" ;
                        
                     }
                     ?>
                    
                 </select>
                 <br><br>
                   รหัสประจำตัวประชาชน:<input type="text" class="form-control" style="width:50%;" name="mem_id" maxlength="13" required placeholder="sample" minlength="13"><br>
                     
                   Username: <input type="text" class="form-control" style="width:50%;" name="mem_user" maxlength="20" required placeholder="sample" minlength="3"><br>
                   Password : <input type="text" class="form-control" style="width:50%;" name="mem_pwd" maxlength="20" minlength="8" required placeholder="8-20ตัว"><br>
                   Firstname :<input type="text" class="form-control" style="width:50%;" name="mem_nm" maxlength="20"
                    required placeholder="กานต์"><br>
                   Surname : <input type="text" class="form-control" style="width:50%;" name="mem_surnm" maxlength="20" placeholder="เกตุภาค"><br>
                   Address : <input type="text" class="form-control" style="width:50%;" name="mem_address" maxlength="40" placeholder="101/ ม.4 ต.ลี้ จ.ลำพูน"><br>
                   Tel : <input type="text" class="form-control" style="width:50%;" name="mem_tel" maxlength="10"
                    minlength="10" maxlength="10" required placeholder="0850342946"><br>
                   Email : <input type="email" class="form-control" style="width:50%;" name="mem_email" maxlength="50" required placeholder="sample@gmail.com"><br>
                    <input type="submit" class="btn btn-success" value="สมัครสมาชิก">
                    <a href="index.php" class="btn btn-danger">กลับสู่เมนูหลัก</a>
                   </form>
                 </div>
                <br><br><br>
            
    </body>
    
    
    
</html>