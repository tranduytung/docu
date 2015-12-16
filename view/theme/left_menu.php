<div id="left-menu" >
    <div style="text-align: center;">
        <a style="border-bottom: 2px solid green;" class="green size-25" href="<?php echo SITE_PATH;?>index.php?controller=home&action=viewHomepage">      
            <?php
                if(isset($user)){
                echo substr( $user["fullname"],  0, 20);
                if(strlen($user["fullname"])>=20){
                        echo "...";
                       }
            }
            ?>
        </a>
        
    </div>
    <br />
    <a href="<?php echo SITE_PATH;?>index.php?controller=user&action=edit" class="black" >
        Chỉnh sửa thông tin
    </a>
    <div>
    <ul id="menu-link">
     <a href="<?php echo SITE_PATH;?>index.php?controller=find&action=findProducts"><li>Tìm kiếm sản phẩm</li></a>
        <a href="<?php echo SITE_PATH;?>index.php?controller=product&action=new"><li>Đăng sản phẩm</li></a>
        <a href="<?php echo SITE_PATH;?>index.php?controller=user&action=showListProducts&user_id=<?php echo $user["id"];?>"><li>Sản phẩm đã đăng</li></a>
        <a href="<?php echo SITE_PATH;?>index.php?controller=user&action=showListExchangeConsider"><li class="end-list">Giao dịch cần duyệt</li></a>
        <a href="<?php echo SITE_PATH;?>index.php?controller=user&action=showListExchangeWait"><li class="end-list">Giao dịch đợi đối tác duyệt</li></a>
        <a href="<?php echo SITE_PATH;?>index.php?controller=user&action=showListDoneExchange"><li>Giao dịch đã trao đổi</li></a>
        <a href="<?php echo SITE_PATH;?>index.php?controller=user&action=showListCancleExchange"><li>Giao dịch không thành công</li></a>
    </ul>
</div>

</div>