<?php
session_start() ;
require_once('config.php') ;
require_once('authadmin.php') ;

$sql = "DELETE FROM `member` WHERE `member`.`mem_id` = '".$_GET['id']."' " ;

if($conn->query($sql) === true){
    

echo "<script> 
alert('ลบข้อมูลสำเร็จ') ;
 location.replace('adminmember.php') ;

</script>" ;
    }
else {
  echo "<script> 
 alert('ลบข้อมูลล้มเหลว') ;
 location.replace('adminmember.php') ;
</script>"
;      
}
?>