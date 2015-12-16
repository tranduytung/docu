<?php
    $ex=getListDoneExchangeByUserId($_SESSION["user_id"]);
    showListDoneExchangePage($ex);
    
    function showListDoneExchangePage($ex){
        $user=getUserByid($_SESSION['user_id']);
        include "view/users/showListDoneExchange.php";
    }
    
?>