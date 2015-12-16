<?php
    function insetNotificationOfChangeWait($change_id){
        $time=time();
        $sql="INSERT INTO notification(exchange1_id,type,time)
        VALUES('$change_id','wait',$time)";
        mysql_query($sql);
    }
    function getNotificationOfChangeByUserId($u_id2){
        $sql="select * from notification as noti,exchange1 as ex ,products as p where 
        noti.id_change = ex.id and ex.product_id1 = p.id and ex.type = 1 and p.user_id= $u_id2";
        return mysql_query($sql);
    }
    
?>