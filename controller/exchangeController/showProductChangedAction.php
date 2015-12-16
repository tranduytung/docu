<?php   
        $p_id1=$_GET["product_id1"];
        $p_id2=$_GET["product_id2"];
        $error="";
        $resul=processingDataToBachOrNext();
        if($resul=="next"){
            redirect("index.php?controller=exchange&action=sendMessToChange&product_id1=$p_id1&product_id2=$p_id2");
        }
        if($resul=="back"){
            redirect("index.php?controller=exchange&action=selectProductToChange&product_id=$p_id1");
        }
        if($resul=="error"){
            $error="Giao dịch này đã tồn tại";
        }
        showProdustInChangePage($p_id1,$p_id2,$error);
        
    function processingDataToBachOrNext(){
        $p_id1=$_GET["product_id1"];
        $p_id2=$_GET["product_id2"];
        if(isset($_POST["next"])){
            if(!checkIssetExchange($p_id1,$p_id2)){
                insetExchangeOfChange($p_id1,$p_id2);
                $change_id= mysql_fetch_array(getExchangeIdByProductId($p_id1,$p_id2));
                insetNotificationOfChangeWait($change_id['id']);
                return "next";
                //redirect("index.php?controller=product&action=meschange1&product_id1=$p_id1&product_id2=$p_id2");
            }
            else return "error";
            
        }
        if(isset($_POST["back"])){
            return "back";
            //redirect("index.php?controller=product&action=change1&product_id=$p_id1");
        }
    }
    function checkIssetExchange($p_id1,$p_id2){
        $exchange=mysql_fetch_array(findExchangeOfChange($p_id1,$p_id2));
        if($exchange!=""){
            return true;
        }
        else return false;
    }
    
    
    function showProdustInChangePage($p_id1,$p_id2,$error){
        $user=getUserByid($_SESSION['user_id']);
        include "view/exchanges/showProductInChanged.php";
    }
?>