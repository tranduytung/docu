<?php
     if(checkLogined()){
            $resul=processingDataToEditUserImage();
            if($resul=="true"){
                $error="Thay đổi ảnh thành công";
            }
            if($resul=="false1"){
                $error="Bạn chưa chọn file ảnh";
            }
            if($resul=="false2"){
                $error="";
            }
            showEditUserImagePage($error);
        }
        else {
            redirect("index.php?controller=user&action=login");
        }
    
    function processingDataToEditUserImage(){
        $user=getUserByid($_SESSION['user_id']);
        if(isset($_POST['ok'])){
            if($_FILES['image']['name']!=""){
               $img_name="images/".($_FILES['image']['name'].time()).".png";
               move_uploaded_file($_FILES['image']['tmp_name'],$img_name);
               $user['image']=$img_name;
               updateImages($user);
               return "true";
            }
            else{
                return "false1";
            }
            }
            else return "false2";
    }
    function showEditUserImagePage($t){
        $user=getUserByid($_SESSION['user_id']);
        $id=$_SESSION["user_id"];
        $error=$t;
        include "view/users/edit_img.php";
    }
?>