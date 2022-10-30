<?php
    session_start();
    session_destroy();
    
    $URL = "./index.php";
    header('Location: '.$URL);

?>