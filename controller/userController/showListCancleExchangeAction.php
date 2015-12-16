<?php
    $ex=getListCancleExchangeByUserId($_SESSION["user_id"]);
    showListCancleExchangePage($ex);
    
    function showListCancleExchangePage($ex){
        $user=getUserByid($_SESSION['user_id']);
        include "view/users/showListCancleExchange.php";
    }
    
?>