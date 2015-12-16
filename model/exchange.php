<?php 
    function insetExchangeOfChange($p_id1,$p_id2){
        $time=time();
        $sql="INSERT INTO exchange1(product_id1,product_id2,time)
        VALUES('$p_id1','$p_id2',$time)";
        mysql_query($sql);
    }
    function getExchangeIdByProductId($p_id1,$p_id2){
        $sql="select id from exchange1 where product_id1=$p_id1 and product_id2=$p_id2 and type=1";    
        return $query=mysql_query($sql);
    }
    function findExchangeOfChange($p_id1,$p_id2){
        $sql="select id from exchange1 where product_id1=$p_id1 and product_id2=$p_id2 and type=1";
        return $query=mysql_query($sql);
    }
    function getListExchangeByUserId1($u_id){
        $sql="select exchange1.id,exchange1.product_id1,exchange1.product_id2,exchange1.time,exchange1.type,products.user_id
        from exchange1,products where exchange1.product_id1=products.id and products.user_id=$u_id";
        return $query=mysql_query($sql);
    }
    function getListExchangeByUserId2($u_id){
        $sql="select exchange1.id,exchange1.product_id1,exchange1.product_id2,exchange1.time,exchange1.type,products.user_id
        from exchange1,products where exchange1.product_id2=products.id and products.user_id=$u_id";
        return $query=mysql_query($sql);
    }
    
    function getExchangeByExchangeId($ex_id){
        $sql="select * from exchange1 where id=$ex_id";
        $query=mysql_query($sql);
        return mysql_fetch_array($query);
    }
    function insetDoneExchange($ex_id){
        $time=time();
        $sql="INSERT INTO done_exchange1(exchange1_id,time,type)
        VALUES('$ex_id',$time,'1')";
        mysql_query($sql);
    }
    function insetCancleExchange($ex_id){
        $time=time();
        $sql="INSERT INTO done_exchange1(exchange1_id,time,type)
        VALUES('$ex_id',$time,'0')";
        mysql_query($sql);
    }
    function updateTypeOfExchange($ex_id){
        $sql="update exchange1 set type=0 where id='$ex_id'";
        $query=mysql_query($sql);
    }
    function getListDoneExchangeByUserId($u_id){
        $sql="SELECT done_exchange1.id, exchange1.product_id1, exchange1.product_id2,done_exchange1.time,done_exchange1.type FROM done_exchange1, exchange1,products WHERE done_exchange1.exchange1_id=exchange1.id and (exchange1.product_id1=products.id OR exchange1.product_id2=products.id)
         and done_exchange1.type=1 and products.user_id=$u_id";
         return $query=mysql_query($sql);
    }
    function getExchangeToCancleExchangeByProductId($p1,$p2){
        $sql="select id FROM exchange1 WHERE (exchange1.product_id1=$p1 AND exchange1.product_id2!=$p1) OR exchange1.product_id2=$p1 or exchange1.product_id1=$p2 OR (exchange1.product_id2=$p2 AND exchange1.product_id1!=$p1)";
        echo $sql;
        return $query=mysql_query($sql);
    }
    function insetExchangeCancleBecauseOtherExchageDone($ex_id){
        $time=time();
        $sql="INSERT INTO cancle_exchange(exchange_id,time,type)
        VALUES('$ex_id',$time,'0')";
        echo $sql;
        mysql_query($sql);
    }
    function getExchangeInCancleExchange(){
        $sql="SELECT * from cancle_exchange";
        return $query=mysql_query($sql);
    }
    function updateTypeOfCancleExchange($ex_id){
        $sql="update cancle_exchange set type=1 where id='$ex_id'";
        $query=mysql_query($sql);
    }
    function getListCancleExchangeByUserId($u_id){
        $sql="SELECT done_exchange1.id, exchange1.product_id1, exchange1.product_id2,done_exchange1.time,done_exchange1.type FROM done_exchange1, exchange1,products WHERE done_exchange1.exchange1_id=exchange1.id and (exchange1.product_id1=products.id OR exchange1.product_id2=products.id)
         and done_exchange1.type=0 and products.user_id=$u_id";
         return $query=mysql_query($sql);
    }
?>