<?php
    $ex_id=$_GET["id"];
    $error="";
    if(checkIssetProductInExchangeWait($ex_id)=="deleteProduct2"){
        $error="Bạn đã xóa sản phẩm. Vui lòng hủy trao đổi";
    }
    elseif(checkIssetProductInExchangeWait($ex_id)=="deleteProduct1"){
        $error="Đối tác đã xóa sản phẩm. Vui lòng hủy trao đổi";
    }
    elseif(checkIssetProductInExchangeWait($ex_id)=="deleteBothProducts"){
        $error="Không tồn tại cả 2 sản phẩm. Vui lòng hủy trao đổi";
    }
    if(processingDataToCancleExhangeWait()){
        setDataTOCancleExchangeWait($ex_id);
        redirect("index.php?controller=home");
    }
    viewExchangeWaitPage($ex_id,$error);
    
    function processingDataToCancleExhangeWait(){
        if(isset($_POST["cancle"])){
            return true;
        }
        else return false;
    }
    function setDataTOCancleExchangeWait($ex_id){
        insetCancleExchange($ex_id);
        updateTypeOfExchange($ex_id);
    }
    function checkIssetProductInExchangeWait($ex_id){
        $ex=getExchangeByExchangeId($ex_id);
        $p1=getProductByProductId($ex["product_id1"]);
        $p2=getProductByProductId($ex["product_id2"]);
        if($p1["id"]==""){
            return "deleteProduct1";
        }
        elseif($p2["id"]==""){
            return "deleteProduct2";
        }
        elseif($p1["id"]==""&& $p2["id"]=="" ){
            return "deleteBothProducts";
        }
        else return "full";
    }
    
    function viewExchangeWaitPage($ex_id,$error){
        $user=getUserByid($_SESSION['user_id']);
        $ex=getExchangeByExchangeId($ex_id);
        $p1=getProductByProductId($ex["product_id1"]);
        $p2=getProductByProductId($ex["product_id2"]);
        include "view/exchanges/viewExchangeWait.php";
    }
?>