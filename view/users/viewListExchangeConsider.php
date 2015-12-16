<?php
    include "view/theme/header.php";
?>
<?php
    include "view/theme/left_menu.php";
?>
    <div id="center-content-blog" >
        
        <div id="table-div">
            <div class="title-table">
                <h3>Bạn nhận được các yêu cầu trao đổi</h3>
            </div>
            <table id="edit-info" class="content-table_find">
                <?php
                if(mysql_num_rows($ex_u)==0){
                    echo "<h3>Không có giao dịch nào trong mục này<h3>";
                }
                while($listExchangeU = mysql_fetch_array($ex_u)){
                    if($listExchangeU["type"]==1){
                $u=getUserByProductId($listExchangeU["product_id2"]);
                echo "<tr><td><img width='50px' height='50px' src=' $u[image]' /></td>";
                echo "<td><a class='green' href='index.php?controller=exchange&action=viewExchangeConsider&id=".$listExchangeU['id']."'>".$u['fullname']." muốn trao đổi sản phẩm với bạn<br>";
                echo "Thời gian: ".date("H:i - d/m/Y", $listExchangeU["time"])."</a></td></tr>";
                }
                }
                ?>
            </table>
        </div>
        
    </div>
    <?php
    //include "view/theme/right_menu.php";
    include "view/theme/footer.php";
?>