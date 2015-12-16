<?php
    $u_id=$_GET["user_id"];
        if(checkUserToShow($u_id)){
            showCurrenUserProductPage();
        }
        else {
            showProductByUserIdPage($u_id);
        }
    function showProductByUserIdPage($u_id){
         $user=getUserByid($_SESSION['user_id']);
         include "view/users/showProducts.php";
    }
         
    function showCurrenUserProductPage() {
        $user=getUserByid($_SESSION['user_id']);
        $u_id=$user["id"];
        include "view/users/showProducts.php";
    }
    
?>