<?php
    include "view/theme/header.php";
?>
<?php
    include "view/theme/left_menu.php";
?>
    <div id="center-content-blog" >
    <div style="float: left;">
    <div id="viewProduct-title">
        <?php
            echo "Tiêu đề: ".$product["title"];
            echo "<hr/>";
            echo "Tên sản phẩm: ".$product["name"];
        ?>
    </div>
    <div id="slide_image">
    <div class="slider">
		<ul data-title ="">
			<?php 
            echo "<li><img height='300px' width='500px' src='$product[image]'  alt='image'/></li>";
            $images = explode(' ',$product["image_more"]);
            if(count($images)>5){
            for($i=0;$i<5;$i++){
			     echo "<li><img height='300px' width='500px' src='$images[$i]'  alt='image'/></li>";
			}}
            else{
                for($i=0;$i<count($images)-1;$i++){
			     echo "<li><img height='300px' width='500px' src='$images[$i]'  alt='image'/></li>";
			}
            }?>
		</ul>
	</div>
    
    <div id="slider-nav">	
    </div>
    <script src="view/theme/asset/js/jquery-1.10.2.js"></script>
    <script src="view/theme/asset/js/gridSlide.js"></script>
    <script>
    	$(window).load(function() {
    		$('.slider').gridSlide({
    			menu: 'grid',
    			imgGrid: true,
    			title: true,
    			speed: 500
    		});
    	});
    
    </script>
    </div>
    </div>

    <div id="right-info-product">
    <?php
    ?>User: <?php if($product["user_id"]==$_SESSION["user_id"]){
                    echo "Tôi";
                }else{
                    $u=getUserByid($product["user_id"]); echo $u["fullname"];
                }?>
                <hr />
                <?php
        echo "<font class='green'>Danh Mục: </font>".$product["tag"];
        echo "<hr/>";
        echo "<font class='green'>Số lượt xem: </font>".$product["view"];
        echo "<hr/>";
        echo "<font class='green'>Ngày đăng: </font>".date("H:i - d/m/Y", $product["creat_time"]);
        echo "<hr/>";
        echo "<font class='green'>Phân quyền: </font>".$product["access_level"];
        ?>
        <div class="product_choose">
            <ul>

                        <?php if($product["user_id"]==$_SESSION["user_id"]) {?>
                        
                        <a href="<?php echo SITE_PATH;?>index.php?controller=product&action=edit&user_id=<?php echo $user["id"]; ?>&product_id=<?php echo $product["id"]; ?>"><li>Sửa</li></a>
                        <?php
                            }
                            else{ ?>
                                <a href="<?php echo SITE_PATH;?>index.php?controller=exchange&action=changeProducts&user_id=<?php echo $user["id"]; ?>&product_id=<?php echo $product["id"]; ?>"><li>Trao đổi</li></a>
                            <?php }
                        ?>
                        <?php if($product["user_id"]==$_SESSION["user_id"]) {?>
                        <a href="<?php echo SITE_PATH;?>index.php?controller=product&action=delete&user_id=<?php echo $user["id"]; ?>&product_id=<?php echo $product["id"]; ?>"><li>Xóa</li></a>
                        <?php
                            }
                            else{ ?>
                                <a href=""><li>Đánh dấu</li></a>
                            <?php }
                        ?>
                </ul>
        </div>
        <?php
    ?> 
    </div>
    <div id="show-info-VP">
    <?php
        echo "<h3 class='green'>Quy Trình Trao Đổi: </h3>".$product["change_way"];
    ?>
    </div>
    <div id="show-info-VP" >
        <?php 
            echo "<h3 class='green'>Thông tin chi tiết: </h3>";
            echo $product["info"];?>
    </div>


</div>
<?php
    include "view/theme/right_menu.php";
    include "view/theme/footer.php";
?>