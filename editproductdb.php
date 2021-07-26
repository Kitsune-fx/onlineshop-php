<?php
require_once('config.php');
session_start() ;
require_once('authadmin.php') ;
?>
<?php

$sql_ch = "SELECT * FROM `product` WHERE `product_id` = ".$_POST['product_id']." " ;
$ans_ch = $conn->query($sql_ch) ;
$rows_ch = $ans_ch->fetch_assoc() ;

if($rows_ch['product_name'] == $_POST['product_name']){
    $sql = "UPDATE `product` SET `product_name` = '".$_POST['product_name']."', `product_price` = '".$_POST['pro_price']."', `catagory_id` = '".$_POST['catagory_id']."', `status_id` = '".$_POST['status_id']."' WHERE `product`.`product_id` = ".$_POST['product_id'].";" ;
    
    if($conn->query($sql) === true){
        
        echo "<script>
       
       alert('แก้ไขสินค้าสำเร็จ') ;
       location.replace('adminproduct.php') ;
       
       </script>" ; 
        
    }
    
    else {
        echo "<script>
       
       alert('แก้ไขสินค้าล้มเหลว') ;
       location.replace('adminproduct.php') ;
       
       </script>" ; 
        
    }
    
}

else{
    
    $sql_n = "SELECT * FROM `product` WHERE `product_name` LIKE '".$_POST['product_name']."' " ;
    $ans_n = $conn->query($sql_n) ;
    
    if($ans_n->num_rows > 0){
         echo "<script>
       
       alert('แก้ไขสินค้าล้มเหลวเนื่องจากมีสืนค้าชื่อซ้ำ') ;
       location.replace('adminproduct.php') ;
       
       </script>" ; 
    }

    else {
        $sql = "UPDATE `product` SET `product_name` = '".$_POST['product_name']."', `product_price` = '".$_POST['pro_price']."', `catagory_id` = '".$_POST['catagory_id']."', `status_id` = '".$_POST['status_id']."' WHERE `product`.`product_id` = ".$_POST['product_id'].";" ;
    
    if($conn->query($sql) === true){
        
        echo "<script>
       
       alert('แก้ไขสินค้าสำเร็จ') ;
       location.replace('adminproduct.php') ;
       
       </script>" ; 
        
    }
    
    else {
        echo "<script>
       
       alert('แก้ไขสินค้าล้มเหลว') ;
       location.replace('adminproduct.php') ;
       
       </script>" ; 
        
    }
        
        
    }
    
}
?>