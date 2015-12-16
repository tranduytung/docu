<?php
    include "view/theme/header.php";
?>
<?php
    include "view/theme/left_menu.php";
?>
    <div id="center-content-blog" >
    <div id="table-product-show">

    <?php
        if(mysql_fetch_array($ex_u_1)=="" and mysql_fetch_array($ex_u_2)=="") echo "Không tìm được kết quả";
        while($listExchangeU1 = mysql_fetch_array($ex_u_1)){
    ?>
    <div id="product_list" >
        <?php echo $listExchangeU1["product_id1"];
        echo $listExchangeU1["product_id2"];
            $u=getUserByProductId($listExchangeU1["product_id2"]);
            echo $u["fullname"]."đã gửi cho bạn 1 yêu cầu";
        ?>
    </div>
    <?php
    }
    //$product = mysql_fetch_array($p);
    //if($product=="") echo "<h3>Người dùng chưa đăng sản phẩm</h3>";
    ?>
    </div>
</div>
    <?php
    include "view/theme/right_menu.php";
    include "view/theme/footer.php";
?>