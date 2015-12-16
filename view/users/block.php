<?php
    include "view/theme/header.php";
    
    
?>
<?php
    include "view/theme/left_menu.php";
?>
<div id="center-content-blog" >
    <div id="table-div">
    <div class="title-table"><h2>Khóa tài khoản</h2></div>
    <form method="POST">
    <p  style="color: red;font-size: 20px;align: center; padding-left: 50px;" ><?php if(isset($error)){echo $error;} ?> </p>
    <table id="edit-info" class="content-table">
        <tr>
            <td>Password</td>
            <td>
                <input type="password"  name="password" width="500px" />
            </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Lưu thay đổi" name="ok" /></td>
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