<?php
    $servername = "localhost";
    $username = "root";
    $password = "hello";
    $db_name = "webworkshop";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$db_name", $username, $password);
        //PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Successfully Connected!";
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
?>