<?php
    session_destroy();
    setcookie("user_id",0,time());
    redirect("index.php");
?>