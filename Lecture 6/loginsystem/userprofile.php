<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        session_start();
        if(!(isset($_SESSION['user_id']) 
            && isset($_SESSION['user_name']) 
            && isset($_SESSION['user_email']))){
            $URL = "./index.php";
            header('Location: '.$URL);
        }
    ?>
    <style>
        body{
            padding: 0px;
            margin: 0px;
        }
        .logout_button{
            text-decoration: none;
            color: white;
            font-size: 12px;
            padding: 5px;
        }
        .logout_button:hover{
            text-decoration: none;
            color: salmon;
            font-size: 14px;
        }

    
    </style>
    <title><?php echo $_SESSION['user_name'] ?></title>
</head>
<body>
    <div style="background-color:blue; color: white; width: 100%;">
        <span class="logout_button"><?php echo $_SESSION['user_name'] ?></span> |
         <a class="logout_button" href="./logout.php">Logout</a>
    </div>

    <div style="text-align: center;">
        <h3>Name: <?php echo $_SESSION['user_name'] ?></h3>
        <p>Email:<?php echo $_SESSION['user_email'] ?></p>
        <p>ID: <?php echo "USR10000".$_SESSION['user_id'] ?></p>
    </div>
    
</body>
</html>