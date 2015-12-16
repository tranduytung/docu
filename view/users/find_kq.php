<?php
    include "view/theme/header.php"
?>
<?php
    include "view/theme/left_menu.php";
?>
<div class="center-content-blog">

</div>
<div id="center-content-blog" >
    <div id="table-div">
    <div class="title-table"><h2>Kết Quả Tìm Kiếm cho từ khóa <?php echo "'".$text."'" ?></h2></div>
    
    <table id="edit-info" class="content-table_find">
        <?php
            if($error!=""){
                echo "<p  style='color: red;font-size: 20px;align: center; padding-left: 50px;' >$error</p>";;
            }
            else{
            $t= find_users($text);
            while($user_finded= mysql_fetch_array($t)){
                if($user_finded['level']=="1"){
                echo "<tr><td><a href='index.php?controller=home&action=viewHomepage&id=$user_finded[id]' ><img width='120px' height='120px' src=' $user_finded[image]' /></a></td>";
                echo "<td><a class='green' href='index.php?controller=home&action=viewHomepage&id=$user_finded[id]' >".$user_finded['fullname']."</a><br>"."SĐT: ".$user_finded['phonenumber']."<br>";
                if($user_finded['hometown']!=""){
                    echo "Quê Quán: ".$user_finded['hometown']."<br>";
                }if($user_finded['address']!=""){
                    echo "Đang ở tại: ".$user_finded['hometown']."</td></tr>";
                }
                }
                }
            if(mysql_num_rows($t)==0){
                echo "<p  style='color: red;font-size: 20px;align: center; padding-left: 50px;' >Không có kết quả tìm kiếm cho '$text'</p>";
            }
                }
        ?>
    </table>
    </div>
</div>
<?php
    include "view/theme/right_menu.php";
?>
<?php
    include "view/theme/footer.php";
?>
