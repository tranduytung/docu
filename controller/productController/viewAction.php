<?php
    $u_id=$_GET["user_id"];
    $p_id=$_GET["product_id"];
    if(checkProductToView($p_id)){
        $product= getProductByProductId($p_id);
        $view=$product['view'];
        $view=addViewProduct($view);
        updateViewById($view,$product["id"]);
        showViewProductPage($p_id);
    }
    else{
            renderUrlError();
    }
    function checkProductToView($p_id){
        $product= getProductByProductId($p_id);
        if($product!=""){
            return true;
        }
        else return false;
    }
    function addViewProduct($view){
        return $view=$view+1;
    }
    function showViewProductPage($p_id){
        $user=getUserByid($_SESSION['user_id']);
        $product= getProductByProductId($p_id);
        include "view/products/viewProduct.php";
    }
?>