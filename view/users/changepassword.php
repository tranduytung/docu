<?php
    include "view/theme/header.php";
?>
<?php
    include "view/theme/left_menu_hp.php";
?>
<div id="center-content-blog" >
    <div id="table-div">
    <div class="title-table"><h2>Đổi Password</h2></div>
    <form method="POST">
    <p  style="color: red;font-size: 20px;align: center; padding-left: 50px;" ><?php if(isset($error)){echo $error;} ?> </p>
    <table id="edit-info" class="content-table">
        <tr>
            <td>Password cũ</td>
            <td>
                <input type="password"name="old_password" width="500px" />
            </td>
        </tr>
        <tr>
            <td>Password mới</td>
            <td>
                <input type="password"  name="new_password" width="500px" />
            </td>
        </tr>
        <tr>
            <td>Nhập lại Password mới</td>
            <td>
                <input type="password" name="re_new_password" width="500px" />
            </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Lưu thay đổi" name="ok" /></td>
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