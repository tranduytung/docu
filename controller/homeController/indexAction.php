<?php
    if(checkLogined()){
        if($user['level']== 0){
        deleteCooki();
        redirect("index.php");
        //include "view/user/login.php";
    }
    else{
        renderHome();
        }}
    else{
        redirect("index.php?controller=user&action=login");
    }    
?>