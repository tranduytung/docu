<?php
    session_start();
    include "config.php";
    include "function_start.php";
    include "model/user.php";
    include "model/product.php";
    include "model/notification.php";
    include "model/exchange.php";
    include "function.php";
    
    
    if(isset($_GET['controller'])&&isset($_GET['action'])){
        if(!checkLogined()&&$_GET['action']!="login"&&$_GET['action']!="register"){
            redirect("index.php?controller=user&action=login");
        }
        else{
            
            include "controller/".$_GET['controller']."Controller/".$_GET['action']."Action.php";
        }
        
    }
    elseif(isset($_GET['controller'])&&!isset($_GET['action'])){
        include "controller/".$_GET['controller']."Controller/indexAction.php";
        
    }
    else{
        redirect("index.php?controller=home");
    }
?>