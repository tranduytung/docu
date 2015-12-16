<?php
    if(checkLogined()){   
            $error="";
            $resul=processingDataToBlock();
            if($resul=="true"){
                blockUser($_SESSION['user_id']);
                redirect("index.php?controller=user&action=logout");
            }
            if($resul=="false"){
                $error="password không đúng";
            }
            if($resul=="nothing"){
                $error="";
            }
            showBlockPage($error); 
        }
        else {
            redirect("index.php?controller=user&action=login");
        }
    function processingDataToBlock(){
        $user=getUserByid($_SESSION['user_id']);
        if(isset($_POST['ok'])){
            if($_POST['password']==$user['password']){
                return "true";
            }
            else{
                return "false";
            }
        }
        else "nothing";
    }
    function showBlockPage($t){
        $error=$t;
        $user=getUserByid($_SESSION['user_id']);
        include "view/users/block.php";
    }
?>