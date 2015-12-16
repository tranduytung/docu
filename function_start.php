<?php
    $conect_db= mysql_connect(DB_SEVER,DB_USER,DB_PASS)
    or die("Không kết nối được CSDL");
    $select_db=mysql_select_db(DB_NAME,$conect_db)
    or die("Không chọn được CSDL Blog");
    
?>