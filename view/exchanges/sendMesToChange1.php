<?php
    include "view/theme/header.php";
?>
<?php
    include "view/theme/left_menu.php";
?>
    <div id="center-content-blog" >
    <div id="table-product-show">

    <?php      
        $p1=getProductByProductId($p_id1);
        $p2=getProductByProductId($p_id2);
    ?>
    <div id="product_list" >
        <div class="title-product">Sản phẩm của Bạn</div>
        <div class="title-product"><?php echo substr( $p2["title"],  0, 27); if(strlen($p2["title"])>=27) echo "..."; ?></div>
        <div class="product_name"><?php echo substr( $p2["name"],  0, 25); if(strlen($p2["name"])>=25){echo "...";}?></div>
        <div>
            <div class="product_image"><img width="150px" height="180px" src="<?php echo $p2["image"]; ?>" /></div>
            <div class="product_info">
                <br />
                Tag: <?php echo $p2["tag"];?>
                <hr />
                Privacy: <?php echo $p2["access_level"];?>
                <hr />
                View: <?php echo $p2["view"];?>
                <hr />
                Time: <?php echo date("H:i:s", $p2["creat_time"]);?>
                <hr />
                Date: <?php echo date("d:m:Y", $p2["creat_time"]);?>
            </div>
        </div>
    </div>
    <div id="product_list" >
        <div class="title-product">Sản phẩm của đối tác</div>
        <div class="title-product"><?php echo substr( $p1["title"],  0, 27); if(strlen($p1["title"])>=27) echo "..."; ?></div>
        <div class="product_name"><?php echo substr( $p1["name"],  0, 25); if(strlen($p1["name"])>=25){echo "...";}?></div>
        <div>
            <div class="product_image"><img width="150px" height="180px" src="<?php echo $p1["image"]; ?>" /></div>
            <div class="product_info">
                <br />
                Tag: <?php echo $p1["tag"];?>
                <hr />
                Privacy: <?php echo $p1["access_level"];?>
                <hr />
                View: <?php echo $p1["view"];?>
                <hr />
                Time: <?php echo date("H:i:s", $p1["creat_time"]);?>
                <hr />
                Date: <?php echo date("d:m:Y", $p1["creat_time"]);?>
            </div>
        </div>
    </div> 
    <div style="text-align: center;">
    <br />
        <h3 class="green">Thông điệp của bạn đã được gửi. Vui lòng đợi liên lạc lại</h3>
        <form method="POST">
            <input class="btn" type="submit" name="ok" value="OK" />
        </form>
    </div>
    </div>
</div>
    <?php
    include "view/theme/right_menu.php";
    include "view/theme/footer.php";
?>