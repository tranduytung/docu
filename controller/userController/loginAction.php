<?php
        $error="";
        if(checkLogined()){
            redirect("index.php?controller=home");
        }
        if(processingDataToLogin()=="true"){
            redirect("index.php?controller=home");
        }
        if(processingDataToLogin()=="false1"){
            $error="Email và pass word không hợp lệ";
        }
        if(processingDataToLogin()=="false2"){
            $error="Email  không hợp lệ";
        }
		showLoginPage($error);
    function processingDataToLogin(){
        if (isset($_POST['ok'])) {
		   if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
		      $login_ok=checkUserLogin($_POST['email'],$_POST['password']);
              if($login_ok){
                    if(isset($_POST['remember'])){
                        setcookie("user_id",$_SESSION['user_id'],time()+60*60);
                        return "true";
                    }
                    else {
                        return "true";
                    }
              }
              else{
                return "false1";
              } 
		   }
           else {
            return "false2";
           }
		}
		
    }
    function showLoginPage($t){
        $error=$t;
        include "view/users/login.php";
    }
    
    ?>