<?php
    if(checkLogined()){
        $text=$_GET['text'];
        if(processingDataToFind($text)){
            $error="";
        }
        else{
            $error="Chưa nhập từ khóa tìm kiếm";   
        }
        showResultOfFindPage($text,$error);
    }
    else {
        redirect("index.php?controller=user&action=login");
    }
    function processingDataToFind($text){
        if($text==""){
                return false;
            }
            else{
                return true;
            }
    }
    function showResultOfFindPage($text,$error){
        $user=getUserByid($_SESSION['user_id']);
        include "view/users/find_kq.php";
    }
?>