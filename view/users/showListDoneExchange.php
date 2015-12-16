<?php
    include "view/theme/header.php";
?>
<?php
    include "view/theme/left_menu.php";
?>
    <div id="center-content-blog" >
        
        
            <div class="title-table">
                <h3>Các trao đổi đã hoàn thành</h3>
            </div>
            
                <?php
                
                if(mysql_num_rows($ex)==0){
                    echo "<h3>Không có giao dịch nào trong mục này<h3>";
                }
                while($listExchange = mysql_fetch_array($ex)){
                $p1=getProductByProductId($listExchange["product_id1"]);
                $p2=getProductByProductId($listExchange["product_id2"]);
                $u=getUserByProductId($listExchange["product_id2"]);
                
                ?>
                <?php
                    //echo "<a class='green' href='index.php?controller=exchange&action=viewExchangeDone&id=".$listExchange['id'];
                ?>
                <div id="product_done">
                    <div id="title_exchange_done">
                        <?php
                            echo "<div class='green'>Bạn và ".$u['fullname']." đã trao đổi thành công</div>";
                            echo "<hr>Thời gian đồng ý: ".date("H:i - d/m/Y", $listExchange["time"]);
                        ?>
                    </div>
                    <div id="info_product_done">
                        <div class=" size-20 center"><a class="green" href="<?php echo SITE_PATH;?>index.php?controller=product&action=view&user_id=<?php echo $p1["user_id"]; ?>&product_id=<?php echo $p1["id"]; ?> ">Sản phẩm của bạn</a> </div>
                        <hr />
                        <div id="img_product_done" ><img width="77px" height="77px" src="<?php echo $p1["image"]; ?>" /></div>
                        <div id="name_title_done">
                            <div id="title_product_done">Title: <?php echo substr( $p1["title"],  0, 27); if(strlen($p1["title"])>=27) echo "..."; ?></div>
                            <hr />
                            <div id="title_product_done">Name: <?php echo substr( $p1["name"],  0, 27); if(strlen($p1["name"])>=27) echo "..."; ?></div>
                        </div>
                    </div>
                    <div id="info_product_done">
                        <div class=" size-20 center"><a class="green" href="<?php echo SITE_PATH;?>index.php?controller=product&action=view&user_id=<?php echo $p2["user_id"]; ?>&product_id=<?php echo $p2["id"]; ?> ">Sản phẩm của đối tác</a> </div>
                        <hr />
                        <div id="img_product_done" ><img width="77px" height="77px" src="<?php echo $p2["image"]; ?>" /></div>
                        <div id="name_title_done">
                            <div id="title_product_done">Title: <?php echo substr( $p2["title"],  0, 27); if(strlen($p2["title"])>=27) echo "..."; ?></div>
                            <hr />
                            <div id="title_product_done">Name: <?php echo substr( $p2["name"],  0, 27); if(strlen($p2["name"])>=27) echo "..."; ?></div>
                        </div>
                    </div>
                </div>
                
            
       <?php
       }
       ?>
        
    </div>
    <?php
    //include "view/theme/right_menu.php";
    include "view/theme/footer.php";
?>