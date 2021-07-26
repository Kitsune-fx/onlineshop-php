<?php
require_once('config.php') ;
session_start();
$sql = "SELECT * FROM `member` WHERE `mem_username` LIKE '".$_POST['mem_user']."' AND `mem_password` LIKE '".$_POST['mem_pwd']."' " ;
$ans = $conn->query($sql) ;
$rows = $ans->fetch_assoc() ;

if($ans->num_rows == 1){
   
    if($rows['permit_id'] == 2){
        
                    $_SESSION['mem_id'] = $rows['mem_id'] ;
                    $_SESSION['mem_user'] = $rows['mem_username'] ;
                    $_SESSION['mem_name'] = $rows['mem_name'] ;
                    $_SESSION['mem_surname'] = $rows['mem_surname'] ;
                    $_SESSION['mem_address'] = $rows['mem_address'] ;
                    $_SESSION['mem_tel'] = $rows['mem_tel'] ;
                    $_SESSION['mem_email'] = $rows['mem_email'] ;
                    $_SESSION['mem_pwd'] = $rows['mem_password'] ;
                    $_SESSION['permi_id'] = "2" ;
                    $_SESSION['title_id'] = $rows['title_id'] ;
        
        
        
        echo "<script>
         
         alert('เข้าสู่ระบบแอดมินสำเร็จ');
         location.replace('mainadmin.php') ;
         
        </script>" ;
    }
    else{
        
        $_SESSION['mem_id'] = $rows['mem_id'] ;
                     $_SESSION['mem_user'] = $rows['mem_username'] ;
                    $_SESSION['mem_name'] = $rows['mem_name'] ;
                    $_SESSION['mem_surname'] = $rows['mem_surname'] ;
                    $_SESSION['mem_address'] = $rows['mem_address'] ;
                    $_SESSION['mem_tel'] = $rows['mem_tel'] ;
                    $_SESSION['mem_email'] = $rows['mem_email'] ;
                    $_SESSION['mem_pwd'] = $rows['mem_password'] ;
                    $_SESSION['permi_id'] = "1" ;
                    $_SESSION['title_id'] = $rows['title_id'] ;
        
       echo "<script>
         
         alert('เข้าสู่ระบบสำเร็จ');
         location.replace('main.php') ;
         
        </script>" ; 
    }
    }
    else {
        
        echo "<script>
         
         alert('UsernameหรือPassword ผิด');
         location.replace('index.php') ;
         exit() ;
        </script>" ;
    }
    

?>