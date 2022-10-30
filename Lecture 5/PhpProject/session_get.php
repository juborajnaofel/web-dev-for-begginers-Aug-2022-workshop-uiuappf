<?php
    session_start();
    if(isset($_SESSION['userInfo'])){
        echo var_dump($_SESSION['userInfo']);
    }else{
        echo "Not found!";
    }
?>