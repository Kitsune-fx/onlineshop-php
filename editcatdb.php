<?php
require_once('config.php') ;
session_start() ;
require_once('authadmin.php') ;

$sql = "UPDATE `catagory` SET `catagory_name` = '".$_POST['cat_name']."' WHERE `catagory`.`catagory_id` = ".$_POST['catagory_id'].";" ;

if($conn->query($sql) === true){
    echo "
    
    <script>
    alert('แก้ไขประเภทสินค้าสำเร็จ');
    location.replace('admincat.php');
    </script>
    ";
}
else{
    echo "
        <script>
        alert('แก้ไขประเภทสินค้าล้มเหลว') ;
        location.replace('editcat.php') ;
        </script>
        "
        ;
}


?>