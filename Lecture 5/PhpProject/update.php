<?php
    require "./connection.php";

    try {
        $sql = "UPDATE users SET name='Binoy Munshi',age='22', roll='100' WHERE id=2";
        // Prepare
        $stmt = $conn->prepare($sql);
        // execute query
        $stmt->execute();

        echo "[".$stmt->rowCount()."] Records are Upadted";
    } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }

    $conn = null;
?>