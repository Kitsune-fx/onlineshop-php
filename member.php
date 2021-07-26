<?php

if(isset($_SESSION['mem_id'])) {
    //มี
    
}
else{
    echo 
        "<script>
         alert('กรุณาเข้าสู่ระบบหรือลงทะเบียน') ;
         location.replace('index.php') ;
        </script>"
        
        ;
}

?>