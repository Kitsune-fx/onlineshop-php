<?php
session_start() ;
require_once('config.php') ;
require_once('authadmin.php');

$sql_edit = "SELECT * FROM `member` WHERE `mem_id` LIKE '".$_GET['id']."' ";
                     $ans_edit = $conn->query($sql_edit) ;
                     $rows_edit = $ans_edit->fetch_assoc() ;
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
     
     <div class="container" style="font-size:26px;text-align:left;">
         
      <legend> <span style="text-align:left;font-size:32px;">
                <div class="container">
                    แก้ไขข้อมูลของคุณ  <?php echo $rows_edit['mem_username'];?>  
                </div>
            </span></legend>
             <div class="container" style="font-size:25px;">
                 <form action="editadmindb.php" method="post">  
                 <br> คำนำหน้า:  <select name="title_id">
                           <?php 
                      $sql = "SELECT * FROM `title` " ;
                      $ans = $conn->query($sql) ;
                     
                     while($rows = $ans->fetch_assoc()){
                         if($rows_edit['title_id'] == $rows['title_id']){
                             echo "<option value='".$rows['title_id']."' selected>".$rows['title_name']."</option> " ;
                         }
                         else {
                             echo "<option value='".$rows['title_id']."'>".$rows['title_name']."</option> " ;
                         }
                     }
                     ?>
                    
                 </select>
                 <br><br>
                     <?php
                     
                     ?>
                   รหัสประจำตัวประชาชน:<input type="text" class="form-control" style="width:50%;" name="mem_id"
                    value = "<?php echo $rows_edit['mem_id'];?>" ><br>
                     
                   Username: <input type="text" class="form-control" style="width:50%;" name="mem_user" maxlength="20" value = "<?php echo $rows_edit['mem_username'];?>" minlength="3"><br>
                   Password : <input type="text" class="form-control" style="width:50%;" name="mem_password" maxlength="20" minlength="8" value = "<?php echo $rows_edit['mem_password'];?>" ><br>
                   Firstname :<input type="text" class="form-control" style="width:50%;" name="mem_name" maxlength="20"
                    value = "<?php echo $rows_edit['mem_name'];?>"><br>
                   Surname : <input type="text" class="form-control" style="width:50%;" name="mem_surname" maxlength="20" value = "<?php echo $rows_edit['mem_surname'];?>"><br>
                   Address : <input type="text" class="form-control" style="width:50%;" name="mem_address" maxlength="40" value = "<?php echo $rows_edit['mem_address'];?>"><br>
                   Tel : <input type="text" class="form-control" style="width:50%;" name="mem_tel" maxlength="10"
                    minlength="10" maxlength="10" value = "<?php echo $rows_edit['mem_tel']?>"><br>
                   Email : <input type="email" class="form-control" style="width:50%;" name="mem_email" maxlength="50" value = "<?php echo $rows_edit['mem_email']?>"><br>
                     <input type="hidden" name="mem_usercheck" value="<?php echo $rows_edit['mem_username'] ;?>">
                     <input type="hidden" name="mem_idcheck" value="<?php echo $rows_edit['mem_id'] ;?>">
                    
                     สถานะ: <select name="permit_id"><?php 
                     $sql_per = "SELECT * FROM `permit` " ;
                     $ans_per = $conn->query($sql_per) ;
                     
                                              
                    while($rows_per = $ans_per->fetch_assoc() ){
                         if($rows_edit['permit_id'] == $rows_per['permit_id']){
                             echo "<option value='".$rows_per['permit_id']."' selected>".$rows_per['permit_name']."</option> " ;
                         }
                         else {
                             echo "<option value='".$rows_per['permit_id']."'>".$rows_per['permit_name']."</option> " ;
                         }
                     
                                              }
                     ?> </select>
                     <br><br>
                     
                    <input type="submit" class="btn btn-success" value="แก้ไข">
                    <a href="adminmember.php" class="btn btn-danger">กลับสู่เมนูหลัก</a> 
                     
                   </form>
                    
                 </div>
                <br><br><br>
            
         
                </div>
                
                      
    </body>
</html>