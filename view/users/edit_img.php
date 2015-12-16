<?php
    include "view/theme/header.php";
?>
<?php
    include "view/theme/left_menu_hp.php";
?>
<div id="center-content-blog" >
    <div id="table-div">
    <div class="title-table"><h2>Chỉnh sửa ảnh cá nhân</h2></div>
    <form method="POST" enctype="multipart/form-data">
    <p  style="color: red;font-size: 20px;align: center; padding-left: 50px;" ><?php if(isset($error)){echo $error;} ?> </p>
    <table id="edit-info" class="content-table">
    <tr>
    <td><img width="400px" src="<?php  echo $user['image']; ?>" /></td>
    </tr>
    <tr>
    <td><input type="file" name="image"/><br /></td>
    </tr>
    <tr>
        <td ><input style="margin-left: 0px;" type="submit" value="Lưu thay đổi" name="ok" /></td>
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