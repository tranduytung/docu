<?php
    $u_id=$_GET["user_id"];
    $p_id=$_GET["product_id"];
    $user=getUserByid($_SESSION['user_id']);
    if(checkUserToEditProduct($u_id,$p_id)){
        $error="";
        $resul=processingDataToEditProduct($p_id);
        if($resul=="true"){
            $error="Sửa sản phẩm thành công";
        }
        if($resul=="false1"){
            $error="Bạn chưa nhập tên sản phẩm";
        }
        if($resul=="false2"){
            $error="Bạn chưa nhập danh mục sản phẩm";
        }
        if($resul=="false3"){
            $error="Chưa thêm thông tin sản phẩm";
        }
        if($resul=="false4"){
            $error="Chưa thêm cách trao đổi sản phẩm";
        }
        if($resul=="false5"){
            $error="Chưa phân quyền sản phẩm";
        }
        showEditProductPage($error,$p_id);
        }
        else{
            renderUrlError();
        }
        
    function checkUserToEditProduct($u_id,$p_id){
        $product=getProductByProductId($p_id);
        if($u_id==$_SESSION['user_id']&& $u_id==$product["user_id"]){
            return true;
        }
        else return false;
    }
    function processingDataToEditProduct($p_id){
        $product=getProductByProductId($p_id);
        if(isset($_POST["ok"])){
            if($_POST['product_name']==""){
                return "false1";
               
            }
            elseif($_POST['product_tag']=="Chọn Danh Mục"){
                return "false2";
                
            }
            elseif($_FILES['product_image']['name']!=""){
                $img_name="images/".($_FILES['product_image']['name'].time()).".png";
                move_uploaded_file($_FILES['product_image']['tmp_name'],$img_name);  
            }
            elseif($_POST["product_info"]==""){
                return "false3";  
            }
            elseif($_POST["product_change_way"]==""){
                return "false4";
                
            }
            elseif($_POST["product_level"]==""){
                return "false5";
                
            }
            else{
                $img_name= $product["image"];
                $product["title"]=$_POST["product_title"];
                $product["name"]=$_POST['product_name'];
                $product["tag"]=$_POST['product_tag'];
                $product["image"]=$img_name;
                $product["info"]=$_POST["product_info"];
                $product["change_way"]=$_POST["product_change_way"];
                $product["access_level"]=$_POST["product_level"];
                updateProduct($product);
                return "true";
            }
            }
    }
    function showEditProductPage($t,$p_id){
        $error=$t;
        $product= getProductByProductId($p_id);
        $user=getUserByid($_SESSION['user_id']);
        include "view/products/editProduct.php";
    }
?>