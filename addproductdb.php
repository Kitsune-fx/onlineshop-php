<?php
require_once('config.php');
session_start() ;
require_once('authadmin.php') ;
?>
<?php
$sql = "SELECT * FROM `product` WHERE `product_name` LIKE '".$_POST['pro_name']."'  " ;
$ans = $conn->query($sql) ;
if($ans->num_rows > 0) {
    echo "<script> 
    
    alert('มีสินค้านี้อยู่แล้ว') ;
    location.replace('adminproduct.php') ;
    
    </script>" ;
}

else{
    $sql_in = "INSERT INTO `product` (`product_id`, `product_name`, `product_price`, `catagory_id`, `status_id`) VALUES (NULL, '".$_POST['pro_name']."', '".$_POST['pro_price']."', '".$_POST['catagory_id']."', '".$_POST['status_id']."');" ;
    if($conn->query($sql_in) === true) {
       echo "<script>
       
       alert('เพิ่มสินค้าสำเร็จ') ;
       location.replace('adminproduct.php') ;
       
       </script>" ; 
        
    }

else{
    echo "<script>
       
       alert('เพิ่มสินค้าล้มเหลว') ;
       location.replace('adminproduct.php') ;
       
       </script>" ; 
}
    
    
    
    
}

?>