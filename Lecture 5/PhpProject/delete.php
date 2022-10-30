<?php
    require "./connection.php";

    try {
        $sql = "DELETE FROM users WHERE id=3";
        $conn->exec($sql);
        echo "<br>Deleted successfully<br>";

    } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }

    $conn = null;
?>