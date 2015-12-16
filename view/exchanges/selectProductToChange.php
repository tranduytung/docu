<?php
    include "view/theme/header.php";
?>
<?php
    include "view/theme/left_menu.php";
?>
<form method="POST">
<div id="center-content-blog" >
    <div id="table-product-show">
    <p class="size-20 red">Bạn chỉ có thể chọn các sản phẩm được thiết lập cho mọi người xem. Nếu muốn trao đổi bằng các sản phẩm private. Vui lòng sửa đổi trong Sản phẩm đã đăng</p>
    <?php
        if(!checkProductById($_SESSION['user_id'])){
            echo "<h3>Người dùng chưa đăng sản phẩm</h3>";
        }
        else{
            if(isset($error)){
                echo "<h3 style='text-align: center;'>".$error."</h3>";
            }
        ?>
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
    <div id="product_list" >
        <div class="title-product">Chọn 1 trong các sản phẩm của bạn</div>
    </div>
        <div id="btn-select-PTC" >
            <input class="btn" type="submit" name="ok_next" value="Bước tiếp theo" />
        </div>
        <?php
        $p=getProductsByUserId($_SESSION['user_id']);
        while($product = mysql_fetch_array($p)){
    ?>
    <?php if($product['access_level']=="Mọi người") {?>
        <div id="product_select">
            <div id="radio_select_product">
                <input  type="radio" name="p_select" value="<?php echo $product["id"];?>" />
            </div>
            <div id="info_product_select">
                <div id="img_product_select" ><img width="77px" height="77px" src="<?php echo $product["image"]; ?>" /></div>
                <div id="name_title">
                    <div id="title_product_select">Title: <?php echo substr( $product["title"],  0, 27); if(strlen($product["title"])>=27) echo "..."; ?></div>
                    <hr />
                    <div id="title_product_select">Name: <?php echo substr( $product["name"],  0, 27); if(strlen($product["name"])>=27) echo "..."; ?></div>
                </div>
            </div>
        </div>
                    
        
    <?php
    }
    }
    }
    
    ?>
    </div>
</div>

    </form>
<?php
    include "view/theme/right_menu.php";
    ?>
    
    <?php  
    include "view/theme/footer.php";
?>
</form>