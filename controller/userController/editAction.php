<?php
    if(checkLogined()){ 
            $error="";
            $resul=processingDataToEditUser();
            if($resul=="true"){
                $error="Sửa thông tin thành công";  
            }
            if($resul=="false1"){
                $error="Vui lòng nhập họ tên";
            }
            if($resul=="false2"){
                $error="Vui lòng nhập đúng số điện thoại từ 10 số hoặc 11 số";
            }
            showEditUserPage($error);
        }
        else {
            redirect("index.php?controller=user&action=login");
        }
    
    function showEditUserPage($t){
        $error=$t;
        $user=getUserByid($_SESSION['user_id']);
        $id=$_SESSION['user_id'];
        include "view/users/edit.php";
    }
    function processingDataToEditUser(){
        $user=getUserByid($_SESSION['user_id']);
        if(isset($_POST['ok'])){
            if($_POST['fullname']==""){
                return "false1";
            }
            elseif(is_numeric($_POST['phonenumber'])==false||999999999>=$_POST['phonenumber']){
                return "false2";
            }
            
            else{
                $user['fullname']=$_POST['fullname'];
                $user['phonenumber']=$_POST['phonenumber'];
                $user['hometown']=$_POST['hometown'];
                $user['address']=$_POST['address'];
                $user['sex']=$_POST['sex'];
                $user['birthday']=$_POST['bday'];
                $user['info']=$_POST['info'];
                updateUser($user);
                return "true";  
            }        
        }
    }
?>