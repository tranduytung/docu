<div id="left-menu_hp">
    <div id="left-menu_info">
        <div >
        <a class="green size-25" href="<?php echo SITE_PATH;?>index.php?controller=home&action=viewHomepage">
            <?php
                $user=getUserByid($id);
                if(isset($user)){
                echo ( $user["fullname"]);
            }
            ?>
        </a>
        </div>
        <div style="clear: both;">
        <a href="<?php echo SITE_PATH;?>index.php?controller=user&action=editImage">
            <img width="180px"  height="180x" src="<?php echo $user['image'];?>" />
        </a>
        </div>
        <br />
        <br />
        Birthday: <a class="green" href="<?php echo SITE_PATH;?>index.php?controller=user&action=edit" ><?php echo $user['birthday']; ?></a>
        <br />
         <br />    
        Giới tính: <a class="green" href="<?php echo SITE_PATH;?>index.php?controller=user&action=edit" ><?php echo $user['sex']; ?></a>
        <br />
        <br />
        Điện thoại: <a class="green" href="<?php echo SITE_PATH;?>index.php?controller=user&action=edit" ><?php echo $user['phonenumber']; ?></a>
        <br />
         <br />
        Quê Quán: <a class="green" href="<?php echo SITE_PATH;?>index.php?controller=user&action=edit" ><?php echo $user['hometown']; ?></a>
         <br />
         <br />
        Nơi sống: <a class="green" href="<?php echo SITE_PATH;?>index.php?controller=user&action=edit" ><?php echo $user['address']; ?></a>
         <br />
         <br />
        Thông tin thêm: <a class="green" href="<?php echo SITE_PATH;?>index.php?controller=user&action=edit" ><?php echo $user['info']; ?></a>
    
    </div>
    <br />
    
</div>