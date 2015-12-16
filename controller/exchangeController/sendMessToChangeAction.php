 <?php
        
        $p_id1=$_GET["product_id1"];
        $p_id2=$_GET["product_id2"];
        if(processingDataToDoneChange1()){
           redirect("index.php?controller=home"); 
        }
        sendMessToChange1Page($p_id1,$p_id2);
    function processingDataToDoneChange1(){
        if(isset($_POST["ok"])){
            //redirect("index.php?controller=home");
            return true;
        }
        else return false;
    }
    function sendMessToChange1Page($p_id1,$p_id2){
        $user=getUserByid($_SESSION['user_id']);
        include "view/exchanges/sendMesToChange1.php";
    }
    ?>