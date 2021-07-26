<?php
require_once('config.php') ;
session_start() ;
require_once('authadmin.php') ;

$sql = "SELECT * FROM `catagory` INNER JOIN product ON product.catagory_id = catagory.catagory_id where `product`.`catagory_id` = ".$_GET['id']." " ; 
$ans = $conn->query($sql);

 if($ans->num_rows > 0){
     echo "<script> 
     
     alert('ไม่สามารถลบประเภทสินค้านี้ได้เนื่องจากมีสินค้าประเภทนี้อยู่');
     location.replace('admincat.php')
     </script>" ;
 }
else {
    
    $sql_del = "DELETE FROM `catagory` WHERE `catagory`.`catagory_id` = ".$_GET['id']." " ;
    if($conn->query($sql_del) === true){
    
        echo "<script> 
     
     alert('ลบประเภทสินค้าสำเร็จ');
     location.replace('admincat.php')
     </script>" ;
 }
else {
     echo "<script> 
     
     alert('ไม่สามารถลบประเภทสินค้านี้');
     location.replace('admincat.php')
     </script>" ;
 }
    
    
    
}