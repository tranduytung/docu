<?php
    function insertUser($fullname,$email,$password,$phonenumber){
        $time=time();
        $sql="INSERT INTO users(fullname,email,password,phonenumber,create_time,image)
        VALUES('$fullname','$email','$password','$phonenumber',$time,'images/user_default.png')";
        mysql_query($sql);
    }
    function checkUserLogin($email,$password){
        $sql="select * from users where email = '$email' and password = '$password'";
        $query= mysql_query($sql);
		if (mysql_num_rows($query) > 0) {
            $user =mysql_fetch_array($query);
            $_SESSION['user_id']=$user['id'];
            $sql1="update users set level = 1 where email = '$email'";
            mysql_query($sql1);
			return true;
		}
		else {
			return false;
		}
    }
    function checkUser($email){
        $sql="select * from users where email='$email'";
        $query=mysql_query($sql);
        if(mysql_num_rows($query) > 0){
            return false;
        }
        else {
            return true;
            }
    }
    function checkUserByID($id){
        $sql="select * from users where id='$id'";
        $query=mysql_query($sql);
        if(mysql_num_rows($query) > 0){
            return true;
        }
        else {
            return false;
            }
    }
    function getUserByid($id){
        $sql="select * from users where id='$id'";
        $query=mysql_query($sql);
        return mysql_fetch_array($query);
    }
    function updateUser($p){
        $sql="update users set fullname='$p[fullname]', phonenumber = '$p[phonenumber]', hometown='$p[hometown]',
         address='$p[address]',sex='$p[sex]',birthday='$p[birthday]',info='$p[info]' where id=$p[id]";
        mysql_query($sql);
    }
    function blockUser($id){
        $sql="update users set level=0 where id='$id'";
        $query=mysql_query($sql);
    }
    function updateImages($p){
        $sql="update users set  image='$p[image]' where id='$p[id]'";
        $query=mysql_query($sql);
    }
    function updatePassword($t,$id){
        $sql="update users set  password='$t' where id='$id'";
        $query=mysql_query($sql);
    }
    function find_users($t){
        $sql="select * from users where fullname like '%$t%'";
        return $query= mysql_query($sql);
       // return mysql_fetch_array($query);
    }
    
?>