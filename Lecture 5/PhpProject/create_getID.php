<?php
    require './connection.php';

    try {
        $sql = "INSERT INTO users (name,age, roll)
        VALUES ('Barsha', '30', '6')";
        $conn->exec($sql);
        $last_id = $conn->lastInsertId();
        
        echo "<br>Successfully inserted a new record!.<br> Last inserted ID: " . $last_id;
    } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }


    $conn = null;
?>