<?php
session_start() ;
require_once('config.php') ;
require_once('member.php') ;

$sql = "DELETE FROM `member` WHERE `member`.`mem_id` = '".$_SESSION['mem_id']."' " ;

if($conn->query($sql) === true){
    

echo "<script> 
alert('ลบข้อมูลสำเร็จ') ;
 location.replace('index.php') ;

</script>" ;
    }
else {
  echo "<script> 
 alert('ลบข้อมูลล้มเหลว') ;
 location.replace('memedit.php') ;
</script>"
;      
}
?>