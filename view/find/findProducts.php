<?php
    include "view/theme/header.php"
?>
<?php
    include "view/theme/left_menu.php";
?>
<div id="center-content-blog" >
    <div id="table-div">
    <div class="title-table">
        <h2>Tìm kiếm sản phẩm</h2></div>
    <form method="POST" enctype="multipart/form-data">
    <p  style="color: red;font-size: 20px;align: center; padding-left: 50px;" >
        <?php if(isset($error)){echo $error;
        } 
            
        ?> </p>
    <table id="edit-info" class="content-table">
        <tr>
            <td>Tên sản phẩm</td>
            <td>
                <input type="text" value="" name="product_name" placeholder="Iphone 5s" width="500px" />
            </td>
        </tr>
        <tr>
            <td>Danh mục</td>
            <td style="padding-left:  20px;">
                <select name="product_tag">
                    
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
            <td></td>
            <td><input type="submit" value="Tìm Kiếm" name="ok" /></td>
        </tr>
    </table>
    </form>
    </div>
</div>
<?php
    include "view/theme/right_menu.php";
?>
<?php
    include "view/theme/footer.php";
?>