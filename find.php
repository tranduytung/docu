<?php
    function redirect($url){
        header("location:".$url);
    }
    $text=$_GET['text_find'];
    redirect("index.php?controller=find&action=findUsers&text=$text");
?>