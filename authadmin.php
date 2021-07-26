<?php

if(isset($_SESSION['mem_id'])) {
    //มี
    
    if($_SESSION['permi_id'] == 2){
        
    }
    else{
         echo 
        "<script>
         alert('คุณไม่มีสิทธิเข้าถึงระบบนี้') ;
         location.replace('index.php') ;
        </script>"
        
        ;
        
    }
    
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