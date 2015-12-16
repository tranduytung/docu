<?php 
        if(checkLogined()){
            $error="";
            $resul=processingDataToChangePass();
            if($resul=="true"){
                $error="Thay đổi passwword thành công";
            }
            elseif($resul=="false1"){
                $error="Password cũ không đúng";
            }
            elseif($resul=="false2"){
                $error="Nhập lai password không trùng nhau";
            }
            elseif($resul=="false3"){
                $error="Chưa nhập password mới";
            }
            showChangePassPage($error);
            }
        else {
            redirect("index.php?controller=user&action=login");
        }
    
    function processingDataToChangePass(){
        $user=getUserByid($_SESSION['user_id']);
        $id=$_SESSION['user_id'];
        if(isset($_POST["ok"])){
            $o_p=$_POST["old_password"];
            $n_p=$_POST["new_password"];
            $rn_p=$_POST["re_new_password"];
            if($user["password"]!=$o_p){ 
                return "false1";
            }
            elseif($n_p==""){
                return "false3";
            }
            elseif($n_p!=$rn_p){   
                return "false2";
            }
            elseif($n_p==$rn_p and $n_p!=""){
                updatePassword($n_p,$id);
                return "true";
            }
        }
        else {
            return "nothing";
        }
    }
    function showChangePassPage($t){
        $error=$t;
        $user=getUserByid($_SESSION['user_id']);
        $id=$_SESSION['user_id'];
        include "view/users/changepassword.php";
    }
?>