<?php
require_once('config.php') ;
session_start() ;

$sql_check = "SELECT * FROM `member` WHERE `mem_id` LIKE '".$_POST['mem_id']."' " ;
$ans = $conn->query($sql_check) ;

if($ans->num_rows > 0) {
    echo "<script>
    
        alert('รหัสประจำตัวประชาชนนี้ถูกใช้แล้ว') ;
        location.replace('register.php') ;
        
        </script>" ;
}

 else {
     $sql_check2 = "SELECT * FROM `member` WHERE `mem_username` LIKE '".$_POST['mem_user']."' " ;
     $ans2 = $conn->query($sql_check2) ;
     
     if($ans2->num_rows > 0){
       echo "<script>
    
        alert('Usernameนี้ถูกใช้แล้ว') ;
        location.replace('register.php') ;
        exit() ;
        </script>" ;
}
        else {
            $sql = "INSERT INTO `member` (`mem_id`, `title_id`, `mem_username`, `mem_name`, `mem_surname`, `mem_address`, `mem_email`, `mem_password`, `mem_tel`, `permit_id`) VALUES ('".$_POST['mem_id']."', '".$_POST['title_id']."', '".$_POST['mem_user']."', '".$_POST['mem_nm']."', '".$_POST['mem_surnm']."', '".$_POST['mem_address']."', '".$_POST['mem_email']."', '".$_POST['mem_pwd']."', '".$_POST['mem_tel']."', '1');" ;
            
                if($conn->query($sql) === true) {
                    
                    //login success
                    $_SESSION['mem_id'] = $_POST['mem_id'] ;
                     $_SESSION['mem_user'] = $_POST['mem_user'] ;
                    $_SESSION['mem_name'] = $_POST['mem_nm'] ;
                    $_SESSION['mem_surname'] = $_POST['mem_surnm'] ;
                    $_SESSION['mem_address'] = $_POST['mem_address'] ;
                    $_SESSION['mem_tel'] = $_POST['mem_tel'] ;
                    $_SESSION['mem_email'] = $_POST['mem_email'] ;
                    $_SESSION['mem_pwd'] = $_POST['mem_pwd'] ;
                    $_SESSION['permi_id'] = "1" ;
                    $_SESSION['title_id'] = $_POST['title_id'] ;
         
                    
                    
                    
                    echo "<script>
                    alert('สมัครสมาชิกสำเร็จ') ;
                    location.replace('main.php');
                    exit() ;
                    </script>" ;
}
            else {
                 echo "<script>
                    alert('สมัครสมาชิกล้มเหลว') ;
                    location.replace('register.php');
                    exit() ;
                    </script>" ;
                
            }
                    
                }
            
            
            
        }
     
 
?>