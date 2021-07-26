<?php 
session_start() ;
include('config.php') ;
require_once('member.php') ;


if($_POST['mem_user'] == $_SESSION['mem_user']){
    
     $sql = "UPDATE `member` SET `title_id` = '".$_POST['title_id']."', `mem_username` = '".$_POST['mem_user']."', `mem_name` = '".$_POST['mem_name']."', `mem_surname` = '".$_POST['mem_surname']."', `mem_address` = '".$_POST['mem_address']."', `mem_email` = '".$_POST['mem_email']."', `mem_password` = '".$_POST['mem_password']."', `mem_tel` = '".$_POST['mem_tel']."' WHERE `member`.`mem_id` = '".$_POST['mem_id']."';" ;
    
    if($conn->query($sql) === true ){
        echo "<script>
        
        alert('แก้ไขข้อมูลสำเร็จ') ;
        location.replace('main.php') ;
        
        </script>";
    }
    else{
        
             echo "<script>
        
        alert('แก้ไขข้อมูลล้มเหลว') ;
        location.replace('main.php') ;
        
        </script>";   
        
    }
    
}


$sql_check = "SELECT * FROM `member` WHERE `mem_username` LIKE '".$_POST['mem_user']."' " ;
$ans_check = $conn->query($sql_check);

if($ans_check->num_rows > 0){
    
    echo "<script> alert('Username นี้ถูกใช้แล้ว') ;
                    location.replace('main.php') ;
    </script>" ;
}

else{
    
    $sql = "UPDATE `member` SET `title_id` = '".$_POST['title_id']."', `mem_username` = '".$_POST['mem_user']."', `mem_name` = '".$_POST['mem_name']."', `mem_surname` = '".$_POST['mem_surname']."', `mem_address` = '".$_POST['memaddress']."', `mem_email` = '".$_POST['mem_email']."', `mem_password` = '".$_POST['mem_password']."', `mem_tel` = '".$_POST['mem_tel']."' WHERE `member`.`mem_id` = '".$_POST['mem_id']."';" ;
    
    if($conn->query($sql) === true ){
        echo "<script>
        
        alert('แก้ไขข้อมูลสำเร็จ') ;
        location.replace('main.php') ;
        
        </script>";
    }
    else{
        
             echo "<script>
        
        alert('แก้ไขข้อมูลล้มเหลว') ;
        location.replace('main.php') ;
        
        </script>";   
        
    } 
   
    
}

?>