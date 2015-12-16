<?php
    include "view/theme/header.php";
?>
<?php
    include "view/theme/left_menu.php";
?>
    <div id="center-content-blog" >
    <div id="table-div">
    <div class="title-table">
        <h2>Sửa sản phẩm trao đổi</h2></div>
    <form method="POST" enctype="multipart/form-data">
    <p  style="color: red;font-size: 20px;align: center; padding-left: 50px;" >
        <?php if(isset($error)){echo $error;
        if($error=="Sửa sản phẩm thành công"){
                ?>
                <a href='<?php echo SITE_PATH;?>index.php?controller=product&action=view&user_id=<?php echo $user["id"]; ?>&product_id=<?php echo $product["id"]; ?>' class='green'> >>>Xem sản phẩm</a>
                <?php
            }
        } 
            
        ?> </p>
    <table id="edit-info" class="content-table">
    <tr>
            <td>Tiêu đề</td>
            <td>
                <input type="text" value="<?php echo $product["title"]; ?>" name="product_title" width="500px" />
            </td>
        </tr>
        <tr>
            <td>Tên sản phẩm</td>
            <td>
                <input type="text" value="<?php echo $product["name"] ;?>" name="product_name" placeholder="Iphone 5s" width="500px" />
            </td>
        </tr>
        <tr>
            <td>Danh mục</td>
            <td style="padding-left:  20px;">
                <select name="product_tag">
                    <option><?php echo $product["tag"];?></option>
                    <option>Chọn Danh Mục</option>
                    <option style="background-color:#dcdcc3;font-weight:bold;" disabled="disabled" >
			
				-- Xe cộ --
                    </option>
                    <option>Xe Máy</option>
                    <option>Ô tô</option>
                    <option>Xe đạp</option>
                    <option>Xe tải, xe khác</option>
                    <option>Phụ tùng xe</option>
                    <option style="background-color:#dcdcc3;font-weight:bold;" disabled="disabled" >
			
				-- Đồ Điện Tử --
                    </option>
                    <option>Điện Thoại di động</option>
                    <option>Máy tính bảng</option>
                    <option>Máy tính, Laptop</option>
                    <option>Máy ảnh, Máy quay</option>
                    <option>Tivi, Loa, Amply, Máy nghe nhạc</option>
                    <option>Phụ kiện, Linh kiện</option>
                    <option style="background-color:#dcdcc3;font-weight:bold;" disabled="disabled" >
				-- Thời trang, Đồ dùng cá nhân --  	
                    </option>
                    <option>Quần áo</option>
                    <option>Giày dép, Túi xách, Phụ kiện</option>
                    <option>Mẹ và bé</option>
                    <option style="background-color:#dcdcc3;font-weight:bold;" disabled="disabled" >
				-- Nội ngoại thất, Đồ gia dụng --
                    </option>
                    <option>Tủ lạnh, Máy lạnh, Máy giặt</option>
                    <option>Nội ngoại thất, Cây cảnh</option>
                    <option>Đồ gia dụng gia đình khác</option>
                    <option style="background-color:#dcdcc3;font-weight:bold;" disabled="disabled" >
				-- Giải trí, Thể thao, Sở thích --
                    </option>
                    <option>	Vật nuôi, Thú cưng</option>
                     <option>Âm nhạc, Phim, Sách</option>
                     <option>Đồ thể thao, Dã ngoại</option>
                     <option>Sưu tầm, Game, Sở thích khác</option>
                     <option style="background-color:#dcdcc3;font-weight:bold;" disabled="disabled" >
				-- Đồ dùng văn phòng, công nông nghiệp --
                    </option>
                    <option>Đồ dùng văn phòng</option>
                     <option>Đồ chuyên dụng, Giống nuôi trồng</option>
                     <option>Đồ thể thao, Dã ngoại</option>
                     <option>Du lịch</option>
                     <option style="background-color:#dcdcc3;font-weight:bold;" disabled="disabled" >
				-- Các loại khác --
                    </option>
                     <option>Các loại khác</option>
                 </select>
            </td>
        </tr>
        <tr>
            <td>Ảnh sản phẩm</td>
            <td style="padding-left:  20px;">
                <input type="file" name="product_image"  />
            </td>
        </tr>
        
        
        <tr>
            <td>Thông tin thêm</td>
            <td style="padding-left:  20px;">
                <textarea placeholder="Thông tin sản phẩm muốn bán bằng tiếng việt" cols="40" rows="5"  name="product_info"><?php echo $product["info"]; ?></textarea>
            </td>
        </tr>
         <tr>
            <td>Quy trình trao đổi</td>
            <td style="padding-left:  20px;">
                <textarea placeholder="Người bán và người mua tự thỏa thuận"cols="40" rows="3"  name="product_change_way"><?php echo $product["change_way"]; ?></textarea>
            </td>
        </tr>
         <tr>
            <td>Phân quyền</td>
            <td style="padding-left:  20px;">
                <select name="product_level">
                    <option><?php echo $product["access_level"];?></option>
                    <?php if($product["access_level"]!="Mọi người") echo "<option>Mọi người</option>"; ?>
                    <?php if($product["access_level"]!="Chỉ bạn bè") echo "<option>Chỉ bạn bè</option>"; ?>
                    <?php if($product["access_level"]!="Chỉ mình tôi") echo "<option>Chỉ mình tôi</option>"; ?>
                    <?php if($product["access_level"]=="") echo "<option>Mọi người</option>
                    <option>Chỉ mình tôi</option>
                    <option>Chỉ bạn bè</option>";?>
                    
                 </select>
            </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Lưu thay đổi" name="ok" /></td>
        </tr>
        <tr>
            <td></td>
            <td style="padding-left:  20px;"><a class="white" href="<?php echo SITE_PATH;?>index.php?controller=user&action=block">Khóa tài khoản</a></td>
        </tr>
    </table>
    </form>
    </div>
</div>
    <?php
    include "view/theme/right_menu.php";
    include "view/theme/footer.php";
?>