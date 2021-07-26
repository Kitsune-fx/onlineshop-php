<?php 
session_start() ;
session_destroy() ;

echo "<script> 

alert('ออกจากระบบสำเร็จ') ;
location.replace('index.php') ;

</script>" ;
?>