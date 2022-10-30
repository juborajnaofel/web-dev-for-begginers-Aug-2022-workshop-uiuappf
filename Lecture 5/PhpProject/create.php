<?php
    require "./connection.php";

    try {
        $conn->exec("INSERT INTO users (name,age, roll) VALUES ('Bijoy', '21', '12')");
        echo "<br>Created successfully<br>";
    } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }

    $conn = null;
?>