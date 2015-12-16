<?php
    
    if(checkLogined()){
        if(isset($_GET['id'])){
        $u_id=$_GET['id'];
        if(checkUserByID($u_id)){
        
        if(checkUserToShow($u_id)){
            showCurrenUserHomepage($u_id);
        }
        else{
            if(checkUserIsset($u_id)){
                showUserHomepageById($u_id);
            }
            else{
                renderUrlError();
            }              
        }
        }
        else{
            renderUrlError();
        }
        }
        else { 
            redirect("index.php?controller=home&action=viewHomepage&id=$user[id]");
        }
        }
    else{
        redirect("index.php?controller=user&action=login");
    }
    function showCurrenUserHomepage($u_id){
        $user=getUserByid($_SESSION['user_id']);
        $id=$u_id;
        include "view/users/homepage.php";
    }
    function showUserHomepageById($u_id){
        $user=getUserByid($_SESSION['user_id']);
        $id=$u_id;
        include "view/users/homepage_other.php";
    }
?>