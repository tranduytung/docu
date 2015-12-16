<?php

       $product1=$_GET['product_id'];
       //$product2=$_POST["p_select"];
       $result=processingDataToSelectProduct();
       //$result=98;
       //redirect("index.php?controller=product&action=showchange1&product_id1=$product1&product_id2=$result");
       if($result!=""&$result!="back"){
            //$error="";
            //echo $result;
            //redirect("index.php?controller=product&action=showchange1&product_id1=$product1&product_id2=$result");
            redirect("index.php?controller=exchange&action=showProductChanged&product_id1=$product1&product_id2=$result");
            
       }
       else{
            $error="Vui lòng chọn sản phẩm";
       }
       showSelectProductToChangePage($error,$product1);
    
    function processingDataToSelectProduct(){
        if(isset($_POST["ok_next"])){
            if(isset($_POST["p_select"])){
                //echo $_POST["p_select"];
                return $_POST["p_select"];
            }
            else{
                return "";
                }
            //redirect("index.php?controller=product&action=showchange1&product_id1=$product1&product_id2=$p_select_id");
       }
       else{
            return "back";
       }
    }
    function showSelectProductToChangePage($error,$product1){
        $user=getUserByid($_SESSION['user_id']);
        $p1=getProductByProductId($product1);
        include "view/exchanges/selectProductToChange.php";
    }

    ?>