<?php
    include "view/theme/header.php";
?>
<?php
    include "view/theme/left_menu.php";
?>
    <div id="center-content-blog" >
        <div id="table-div">
            
            <table id="edit-info" class="content-table_find">
    </table>
            <div id="exchange_view">
                <div id="product_list" >
                    <?php
                        $ex=getExchangeByExchangeId($ex_id);
                        $p1=getProductByProductId($ex["product_id1"]);
                        $p2=getProductByProductId($ex["product_id2"]);
                    ?>
                    <div class="title-product">Sản phẩm của bạn</div>
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
                        <a class="green"  style="text-align: center;" href="<?php echo SITE_PATH;?>index.php?controller=product&action=view&user_id=<?php echo $user["id"]; ?>&product_id=<?php echo $p1["id"]; ?>">
                            <div class="product_view">Xem chi tiết</div>
                        </a>
                    </div>
                </div>
                <div id="product_list" >
                    <div class="title-product">Sản phẩm của đối tác</div>
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
                        <a class="green"  style="text-align: center;" href="<?php echo SITE_PATH;?>index.php?controller=product&action=view&user_id=<?php echo $user["id"]; ?>&product_id=<?php echo $p2["id"]; ?>">
                            <div class="product_view">Xem chi tiết</div>
                        </a>
                    </div>
                </div>
                <div style="text-align: center;"> 
                    <h3  class="green">Bạn đã đồng ý thực hiện giao dịch</h3>
                    <form method="POST">
                        <input class="btn" type="submit" name="ok" value="OK" />
                    </form>
                </div>
            </div>    
        </div>

    </div>
    <?php
    include "view/theme/right_menu.php";
    ?>
    <?php
    include "view/theme/footer.php";
?>