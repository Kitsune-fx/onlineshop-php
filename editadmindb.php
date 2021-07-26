<?php 
session_start() ;
include('config.php') ;
require_once('authadmin.php') ;
$sql_check2 = "SELECT * FROM `member` WHERE `mem_id` LIKE '".$_POST['mem_id']."' " ;
$ans_check2 = $conn->query($sql_check2) ;
$sql_check = "SELECT * FROM `member` WHERE `mem_username` LIKE '".$_POST['mem_user']."' " ;
$ans_check = $conn->query($sql_check) ;
        

//id
if($_POST['mem_id'] == $_POST['mem_idcheck'] ){
    
    if($_POST['mem_user'] == $_POST['mem_usercheck']) {
        
      $sql = "UPDATE `member` SET `title_id` = '".$_POST['title_id']."',`mem_id` = '".$_POST['mem_id']."', `mem_username` = '".$_POST['mem_user']."', `mem_name` = '".$_POST['mem_name']."', `mem_surname` = '".$_POST['mem_surname']."', `mem_address` = '".$_POST['mem_address']."', `mem_email` = '".$_POST['mem_email']."', `mem_password` = '".$_POST['mem_password']."', `mem_tel` = '".$_POST['mem_tel']."' , `permit_id` = '".$_POST['permit_id']."' WHERE `member`.`mem_id` = '".$_POST['mem_idcheck']."';" ; 
       
 if($conn->query($sql) === true ){
        echo "<script>
        
        alert('แก้ไขข้อมูลสำเร็จ') ;
        location.replace('adminmember.php') ;
        
        </script>";
    }
    else{
        
             echo "<script>
        
        alert('แก้ไขข้อมูลล้มเหลว') ;
        location.replace('adminmember.php') ;
        
        </script>";   
        
    }     
        }
    
    //same name
    
    else {
        
        if($ans_check->num_rows > 0) {
            
            echo "<script> alert('Username นี้ถูกใช้แล้ว') ;
                    location.replace('adminmember.php') ;
                    </script>" ;
    
        }
        else{
            
         $sql = "UPDATE `member` SET `title_id` = '".$_POST['title_id']."',`mem_id` = '".$_POST['mem_id']."', `mem_username` = '".$_POST['mem_user']."', `mem_name` = '".$_POST['mem_name']."', `mem_surname` = '".$_POST['mem_surname']."', `mem_address` = '".$_POST['mem_address']."', `mem_email` = '".$_POST['mem_email']."', `mem_password` = '".$_POST['mem_password']."', `mem_tel` = '".$_POST['mem_tel']."' , `permit_id` = '".$_POST['permit_id']."' WHERE `member`.`mem_id` = '".$_POST['mem_idcheck']."';" ; 
       
 if($conn->query($sql) === true ){
        echo "<script>
        
        alert('แก้ไขข้อมูลสำเร็จ') ;
        location.replace('adminmember.php') ;
        
        </script>";
    }
    else{
        
             echo "<script>
        
        alert('แก้ไขข้อมูลล้มเหลว') ;
        location.replace('adminmember.php') ;
        
        </script>";   
        
        }   
            }    
                }
                    }

else {
    
    
    if($ans_check2->num_rows > 0){
    
    echo "<script> alert('รหัสประจำตัวประชาชนนี้ถูกใช้แล้ว') ;
                    location.replace('adminmember.php') ;
    </script>" ;
}
    
        else {
       
        if($_POST['mem_user'] == $_POST['mem_usercheck']) {
        
      $sql = "UPDATE `member` SET `title_id` = '".$_POST['title_id']."',`mem_id` = '".$_POST['mem_id']."', `mem_username` = '".$_POST['mem_user']."', `mem_name` = '".$_POST['mem_name']."', `mem_surname` = '".$_POST['mem_surname']."', `mem_address` = '".$_POST['mem_address']."', `mem_email` = '".$_POST['mem_email']."', `mem_password` = '".$_POST['mem_password']."', `mem_tel` = '".$_POST['mem_tel']."' , `permit_id` = '".$_POST['permit_id']."' WHERE `member`.`mem_id` = '".$_POST['mem_idcheck']."';" ; 
       
 if($conn->query($sql) === true ){
        echo "<script>
        
        alert('แก้ไขข้อมูลสำเร็จ') ;
        location.replace('adminmember.php') ;
        
        </script>";
    }
    else{
        
             echo "<script>
        
        alert('แก้ไขข้อมูลล้มเหลว') ;
        location.replace('adminmember.php') ;
        
        </script>";   
        
    }     
        }
    
    //same name
    
    else {
        $sql_check = "SELECT * FROM `member` WHERE `mem_username` LIKE '".$_POST['mem_user']."' " ;
        $ans_check = $conn->query($sql_check) ;
        
        if($ans_check->num_rows > 0) {
            
            echo "<script> alert('Username นี้ถูกใช้แล้ว') ;
                    location.replace('adminmember.php') ;
                    </script>" ;
    
        }
        else{
            
         $sql = "UPDATE `member` SET `title_id` = '".$_POST['title_id']."',`mem_id` = '".$_POST['mem_id']."', `mem_username` = '".$_POST['mem_user']."', `mem_name` = '".$_POST['mem_name']."', `mem_surname` = '".$_POST['mem_surname']."', `mem_address` = '".$_POST['mem_address']."', `mem_email` = '".$_POST['mem_email']."', `mem_password` = '".$_POST['mem_password']."', `mem_tel` = '".$_POST['mem_tel']."' , `permit_id` = '".$_POST['permit_id']."' WHERE `member`.`mem_id` = '".$_POST['mem_idcheck']."';" ; 
       
 if($conn->query($sql) === true ){
        echo "<script>
        
        alert('แก้ไขข้อมูลสำเร็จ') ;
        location.replace('adminmember.php') ;
        
        </script>";
    }
    else{
        
             echo "<script>
        
        alert('แก้ไขข้อมูลล้มเหลว') ;
        location.replace('adminmember.php') ;
        
        </script>" ;   
        
            }       
        }
    }
 }
}


?>