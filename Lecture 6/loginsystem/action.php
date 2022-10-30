<?php
    if(isset($_POST['email']) && isset($_POST['password'])){
        $email = $_POST['email'];
        $password = $_POST['password'];

        // echo $email, $password;

        //database query
        require "connection.php";

        try {
            $sql = "SELECT id,name,email FROM users WHERE email='".$email."'";
            // echo $sql;
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetch();
    
            echo var_dump($result);
            if($result == false){
                echo "Nothing Found";

                $URL = "./index.php";
                header('Location: '.$URL);


            }else{
                echo "found";
                session_start();
                $_SESSION['user_id'] = $result['id'];
                $_SESSION['user_name'] = $result['name'];
                $_SESSION['user_email'] = $result['email'];

                echo "Session check======";
                echo  $_SESSION['user_id'],  $_SESSION['user_name'], $_SESSION['user_email'];

                $URL = "./userprofile.php";
                header('Location: '.$URL);
            }

        } catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        $conn = null;
        
    }
?>