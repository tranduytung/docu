<?php
        $error="";
        $resul=processingDataToNewProduct();
        if($resul=="false0"){
             $error="Bạn chưa nhập title sản phẩm";
        }
        if($resul=="false1"){
             $error="Bạn chưa nhập tên sản phẩm";
        }
        if($resul=="false2"){
             $error="Bạn chưa nhập danh mục sản phẩm";
        }
        if($resul=="false3"){
             $error="Chưa thêm ảnh sản phẩm";
        }
        if($resul=="false4"){
             $error="Chưa thêm thông tin sản phẩm";
        }
        if($resul=="false5"){
             $error="Chưa thêm cách trao đổi sản phẩm";
        }
        if($resul=="false6"){
             $error="Chưa phân quyền sản phẩm";
        }
        if($resul=="false7"){
             $error="Chưa thêm ảnh sản phẩm";
        }
        if($resul=="true"){
             $error="Thêm sản phẩm thành công";
        }   
        showNewProductPage($error);
    
    function processingDataToNewProduct(){
        $user=getUserByid($_SESSION['user_id']);
        if(isset($_POST["ok"])){
                if($_POST['product_title']==""){
                return "false0";
                }
                elseif($_POST['product_name']==""){
                return "false1";
                //$error="Bạn chưa nhập tên sản phẩm";
            }
            elseif($_POST['product_tag']=="Chọn Danh Mục"){
                return "false2";
                //$error="Bạn chưa nhập danh mục sản phẩm";
            }
            elseif($_FILES['product_image']['name']==""){
                return "false3";
                //$error="Chưa thêm ảnh sản phẩm";
            }
            elseif($_POST["product_info"]==""){
                return "false4";
                //$error="Chưa thêm thông tin sản phẩm";
            }
            elseif($_POST["product_change_way"]==""){
                return "false5";
                //$error="Chưa thêm cách trao đổi sản phẩm";
            }
            elseif($_POST["product_level"]==""){
                return "false6";
                //$error="Chưa phân quyền sản phẩm";
            }
            elseif(!isset($_FILES['product_image_more'])){
                return "false7";
                //$error="Chưa thêm ảnh sản phẩm";
            }
            else{
                If ($_FILES){
                    $name_file_full="";
                    foreach ($_FILES ['product_image_more']['name'] as $Key => $Name) {
                        $EFileName ="images/".($_FILES['product_image_more']['name'][$Key].time()).".png";
                    move_uploaded_file($_FILES['product_image_more']['tmp_name'][$Key], $EFileName);
                    $name_file_full=$EFileName." ".$name_file_full;
                    }
                }
                $img_name="images/".($_FILES['product_image']['name'].time()).".png";
                move_uploaded_file($_FILES['product_image']['tmp_name'],$img_name);
                insertProduct($user["id"],$_POST['product_title'],$_POST['product_name'],$_POST['product_tag'],
                $img_name,$name_file_full,$_POST["product_info"],$_POST["product_change_way"],$_POST["product_level"]);
                return "true";
                //$error="Thêm sản phẩm thành công";
            }
            }
    }
    function showNewProductPage($t){
        $error=$t;
        $user=getUserByid($_SESSION['user_id']); 
        include "view/products/newProduct.php";
    }
?>