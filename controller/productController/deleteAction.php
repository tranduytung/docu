<?php
    $u_id=$_GET["user_id"];
    $p_id=$_GET["product_id"];
    $user=getUserByid($_SESSION['user_id']);
    if(checkUserToDeleteProduct($u_id,$p_id)){
        delProduct($p_id);
        redirect("index.php?controller=user&action=showListProducts&user_id=$u_id");
    }
    else{
        redirect("index.php?controller=user&action=showListProducts&user_id=$u_id");
    } 

    function checkUserToDeleteProduct($u_id,$p_id){
        $user=getUserByid($_SESSION['user_id']);
        $product=getProductByProductId($p_id);
        if($user["id"]==$u_id && $u_id==$product["user_id"]){
            return true;
        }
        else return false;
    }
?>