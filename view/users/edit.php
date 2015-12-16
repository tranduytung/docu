<?php
    include "view/theme/header.php";
?>
<?php
    include "view/theme/left_menu_hp.php";
?>
<div id="center-content-blog" >
    <div id="table-div">
    <div class="title-table"><h2>Chỉnh sửa thông tin cá nhân</h2></div>
    <form method="POST">
    <p  style="color: red;font-size: 20px;align: center; padding-left: 50px;" ><?php if(isset($error)){echo $error;} ?> </p>
    <table id="edit-info" class="content-table">
        <tr>
            <td>Họ Và Tên</td>
            <td>
                <input type="text" value="<?php echo $user['fullname']; ?>" name="fullname" width="500px" />
            </td>
        </tr>
        <tr>
            <td>Số Điện Thoại</td>
            <td>
                <input type="text" value="<?php echo $user['phonenumber']; ?>" name="phonenumber" />
            </td>
        </tr>
        <tr>
            <td>Quê Quán</td>
            <td>
                <input type="text" value="<?php echo $user['hometown']; ?>" name="hometown" />
            </td>
        </tr>
        <tr>
            <td>Nơi ở</td>
            <td>
                <input type="text" value="<?php echo $user['address']; ?>" name="address" />
            </td>
        </tr>
         <tr>
            <td>Giới tính</td>
            <td style="padding-left:  20px;">
                <select name="sex">
                    <?php echo "<option>$user[sex]</option>";
                        if($user['sex']!="Nam") echo  "<option>Nam</option>";
                        if($user['sex']!="Nữ") echo  "<option>Nữ</option>";   
                        if($user['sex']!="Giới tính thứ 3") echo  "<option>Giới tính thứ 3</option>";
                        if($user['sex']=="") echo "<option>Nam</option>
                    <option>Nữ</option>
                    <option>Giới tính thứ 3</option>"; 
                        ?>
                    
                 </select>
            </td>
        </tr>
        <tr>
        <td>Năm Sinh</td>
        <td style="padding-left:  20px;">
        <?php if(isset($user['birthday'])) echo "<input type='date' name='bday' min='1970-01-01' value='$user[birthday]' />";?>
        
        </td>
        </tr>
        <tr>
            <td>Thông tin thêm</td>
            <td style="padding-left:  20px;">
                <textarea cols="40" rows="4"  name="info"><?php echo $user['info'];?></textarea>
            </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Lưu thay đổi" name="ok" /></td>
        </tr>
        <tr>
            <td></td>
            <td style="padding-left:  20px;"><a class="green" href="<?php echo SITE_PATH;?>index.php?controller=user&action=changePassword">Đổi password</a></td>
        </tr>
        <tr>
            <td></td>
            <td style="padding-left:  20px;"><a class="green" href="<?php echo SITE_PATH;?>index.php?controller=user&action=block">Khóa tài khoản</a></td>
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