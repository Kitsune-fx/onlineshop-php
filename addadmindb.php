<?php
session_start() ;
require_once('config.php') ;
require_once('authadmin.php') ;


$sql_check = "SELECT * FROM `member` WHERE `mem_id` LIKE '".$_POST['mem_id']."' " ;
$ans = $conn->query($sql_check) ;

if($ans->num_rows > 0) {
    echo "<script>
    
        alert('รหัสประจำตัวประชาชนนี้ถูกใช้แล้ว') ;
        location.replace('adminmember.php') ;
        
        </script>" ;
}

 else {
     $sql_check2 = "SELECT * FROM `member` WHERE `mem_username` LIKE '".$_POST['mem_user']."' " ;
     $ans2 = $conn->query($sql_check2) ;
     
     if($ans2->num_rows > 0){
       echo "<script>
    
        alert('Usernameนี้ถูกใช้แล้ว') ;
        location.replace('adminmember.php') ;
        exit() ;
        </script>" ;
}
        else {
            $sql = "INSERT INTO `member` (`mem_id`, `title_id`, `mem_username`, `mem_name`, `mem_surname`, `mem_address`, `mem_email`, `mem_password`, `mem_tel`, `permit_id`) VALUES ('".$_POST['mem_id']."', '".$_POST['title_id']."', '".$_POST['mem_user']."', '".$_POST['mem_nm']."', '".$_POST['mem_surnm']."', '".$_POST['mem_address']."', '".$_POST['mem_email']."', '".$_POST['mem_pwd']."', '".$_POST['mem_tel']."', '".$_POST['permit_id']."');" ;
            
                if($conn->query($sql) === true) {
                    
                    echo "<script>
                    alert('เพิ่มสมาชิกสำเร็จ') ;
                    location.replace('adminmember.php');
                    exit() ;
                    </script>" ;
}
            else {
                 echo "<script>
                    alert('เพิ่มสมาชิกล้มเหลว') ;
                    location.replace('adminmember.php');
                    exit() ;
                    </script>" ;
                
            }
                    
                }
            
            
            
        }
     
 
?>