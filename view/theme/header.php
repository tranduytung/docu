<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<title>docu.com</title>
	<link rel="stylesheet" type="text/css" href="view/theme/asset/css/style.css"/>
    <link rel="stylesheet" type="text/css" href="view/theme/asset/css/style_slide.css"/>
	<link rel="stylesheet" type="text/css" href="view/theme/asset/css/size.css"/>
	<link rel="stylesheet" type="text/css" href="view/theme/asset/css/color.css"/>
    <link rel="stylesheet" type="text/css" href="view/theme/asset/css/align.css"/>
	<link rel="stylesheet" href="view/theme/asset/css/gridslide.css" type="text/css"/>
	
</head>
<body>
	<div id="top" class="_4f7n">
		<div id="banner">
			<div id="banner-title-home" class="size-25">
				<a class="white" href="index.php">docu.com</a>
			</div>
			<div id="form-seach">
				<form method="get" action="find.php">
					<input id="input-seach" type="text" name="text_find" placeholder="Nhập từ khóa" />
					<input id="input-button" type="submit" name="ok_find" value="Tìm Kiếm"/>
				</form>
			</div>
			<div id="user" class="size-17">
				<a class="white" href="<?php echo SITE_PATH;?>index.php?controller=home&action=viewHomepage">
                    <?php
                    if(isset($user)){
                       //echo $user["fullname"];
                       echo substr( $user["fullname"],  0, 17);
                       if(strlen($user["fullname"])>=17){
                        echo "...";
                       }
                    }
                    ?>
                </a>
			</div>
			<div id="image-user">
                <a href="<?php echo SITE_PATH;?>index.php?controller=user&action=editImage" >
                <img width="25px" height="25px" src="<?php echo $user['image']; ?>"/></a>	
			</div>
            <div id="form-log-out">
                <a class="white size-17"  href="<?php echo SITE_PATH;?>index.php?controller=notification"><p>Thông Báo()</p></a>
            </div>
            <div id="form-log-out">
                <a class="white size-17"  href="<?php echo SITE_PATH;?>index.php?controller=user&action=logout"><p>Đăng Xuất</p></a>
            </div>
		</div>		
	</div>
 <div id="body-blog">
