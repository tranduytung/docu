<!doctype html> 
<html> 
<head> 
<meta charset="utf-8"/> 
<title>Đăng Nhập</title> 
<link rel="stylesheet" type="text/css" href="view/theme/asset/css/sign_up.css" /> 
<link rel="stylesheet" type="text/css" href="view/theme/asset/css/style.css" />
<link rel="stylesheet" type="text/css" href="view/theme/asset/css/size.css" />
<link rel="stylesheet" type="text/css" href="view/theme/asset/css/color.css" />
</head> 
<body>
    <div id="top">
        <div id="banner">
            <div id="banner-title" class="size-30 ">
                <a class="white" href="index.php">docu.com</a> 
            </div>
            <div id="form-sign">
                <a class="white size-25"  href="<?php echo SITE_PATH;?>index.php?controller=user&action=register"><p>Đăng Kí</p></a>
            </div>
        </div>
    </div>
    
<div class="form"> 
    <div id="formDangKi"> 
    <form action="" method="POST" name="form"> 
    <h1> Đăng Nhập </h1> 
    <?php
        if(isset($error)){
            echo "<h3 style='color:white; text-align: center;'>".$error."</h3>";
        }
    ?>
           <!--Text box for email --> 
        <p><label for="Email">Email</label></p> 
        <input id="Email" name="email" placeholder="Eg: abc@domain.com" type="text"/>  
     <!--Text box for password --> 
        <p><label for="pass">Password</label></p> 
        <input id="Password" name="password" placeholder="Password"  type="password"/> 
        <label><input type="checkbox" name="remember" /> Ghi nhớ đăng nhập</label>
        <!--Text box for Sign up --> 
        <p class="signin button">  
        <input type="submit" value="Đăng Nhập" name="ok"/> 
        </p> 
        </form> 
    </div>
</div>

<?php
    include "view/theme/footer.php";
?>