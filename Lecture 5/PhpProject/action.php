<?php
    if(isset($_POST['email'])){
        echo "<h1>".$_POST['email']."</h1>";
    }else{
        echo "Nothing is posted!";
    }
    // if(isset($_GET['email'])){
    //     echo "<h2>".$_GET['email']."</h2>";
    // }
?>
