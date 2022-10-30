<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        table, th,td {
            border: solid 1px black;
        }
    </style>
    <title>Document</title>
</head>
<body>
<?php
    require "./connection.php";
    echo "<hr>";
    try {
        $stmt = $conn->prepare("SELECT * FROM users WHERE id=".$_GET['id']."");
        $stmt->execute();
        $result = $stmt->fetchAll();

        echo '<br>'.var_dump($result).'<br><hr>';
        echo "<table >";
            foreach ($result as $row) {
                echo "<tr>";
                echo '<td>'.$row['id']."</td>
                <td>".$row['name']."</td>
                <td>".$row['age']."</td>
                <td>".$row['roll']."</td>";
                echo "</tr>";
            }
        echo "</table>";
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    $conn = null;
?>   
</body>
</html>

