<?php
    function getProducts(){
        $sql="select * from products order by creat_time DESC";
        return $query=mysql_query($sql);
    }
    function insertProduct($user_id,$product_title,$product_name,$product_tag,
        $product_image,$product_image_more,$product_info,$change_way,$acess_level){
        $time=time();
        $sql="INSERT INTO products(user_id,title,name,tag,image,image_more,info,change_way,access_level,creat_time)
        VALUES('$user_id','$product_title','$product_name','$product_tag','$product_image','$product_image_more','$product_info','$change_way','$acess_level',$time)";
        mysql_query($sql);
    }
    function insertImageMore($image){
        
    }
    function getProductsByUserId($user_id){
        $sql="select * from products where user_id='$user_id' ";
        return $query=mysql_query($sql);
        // mysql_fetch_array($query);
    }
    function delProduct($product_id){
        $sql ="delete from products where id= $product_id";
        mysql_query($sql);
    }
    function checkProductById($user_id){
        $sql="select * from products where user_id='$user_id'";
        $query=mysql_query($sql);
        if(mysql_num_rows($query) > 0){
            return true;
        }
        else {
            return false;
            }
    }
    function getProductByProductId($product_id){
        $sql="select * from products where id= '$product_id'";
        $query=mysql_query($sql);
        return mysql_fetch_array($query);
    }
    function updateProduct($p){
        $sql="update products set title='$p[title]', name = '$p[name]', tag='$p[tag]',
         image='$p[image]',info='$p[info]',change_way='$p[change_way]',access_level='$p[access_level]' where id=$p[id]";
        mysql_query($sql);
    }
    function updateViewById($view,$id){
        $sql="update products set view='$view' where id=$id";
        mysql_query($sql);
    }
    function findProductsByNameAndTag($t1,$t2){
        $sql="select * from products where tag = '$t2' and name like '%$t1%'";
        return $query= mysql_query($sql);
    }
    function findProductsByName($t1){
        $sql="select * from products where name like '%$t1%'";
        return $query= mysql_query($sql);
    }
    function findProductsByTag($t1){
        $sql="select * from products where tag = '$t1'";
        return $query= mysql_query($sql);
    }
    function getUserByProductId($p_id){
        $sql="select * from products, users where products.user_id=users.id and products.id=$p_id";
        $query= mysql_query($sql);
        return mysql_fetch_array($query);
    }
    function checkIssetProductByProductId($product_id){
        $sql="select * from products where id='$product_id'";
        $query=mysql_query($sql);
        if(mysql_num_rows($query) > 0){
            return true;
        }
        else {
            return false;
            }
    }
?>