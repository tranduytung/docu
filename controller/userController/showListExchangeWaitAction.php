<?php
    $ex_u=getListExchangeByUserId2($_SESSION["user_id"]);
    showListExchangeWaitPage($ex_u);
    
    function showListExchangeWaitPage($ex_u){
        $user=getUserByid($_SESSION['user_id']);
        include "view/users/viewListExchangeWait.php";
    }
?>