<?php

        $error="";
        if(checkLogined()){
            redirect("index.php");
        }
        if(processingDataToRegister()=="true"){
            insertUser($_POST['fullname'],$_POST['email'],$_POST['password'],$_POST['phonenumber']);
            redirect("index.php?controller=home");
        }
        if(processingDataToRegister()=="false1"){
            $error="Gmail đã đăng kí";
        }
        if(processingDataToRegister()=="false2"){
            $error="Nhập sai số điện thoại";
        }
        if(processingDataToRegister()=="false3"){
            $error="Passwword không trùng nhau";
        }
        if(processingDataToRegister()=="false4"){
            $error="Email không hợp lệ";
        }
        showRegisterPage($error);
    
    function processingDataToRegister(){
        if(isset($_POST['ok'])){
            if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
                if($_POST['password']==$_POST['repassword']){
                    if(is_numeric($_POST['phonenumber'])){
                        if(checkUser($_POST['email'])){   
                            return "true";
                        }
                        else{
                            return "false1";
                        }
                    }
                    else{
                        return "false2";
                    }
                }
                else{
                    return "false3"; 
                }
            }
          else {
            return "false4";  
        }
        }
    }
    function showRegisterPage($t){
        $error=$t;
        include "view/users/register.php";
    }
    ?>