<?php
    include "view/theme/header.php";
?>
<?php
    include "view/theme/left_menu.php";
?>
    <div id="center-content-blog" >
    <div id="table-product-show">

    <?php
        if(!checkProductById($u_id)){
            echo "<h3>Người dùng chưa đăng sản phẩm</h3>";
        }
        else{
        $p=getProductsByUserId($u_id);
        while($product = mysql_fetch_array($p)){
    ?>
    <div id="product_list" >
        <div class="title-product"><?php echo substr( $product["title"],  0, 27); if(strlen($product["title"])>=27) echo "..."; ?></div>
        <div class="product_name"><?php echo substr( $product["name"],  0, 25); if(strlen($product["name"])>=25){echo "...";}?></div>
        <div>
            <div class="product_image"><img width="150px" height="180px" src="<?php echo $product["image"]; ?>" /></div>
            <div class="product_info">
                <br />
                Tag: <?php echo $product["tag"];?>
                <hr />
                Privacy: <?php echo $product["access_level"];?>
                <hr />
                View: <?php echo $product["view"];?>
                <hr />
                Time: <?php echo date("H:i:s", $product["creat_time"]);?>
                <hr />
                Date: <?php echo date("d:m:Y", $product["creat_time"]);?>
            </div>
            <div class="product_option">
                <ul>
                        <a href="<?php echo SITE_PATH;?>index.php?controller=product&action=view&user_id=<?php echo $u_id; ?>&product_id=<?php echo $product["id"]; ?> "><li>Xem</li></a>
                        <?php if($u_id==$user["id"]) { ?>
                        <a href="<?php echo SITE_PATH;?>index.php?controller=product&action=edit&user_id=<?php echo $user["id"]; ?>&product_id=<?php echo $product["id"]; ?>"><li>Sửa</li></a>
                        <?php
                            }
                            else{ ?>
                                <a href=""><li>Trao đổi</li></a>
                            <?php }
                        ?>
                        <?php if($u_id==$user["id"]) {?>
                        <a href="<?php echo SITE_PATH;?>index.php?controller=product&action=delete&user_id=<?php echo $user["id"]; ?>&product_id=<?php echo $product["id"]; ?>"><li>Xóa</li></a>
                        <?php
                            }
                            else{ ?>
                                <a href="<?php echo SITE_PATH;?>index.php?controller=product&action=change&user_id=<?php echo $user["id"]; ?>&product_id=<?php echo $product["id"]; ?>"><li>Đánh dấu</li></a>
                            <?php }
                        ?>
                </ul>
            </div>
        </div>
    </div>
    <?php
    }
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