<?php
    if(!isset($_GET['p_name'])&&!isset($_GET['p_tag'])){
        findProducts();
    }
    elseif(isset($_GET['p_name'])&&isset($_GET['p_tag'])){
        showkqFindProductsPage();
    }
    elseif(isset($_GET['p_name'])&&!isset($_GET['p_tag'])){
        showkqFindProductsByNamePage();
    }
    elseif(!isset($_GET['p_name'])&&isset($_GET['p_tag'])){
        showkqFindProductsByTagPage();
    }
        
    function findProducts(){
        $error="";
        $resul=processingDataToFindProducts();
        if($resul=="false"){
            $error="Vui lòng nhập dữ liệu cho 1 trong 2 trường";
        }
        if($resul=="findByName"){
            redirect("index.php?controller=find&action=findProducts&p_name=$_POST[product_name]");
        }
        if($resul=="findByTag"){
            redirect("index.php?controller=find&action=findProducts&p_tag=$_POST[product_tag]");
        }
        if($resul=="findByNameAndTag"){
            redirect("index.php?controller=find&action=findProducts&p_name=$_POST[product_name]&p_tag=$_POST[product_tag]");
        }
        showFindProductPage($error);
    }    
    function processingDataToFindProducts(){
        if(isset($_POST["ok"])){
            if($_POST["product_name"]=="" && $_POST["product_tag"]=="Chọn Danh Mục"){
                return "false";
                //$error="Vui lòng nhập dữ liệu cho 1 trong 2 trường";
            }
            elseif($_POST["product_name"]!="" && $_POST["product_tag"]=="Chọn Danh Mục"){
                return "findByName";
                //redirect("index.php?controller=product&action=find_kq&p_name=$_POST[product_name]&p_tag=$_POST[product_tag]");
            }
            elseif($_POST["product_name"]=="" && $_POST["product_tag"]!="Chọn Danh Mục"){
                return "findByTag";
                //redirect("index.php?controller=product&action=find_kq&p_name=$_POST[product_name]&p_tag=$_POST[product_tag]");
            }
            else{
                return "findByNameAndTag";
                //redirect("index.php?controller=product&action=find_kq&p_name=$_POST[product_name]&p_tag=$_POST[product_tag]");
            }
        }
    }
    function showFindProductPage($error){
        $user=getUserByid($_SESSION['user_id']);
        include "view/find/findProducts.php";
    }
    
    function showkqFindProductsPage(){
        $user=getUserByid($_SESSION['user_id']);
        $p_name=$_GET["p_name"];
        $p_tag=$_GET["p_tag"];
        $p=findProductsByNameAndTag($p_name,$p_tag);
        include "view/find/find_kq.php";
    }
    function showkqFindProductsByNamePage(){
        $user=getUserByid($_SESSION['user_id']);
        $p_name=$_GET["p_name"];
        $p=findProductsByName($p_name);
        include "view/find/find_kq.php";
    }
    function showkqFindProductsByTagPage(){
        $user=getUserByid($_SESSION['user_id']);
        $p_tag=$_GET["p_tag"];
        $p=findProductsByTag($p_tag);
        include "view/find/find_kq.php";
    }

?>