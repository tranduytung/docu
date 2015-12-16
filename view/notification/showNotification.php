<?php
    include "view/theme/header.php";
?>
<?php
    include "view/theme/left_menu.php";
?>
    <div id="center-content-blog" >
        <div id="notifi-show">
            <a class='green size-20' href='<?php echo SITE_PATH;?>index.php?controller=user&action=showListExchangeConsider'>
            <div id="notifi-show-info">
                <div>
                    <img style="border: 1px solid green; float: left;" width="50px" height="50px" src="<?php echo $user['image']; ?> " />
                </div>
                <?php
                $ex_u=getListExchangeByUserId1($_SESSION["user_id"]);
                    $num=0;
                    while($listExchangeCon = mysql_fetch_array($ex_u)){
                        if($listExchangeCon["type"]==1){
                    //$u=getUserByProductId($listExchangeU["product_id2"]);
                    $num+=1;
                    }
                    }
                    echo "<div style='height: 32px; padding: 10px 10px 10px 70px;'>Bạn có ".($num)." giao dịch cần duyệt</div>";
                ?>
            </div></a>
            <a class='green size-20' href='<?php echo SITE_PATH;?>index.php?controller=user&action=showListDoneExchange'>
            <div id="notifi-show-info">
                <div>
                    <img style="border: 1px solid green; float: left;" width="50px" height="50px" src="<?php echo $user['image']; ?> " />
                </div>
                <?php
                    $ex=getListDoneExchangeByUserId($_SESSION["user_id"]);
                    $num1=0;
                    while($listExchangeDone = mysql_fetch_array($ex)){
                        if($listExchangeDone["type"]==1){
                    //$u=getUserByProductId($listExchangeU["product_id2"]);
                    $num1+=1;
                    }
                    }
                    echo "<div style='height: 32px; padding: 10px 10px 10px 70px;'>Bạn có ".($num1)." giao dịch đã trao đổi thành công</div>";
                ?>
            </div></a>
            <a class='green size-20' href='<?php echo SITE_PATH;?>index.php?controller=user&action=showListCancleExchange'>
            <div id="notifi-show-info">
                <div>
                    <img style="border: 1px solid green; float: left;" width="50px" height="50px" src="<?php echo $user['image']; ?> " />
                </div>
                <?php
                    $ex=getListCancleExchangeByUserId($_SESSION["user_id"]);
                    $num2=0;
                    while($listExchangeCancle = mysql_fetch_array($ex)){
                        if($listExchangeCancle["type"]==0){
                    //$u=getUserByProductId($listExchangeU["product_id2"]);
                    $num2+=1;
                    }
                    }
                    echo "<div style='height: 32px; padding: 10px 10px 10px 70px;'>Bạn có ".($num2)." giao dịch không trao đổi thành công</div>";
                ?>
            </div></a>
        </div>
    </div>
    <?php
    include "view/theme/right_menu.php";
    include "view/theme/footer.php";
?>