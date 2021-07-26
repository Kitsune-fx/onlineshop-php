<?php
session_start() ;
require_once('config.php') ;
require_once('member.php');

 $sql = "INSERT INTO `cart` 
 (`cart_id`, `mem_id`, `product_id`, `amount`, `cart_status_id`) 
 VALUES (NULL, '".$_SESSION['mem_id']."', '".$_POST['product_id']."', '".$_POST['amount']."', '0');" ;

 if($conn->query($sql) === true){
     echo "<script>
     
        alert('สั่งซื้อสำเร็จ') ;
        location.replace('main.php') ;
     
     
     </script>" ;
 }
else {
     echo "<script>
     
        alert('สั่งซื้อล้มเหลว') ;
        location.replace('main.php') ;
     
     
     </script>" ;
}

?>