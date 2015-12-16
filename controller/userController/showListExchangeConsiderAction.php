<?php

    $ex_u=getListExchangeByUserId1($_SESSION["user_id"]);
    //$ex_u_2=getListExchangeByUserId2($_SESSION["user_id"]);
    showListExchangeConsiderPage($ex_u);
    function showListExchangeConsiderPage($ex_u){
        $user=getUserByid($_SESSION['user_id']);
        include "view/users/viewListExchangeConsider.php";
    }
?>