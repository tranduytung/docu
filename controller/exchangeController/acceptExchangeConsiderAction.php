<?php
    $ex_id=$_GET["id"];
    
    if(processingDataToDoneChangeConsider()){
        redirect("index.php?controller=home");
    }
    showAcceptExchangeConsiderPage($ex_id);
    function showAcceptExchangeConsiderPage($ex_id){
        $user=getUserByid($_SESSION['user_id']);
        include "view/exchanges/acceptExchangeConsider.php";
    }
    function processingDataToDoneChangeConsider(){
        if(isset($_POST["ok"])){
            return true;
        }
        else return false;
    }
?>