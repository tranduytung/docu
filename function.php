<?php
    function checkLogined(){
    if(isset($_COOKIE['user_id'])){
        $_SESSION['user_id']=$_COOKIE['user_id'];
        setcookie("user_id", $_SESSION['user_id'],time()+60*60*24*7);
        return true;
       }
       elseif(isset($_SESSION['user_id'])){
            return true;
       }
       else false;
    }
    if(checkLogined()){
         $user=getUserByid($_SESSION['user_id']);
    }
    function redirect($url){
        header("location:".$url);
    }
    function renderProduct($t){
        $user=getUserByid($_SESSION['user_id']);        
        include "view/products/".$t.".php";
    }
    function renderUser($t){
        $user=getUserByid($_SESSION['user_id']);
        include "view/users/".$t.".php";
    }
    function renderUrlError(){
        $user=getUserByid($_SESSION['user_id']);
        include "view/error.php";
    }
    function renderHome(){
        $user=getUserByid($_SESSION['user_id']);
        include "view/home.php";
    }
    function deleteCooki(){
        session_destroy();
        setcookie("user_id",0,time());
    }
    function checkUserToShow($u_id){
        if($u_id==$_SESSION['user_id']){
            return true;
        }
        else{
            return false;
        }
    }
    function checkUserIsset($u_id){
            $user_check=getUserByid($u_id);
            if($user_check['level']==1){
                return true;
            }
            else{
                return false;
            }
    }
    
    function checkActionInController($actionText){
        $p1= new userController();
        if($p1->$actionText()==$actionText){
            return true;
        }
        else return false;
    }
?>