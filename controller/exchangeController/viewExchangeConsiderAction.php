<?php
    $ex_id=$_GET["id"];
    $error="";
    $ex=getExchangeByExchangeId($ex_id);
    $p1=getProductByProductId($ex["product_id1"]);
    $p2=getProductByProductId($ex["product_id2"]);
    if(!checkIssetProductByProductId($p1["id"])&&checkIssetProductByProductId($p2["id"])){
        $error="Bạn đã xóa sản phẩm. Vui lòng hủy trao đổi";
    }
    elseif(checkIssetProductByProductId($p1["id"])&&!checkIssetProductByProductId($p2["id"])){
        $error="Đối tác đã xóa sản phẩm. Vui lòng hủy trao đổi";
    }
    elseif(checkIssetProductByProductId($p1["id"])&&!checkIssetProductByProductId($p2["id"])){
        $error="Không tồn tại cả 2 sản phẩm. Vui lòng hủy trao đổi";
    }
    elseif(checkExchangeIdInCancleExchange($ex_id)){
        $error="Sản phẩm đã trao đổi trong giao dịch khác. Vui lòng hủy trao đổi";
    }
    $resul=processingDataToDoneOrCancldeChangeConsider();
    if($resul=="ok"){
        setDataOfExchangeConsiderDone($ex_id);
        setDatacheckIssetExchangeByProductId($p1["id"],$p2["id"]);
        redirect("index.php?controller=exchange&action=acceptExchangeConsider&id=$ex_id");
    }
    elseif($resul=="cancle"){
        setDataOfExchangeConsiderCancle($ex_id);
        redirect("index.php?controller=home");
    }
    
    function checkExchangeIdInCancleExchange($ex_id){
        $list_ex_id=getExchangeInCancleExchange();
        while($list_ex_id_array=mysql_fetch_array($list_ex_id)){
            if($list_ex_id_array["exchange_id"]==$ex_id){
                return true;
            }
        }
    }
    function checkIssetExchangeByProductId($p_id1,$p_id2){
        $list_ex= getExchangeToCancleExchangeByProductId($p_id1,$p_id2);
        if(mysql_num_rows($list_ex)>0){
            return true;
        }
        else return false;
    }
    function setDatacheckIssetExchangeByProductId($p_id1,$p_id2){
        if(checkIssetExchangeByProductId($p_id1,$p_id2)){
            
            $list_ex= getExchangeToCancleExchangeByProductId($p_id1,$p_id2);
            while($list_ex_array=mysql_fetch_array($list_ex)){
                insetExchangeCancleBecauseOtherExchageDone($list_ex_array["id"]);
                
            }
            
        }
    }
    //kiểm tra xem sp đã trao đổi chưa. nếu rồi thì cho vào bảng cancle_exchange type=1(chưa xem).
    //tin nhắn sp đã trao đổi. vui lòng hủy.
    //ấn hủy cho type trong exchange =0 để không hiện đã xem
    
    
    function setDataOfExchangeConsiderDone($ex_id){
        insetDoneExchange($ex_id);
        updateTypeOfExchange($ex_id);
    }
    function setDataOfExchangeConsiderCancle($ex_id){
        insetCancleExchange($ex_id);
        updateTypeOfExchange($ex_id);
        updateTypeOfCancleExchange($ex_id);
    }
    
    
    
    showExchangeConsiderPage($ex_id,$error);
    
    function showExchangeConsiderPage($ex_id,$error){
        $user=getUserByid($_SESSION['user_id']);
        include "view/exchanges/viewExchangeConsider.php";
    }
    function processingDataToDoneOrCancldeChangeConsider(){
        if(isset($_POST["ok"])){
            return "ok";
        }
        else if(isset($_POST["cancle"])){
            return "cancle";
        }
        
    }
    
?>