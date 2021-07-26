<?php  
require_once('config.php') ;
session_start() ;
require_once('authadmin.php') ;

$sql = "INSERT INTO `catagory` (`catagory_id`, `catagory_name`) VALUES (NULL, '".$_POST['cat_name']."');" ;

if($conn->query($sql) === true){
    echo "
    
    <script>
    alert('เพิ่มประเภทสินค้าสำเร็จ');
    location.replace('admincat.php');
    </script>
    ";
}
else{
    echo "
        <script>
        alert('เพิ่มประเภทสินค้าล้มเหลว') ;
        location.replace('addcat.php') ;
        </script>
        "
        ;
}


?>